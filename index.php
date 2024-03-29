<?php include("./htm/header1.inc");?>
	<link type="text/css" href="./common/styles.css" rel="stylesheet" />
	<script type="text/javascript" src="./common/cart.js" async></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="./common/jquery-3.4.1.min.js"></script>

</head>

<body>
<!-- Start grid-container here -->
<div class="grid-container">
	<!--Header-->
	<div class ="header">
		<h1>Burlington Bikes</h1>
	</div>
 
	<!--Side Navigation-->
	<div class="left">		
		<div class="sidenav">			
			<a href="#">Home</a>
			<a href="./htm/about.htm.php">About</a>
			<a href="./htm/payment.htm.php">Payment</a>
			<a href="./htm/login.htm.php">Login</a>
			</ul>
		</div>
	</div>
	
	<!--Bikes shop-item-->
	<!-- Code taken from https://www.youtube.com/watch?v=YeFzkC2awTM -->
	<div class="middle1" >
		<div class="shop-item">
			<a target="_blank" href="./assets/images/bike1.png">
			<img class="shop-item-image" src="./assets/images/bike1.png" alt="Bike 1" width="600" height="400">
			</a>
			
		<div class="shop-item-details">
				<p class="shop-item-title">Basic MTB</p>
				<p>Our basic mountain bikes are great for riders looking for a durable multipurpose bike to ride on beginner mountain bike trails, dirt roads, bike paths, or just around town.</p>
				<p class="shop-item-price">$119.99</p>
				<button class="btn btn-primary shop-item-button" type="button">Add to Cart</button>
		</div>
		</div>

		<div class="shop-item">
			<a target="_blank" href="./assets/images/bike2.png">
			<img class="shop-item-image" src="./assets/images/bike2.png" alt="Bike2" width="600" height="400">
			</a>
		<div class="shop-item-details">
			<p class="shop-item-title">XC/Trail</p>
			<p>Whether you're looking for a hardtail or full suspension, ultimate speed or confident handling, we've got you covered. We carry a diverse range of cross country and trail bikes.</p>
			<p class="shop-item-price">$195.99</p>
			<button class="btn btn-primary shop-item-button" type="button">Add to Cart</button>
		</div>
		</div>

		<div class="shop-item">
			<a target="_blank" href="./assets/images/bike3.png">
			<img class="shop-item-image" src="./assets/images/bike3.png" alt="Bike3" width="600" height="400">
			</a>
			<div class="shop-item-details">
				<p class="shop-item-title">AM/Enduro</p>
				<p>Like to climb to the top and come back down even faster? Innovations in frame geometry and suspension technology have allowed for true "quiver killers". </p>
				<p class="shop-item-price">$178.99</p>
				<button class="btn btn-primary shop-item-button" type="button">Add to Cart</button>
			</div>
		</div>

		<div class="shop-item">
			<a target="_blank" href="./assets/images/bike4.png">
			<img class="shop-item-image" src="./assets/images/bike4.png" alt="Bike4" width="600" height="400">
			</a>
			<div class="shop-item-details">
				<p class="shop-item-title">Plus Bike</p>
				<p>Plus bikes are are often called mid fats, and that is because their 2.8-3.0 inch tire width strikes a balance between standard mountain bike tires and those of a fat bike. </p>
				<p class="shop-item-price">$233.99</p>
				<button class="btn btn-primary shop-item-button" type="button">Add to Cart</button>
			</div>
		</div>
		<div class="shop-item">
			<a target="_blank" href="./assets/images/bike5.png">
			<img class="shop-item-image" src="./assets/images/bike5.png" alt="Bike5" width="600" height="400">
			</a>
			<div class="shop-item-details">
				<p class="shop-item-title">Fat Bike</p>
				<p>Keep riding all winter long with a fat bike. Fat bikes aren't just fun in the snow though! Many riders use fat bikes to ride on the beach or even as their primary trail bike.</p>
				<p class="shop-item-price">$156.99</p>
				<button class="btn btn-primary shop-item-button" type="button">Add to Cart</button>
			</div>
		</div>
		<div class="shop-item">
			<a target="_blank" href="./assets/images/bike6.png">
			<img class="shop-item-image" src="./assets/images/bike6.png" alt="Bike6" width="600" height="400">
			</a>
			<div class="shop-item-details">
				<p class="shop-item-title">Townies and Cruisers</p>
				<p>Townies take the general concept of comfort hybrids and infuse them with the style of classic cruiser bikes. They are fun, stylish, and comfortable. They feature a special flat-foot design.</p>
				<p class="shop-item-price">$178.99</p>
				<button class="btn btn-primary shop-item-button" type="button">Add to Cart</button>
			</div>
		</div>
	</div>	
	
		<div class="right" >
			<p> Burlington Bikes has been a staple in the Vermont cycling community for over 60 years.
				Our dedication to exceptional customer service and quality bike repairs has landed us a place as one of the 
				Top 100 Bike Dealers in America.The Burlington Bikes family is as diverse as our customers, but we all love having 
				fun on our bikes. Our goal is to make cycling a great experience for you. We do that by helping you get equipped 
				with the right bike and accessories for your needs, and by repairing your bike right the first time so you can 
				spend more time riding.</p>
				
			<h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
			</div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price" id="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">CHECKOUT</button>
		</div>
  
		<div class="footer">
			<p style ="color:#000;">&copy; 2019 Burlington Bikes<p>
		</div>
	</div>
	
	<!-- End grid-container-->




</body>


</html>