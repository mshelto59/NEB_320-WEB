<?php
session_start();
require('dbConnect.php');
    
$action = $_GET['action'];
switch($action){
    case('signup'):
        $fn = validateData(cleanData($_POST['fn']), 'text');
        $ln = validateData(cleanData($_POST['ln']), 'text');
        $cemail = validateData(cleanData($_POST['cemail']), 'email');
        $cpassword = password_hash(cleanData($_POST['cpassword']), PASSWORD_DEFAULT);
        
        $_SESSION['username'] = $cemail;
        
        $customerLoginQuery = "Insert into customerLogin values ('". $cemail . "','" . $cpassword . "');";
        $customersQuery = "Insert into customers values ('". $fn . "','" . $ln . "','" . $cemail . "');";

        runQuery($customerLoginQuery);
        runQuery($customersQuery);
        echo($cpassword);
        header("Location: ../htm/payment.htm.php");
        break;
        
    case('login'):
        $cemail = validateData(cleanData($_POST['cemail']),'email');
        $cpassword = validateData(cleanData($_POST['cpassword']), 'none');
        
        $_SESSION['username'] = $cemail;
        
        $checkPasswordQuery = "Select cpassword from customerLogin where cemail = '" . $cemail . "';";
        $realPassword = runQuery($checkPasswordQuery)->fetch_assoc()['cpassword'];
        echo($realPassword."\n");
        echo($cpassword);
        if(password_verify($cpassword, $realPassword)){            
            header("Location: ../htm/payment.htm.php");
        }
        else{         
            setcookie("BadPass", "true", time()+3600, '/');
            header("Location: ../htm/login.htm.php");
        }
        break;
}

function cleanData($data){
    return htmlspecialchars(stripslashes($data));
}

function validateData($data, $dataType){
    $output = "";
    
    $emailREGEX = '/^[A-Za-z0-9]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $textREGEX = '/^[A-Za-z]*$/';
    
    switch($dataType){
        case('email'):
            if (preg_match($emailREGEX, $data)){
                return $data;
            }
            else{
                badData();                
            }
            break;
        case('text'):
            if(preg_match($textREGEX, $data)){
                return $data;
            }
            else{
                badData();                
            }
            break;
        case('none'):
            return $data;
    }
}

function badData(){
    setcookie("BadDataVal", "true", time()+3600, '/');
    header("Location: ../htm/login.htm.php");
}

?>