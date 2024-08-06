

<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wheel of Fortune</title>
  <link rel="stylesheet" type="text/css" href="raf_style.css">
  <link rel="stylesheet" href="menu.css">
  <style>
  body {
    background-color: #90EE90;
  }
    #wheel {
      border-radius: 50%;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
#arrow {
  position: absolute;
  top: 0;
  left: 48.3%;

  transform: translateX(-50%);
  font-size: 24px;
  font-weight: bold;
  color: #000;
  margin-top: 26vh;

}

    #winner-output {
      font-size: 24px;
      font-weight: bold;
      color: #000;
    }
    #winner-history {
      position: absolute;
      top: 0;
      right: 20px;
      width: 200px;
      height: 400px;
      overflow-y: auto;
      background-color: #f0f0f0;
      padding: 10px;
      border: 1px solid #ddd;
    }
    #winner-history ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    #winner-history li {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }
    #winner-history li:last-child {
      border-bottom: none;
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


	 
	
		
	
		
		



 
    <div class="coin-balance" style="position: absolute; top: 10%; left: 70%; bottom: 20%">
        <span>S<span id="silver-balance"><?php echo $silver_balance;?></span></span>
        <span>G<span id="gold-balance">0</span></span>
        <span>D<span id="diamond-balance">0</span></span>
    </div>

  
  <main>
    <section id="wheel-container">
      <canvas id="wheel" width="500" height="500"></canvas>
      <div id="arrow">⇩</div>
      <button type="hidden"id="spin-btn"></button>
      <div id="winner-output"></div>
    </section>
   
 <button id="s-ent">Entry</button>
<section id="name-input-container" style="display: none;">
  <input id="name-input" type="text" placeholder="Enter your name">
  <button id="add-name-btn">Add Name</button>
</section>


    
    <section id="winner-history">
      <h2>Winner History</h2>
      <ul id="winner-history-list"></ul>
    </section>
  </main>

<script>
  fetch('fetch_silver_balance.php')
    .then(response => response.json())
    .then(data => {
      document.getElementById('silver-balance').innerText = data.silver;
    })
    .catch(error => console.error('Error fetching silver balance:', error));
</script>
<script src="wheel.js"></script>
<script src="coin.js"></script>
<script src="menu.js"></script>
</body>
</html>
