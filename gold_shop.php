<!DOCTYPE html>
<html>
<head>
  <title>Example</title>
  <link rel="stylesheet" href="menu.css">
  <style>
  
   
   
   
   body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-color:#90EE90 ;
    }

    .container {
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .header {
      background-color: #f0f0f0;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header button {
      background-color: transparent;
      border: none;
      margin-right: 10px;
    }

    .header button:hover {
      cursor: pointer;
    }

    .header button i {
      font-size: 18px;
    }

    .content {
      flex-grow: 1;
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 20px;
    }

    .button-group {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: space-around;
     margin-bottom: 2vh;
     margin-left: 20vh;
    
      gap: 150px;
    }

    .button-group button {
  background-color: #e0e0e0;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 200px;
  height: 50px; /* adjust this value to your desired button width */
}

    .grid-container {
      width: 750px;
      height: 500px;
      background-color: #f0f0f0;
      display: grid;
      grid-template-columns: repeat(3, 3fr);
      grid-template-rows: repeat(2, 3fr);
      gap: 10px;
      padding: 10px;
      margin-right: 20vh;
    }

    .grid-container div {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
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

    <div class="content">
     
    <div class="button-group">
    <a href="silver_shop.php" class="button-link">
  <button>Silver</button>
</a>
<a href="gold_shop.php" class="button-link">
  <button>Gold</button>
</a>
<a href="diamond_shop.php" class="button-link">
  <button>Diamond</button>
</a>
      </div>
    
      <div class="grid-container">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>

  <script>function openNav() {
  document.getElementById("sidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}</script>
</body>
</html>