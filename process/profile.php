<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="menu.css">
</head>
<style>
body {
  background-color: #90EE90;
}

.profile-card {
  background-color: #F5FFB7;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
  width: 400px; /* Adjust width as needed */
  height: 400px;
  margin: 0 auto; /* Center the card horizontally */
  margin-top: 10vh;

}

.profile-card h1 {
  margin-top: 0;
  font-size: 18px; /* Adjust font size as needed */
  font-weight: bold;
}

.profile-card .title {
  font-size: 12px; /* Adjust font size as needed */
  color: #777;
}

.profile-card img {
  width: 80px; /* Adjust image size as needed */
  height: 80px; /* Adjust image size as needed */
  border-radius: 50%;
  margin-bottom: 10px;
}

.stats {
  display: flex;
  justify-content: space-around;
  margin-top: 15px;
}

.stat {
  text-align: center;
}

.stat h2 {
  font-size: 16px; /* Adjust font size as needed */
  font-weight: bold;
}

.stat span {
  display: block;
  font-size: 12px; /* Adjust font size as needed */
  color: #777;
}

.title{
 display: flex;
 justify-content: center;
 align-items: center;
}
</style>
</head>
<body>
<div class="topnav">
    <div class="topnav-left">
    <a href="#" id="menu-icon" class="closebtn" onclick="openNav()">
  <img src="assets/2-removebg-preview (1).png" alt="icon" width="40" height="40">
</a>

<!-- Side navigation menu -->
<div id="sidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
    <img src="assets/2-removebg-preview (1).png" alt="Close" width="40" height="40">
  </a>
 
  <ul style="list-style: none;">
  <li>
    <a href="uloginwel.php">
      <img src="assets/12.png" alt="Home" width="40" height="40">
      Home
    </a>
  </li>
  <li>
    <a href="raffle_cat.php">
      <img src="assets/14.png" alt="Raffle Draw" width="40" height="40">
         Raffle 
    </a>
  </li>

  
 
  <li>
    <a href="shop_cat.php">
      <img src="assets/16.png" alt="Shop" width="40" height="40">
      Shop
    </a>
  </li>
</ul>
</div>


</div>
    <div class="topnav-right">
	<a href="#">
    <img src="assets/10.png" alt="icon" width="40" height="40" style="border-radius: 50%">
  </a>
  <a href="#">
    <img src="assets/8.png" alt="icon" width="40" height="40" style="border-radius: 50%">
  </a>
  <a href="#">
    <img src="6.png" alt="icon" width="40"height="40" style="border-radius: 50%">
  </a>
  <a href="#">
    <img src="assets/4.png" alt="icon" width="40"height="40" style="border-radius: 50%">
  </a>


  <a href="#">
    <img src="" alt="profile" width="40" height="40" style="border-radius: 50%">
  </a>
    </div>
	</div>
	 
	
		
	
		


<div class="profile-card">
  <h1>Alexander Pierce</h1>
  <span class="title">Founder & CEO</span>
  <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=identicon&s=100" alt="Profile Picture">
  <div class="stats">
    <div class="stat">
      <h2>3,200</h2>
      <span>SALES</span>
    </div>
    <div class="stat">
      <h2>13,000</h2>
      <span>FOLLOWERS</span>
    </div>
    <div class="stat">
      <h2>35</h2>
      <span>PRODUCTS</span>
    </div>
  </div>
</div>

<script src="menu.js"></script>
</body>
</html>
