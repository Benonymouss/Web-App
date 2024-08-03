<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="menu.css">
<style>
body {
  background-color: #90EE90;
  font-family: Arial, sans-serif;
}

.container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 20px;
  margin-left: 9vh;

}

.card {
  background-color: #F0F0F0;
  border-radius: 10px;
  padding: 20px;
  text-align: center;
  width: 200px;
  height: 300px;
  
}

.image-container {
  height: 150px;
  width: 150px;
  border: 1px solid #ccc;
  margin: 0 auto 10px;
  background-color: #F0F0F0;
}

.arrow {
  font-size: 30px;
  margin: 0 20px;
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
    <a href="raffle.php">
      <img src="assets/14.png" alt="Raffle Draw" width="40" height="40">
         Raffle 
    </a>
  </li>
  <li>
    <a href="refered.php">
      <img src="assets/ref.png" alt="Refferals" width="40" height="40">
      Refferals
    </a>
  </li>
  <li>
    <a href="silver_shop.php">
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

	 


<h1>CASH</h1>
<div class="container">
</section>
  <div class="card">
    <a href="#">
      <div class="image-container"></div>
    </a>

    <p>Description of reward</p>
  </div>
  <div class="card">
    <a href="#">
      <div class="image-container"></div>
    </a>

    <p>Description of reward</p>
  </div>
  <div class="card">
    <a href="#">
      <div class="image-container"></div>
    </a>

    <p>Description of reward</p>
  </div>

  <div class="card">
    <a href="#">
      <div class="image-container"></div>
    </a>

    <p>Description of reward</p>
  </div>
<section>


</div>
<script src="menu.js"></script>
</body>
</html>