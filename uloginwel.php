<?php 
session_start();
require_once ('process/dbh.php');
$sql = "SELECT id, firstName,lastName,clients, dateofdraw,link,pic,prizes, status,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
	<title>Subscribe</title>
	<style>
		
		body{
		background-color: #F0F2F5;
		}
		
		
		
		.rank-table {
    width: 90%;
	margin-left:10vh ;

	
    border-collapse: collapse;
}

.rank-row {
    background-color: #f0f0f0;
}

.rank-cell {
    padding: 10px;
    border: 1px solid #ddd;
}
.topnav {
  overflow: hidden;
  background-color: #ffffff;
  position: relative;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); /* add bottom shadow */
}

  .topnav a {
    float: left;
    color: #E4E6EB;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }

  .topnav-right {
    float: right;
    display: flex;
    align-items: center;

	
  }

  .topnav-left {
    float: left;
    display: flex;
    align-items: center;

	
  }



.topnav a img:hover {
  filter: brightness(97%);
}

.topnav a img:hover + .second-icon {
  opacity: 1;
}

.second-icon {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}
  .topnav .icon {
    padding: 14px 16px;
    font-size: 17px;
    float: none;
    text-align: center;
	margin-bottom: 2vh;
	
  }


  .topnav1 {
    overflow: hidden;
    background-color: #333;
    position: relative;
	padding-left: 20px;
	padding-right: 20px;
	
	margin-left: 20px;
	margin-right: 20px;
	margin-top: 3vh;

  }

  .topnav1 a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }


.topnav1 a:hover {
    background-color: #ddd;
    color: black;
  }

  .icon {
  width: 20px;
  height: 20px;
  background-image: url("/Share/assets/men.png");
}

.topnav-left a img {
  transition: transform 0.2s ease-in-out;
  border-radius: 0;
}

.topnav-left a:hover img {
  transform: scale(1.1);
  border-radius: 50%;
  background-color: #F5FFB7;
}

.sidenav {
  height: 100%; /* full height */
  width: 0; /* initial width */
  position: fixed; /* fixed position */
  z-index: 1; /* on top of other elements */
  top: 0; /* from the top */
  left: 0; /* from the left */
  background-color: #ffffff; /* dark background */
  overflow-x: hidden; /* hide horizontal scrollbar */
  padding-top: 60px; /* add some padding */
  transition: 0.5s; /* animate width change */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 1); /* add bottom shadow */
}

.sidenav a {
  padding: 8px 8px 8px 32px;

  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
 
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;

  
}

.sidenav .closebtn img {
  float: left;
  margin-right: 22.4vh;
  margin-top: 1vh; /* adjust the margin to your liking */
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: top;
  height: 100%;
}

ul li a {
  display: flex;
  align-items: center;
  margin-top: 1vh;
}

ul li a img {
  margin-right: 10px;
  border-radius: 10px; /* add a rounded corner effect */
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* add a subtle shadow effect */
}

	</style>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
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
    <a href="#">
      <img src="assets/12.png" alt="Home" width="40" height="40">
      Home
    </a>
  </li>
  <li>
    <a href="#">
      <img src="assets/14.png" alt="Raffle Draw" width="40" height="40">
         Raffle 
    </a>
  </li>
  <li>
    <a href="#">
      <img src="assets/ref.png" alt="Refferals" width="40" height="40">
      Refferals
    </a>
  </li>
  <li>
    <a href="#">
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

	 
	
		
	
		
		
		<div class="topnav1">
  <a href="#">All</a>
  <a href="#">Entertainment</a>
  <a href="#">Bussiness</a>
  <a href="#">Gaming</a>
 
</div>







		                     
		
		
    	<table class="rank-table">
    <tr class="rank-header" bgcolor="#000">
        <th align="center" class="rank-cell">Ranking</th>
        <th align="center" class="rank-cell">Profile</th>
        <th align="center" class="rank-cell">Account Name</th>
        <th align="center" class="rank-cell">Date of Draw</th>
		<th align="center" class="rank-cell">Links</th>
        
		<th align="center" class="rank-cell">Click Count</th>
    
    </tr>

    <?php



				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['clients']."</td>";
					echo "<td>".$employee['dateofdraw']."</td>";
					
					echo "<td><p id=\"carrier\"></p>
					<a id=\"display\" href=\"" . $employee['link'] . "\" target=\"_blank\" onclick=\"showPopup(); return clickLimit(this);\">".$employee['link']."</a></td>";
				
					echo "<div id='popup' style='display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);'>
					<div style='background-color: #fff; padding: 20px; border: 1px solid #000; border-radius: 10px; width: 50%; margin: 40px auto; overflow-y: auto; max-height: 80vh;'>
					  <h1>Save This For Later</h1>
					  <h3>Step 1:</h3>
					  <img src='Screenshot 2024-07-20 074802.png' alt='Step 1 Image' style='width: 200px; height: 150px; margin: 0 auto; display: block;'>
					  <p>Log in to your Facebook account.</p>
					  <!-- ... -->
					  <button id='submit-btn'>Submit</button>
					</div>
				  </div>
				  
				<!-- Second popup -->
				<div id='popup2' style='display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);'>
				  <div style='background-color: #fff; padding: 20px; border: 1px solid #000; border-radius: 10px; width: 50%; margin: 40px auto; overflow-y: auto; max-height: 80vh;'>
					<h1>Submit Your Image</h1>
				 
				
					
					<!-- Add drag and drop functionality -->
					<form action='insert.php' method='post' enctype='multipart/form-data'>
				
				<div id='drag-drop-area' style='border: 1px dashed #ccc; padding: 20px; border-radius: 10px; overflow-y: auto; max-height: 300px;'>
  <p id='drag-drop-text' style='margin: 10px 0;'>Drag & drop an image or <input type='file' id='image-input' name='image' required style='margin: 10px 0;'> </p>
  <div id='image-preview' style='margin: 10px 0;'></div>
</div>
      
<label>Input your User ID</label>
        <input type='text' name='user_id' required>
		
				  <button id='submit-btn'>Submit</button>
			
				</form>
				
				  </div>
				</div>";
				
				
				// Add the JavaScript code to show and hide the popup
				echo "<script>
				function showPopup() {
				  document.getElementById('popup').style.display = 'block';
				}
				
				function hidePopup() {
				  document.getElementById('popup').style.display = 'none';
				}
				
				function showPopup2() {
				  document.getElementById('popup2').style.display = 'block';
				}
				
				function hidePopup2() {
				  document.getElementById('popup2').style.display = 'none';
				}
				
				document.getElementById('submit-btn').addEventListener('click', function() {
				  hidePopup();
				  showPopup2();
				});
				
				document.getElementById('close-btn').addEventListener('click', function() {
				  hidePopup2();
				});
				</script>";
				
					
				
				
		
				
				
					
			
					
					
					$seq+=1;
				}
				?>

</table>










	</div>


		</h2>


		
		
	</div>
	<script>
   


   const imageInput = document.getElementById('image-input');
  const imagePreview = document.getElementById('image-preview');
  const dragDropArea = document.getElementById('drag-drop-area');
  const dragDropText = document.getElementById('drag-drop-text');

  imageInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    const reader = new FileReader();

    reader.onload = (event) => {
      imagePreview.innerHTML = `<img src="${event.target.result}" alt="Selected Image" style="max-width: 100%; height: auto;">`;
      dragDropText.style.display = 'none';
    };

    reader.readAsDataURL(file);
  });

  dragDropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
  });

  dragDropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    const files = e.dataTransfer.files;
    if (files.length > 0) {
      const file = files[0];
      const reader = new FileReader();

      reader.onload = (event) => {
        imagePreview.innerHTML = `<img src="${event.target.result}" alt="Selected Image" style="max-width: 100%; height: auto;">`;
        dragDropText.style.display = 'none';
      };

      reader.readAsDataURL(file);
    }
  });


submitBtn.addEventListener('click', (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'insert.php', true);
  xhr.onload = function() {
    if (xhr.status === 200) {
      document.getElementById('response-message').innerHTML = 'Image submitted successfully!';
    } else {
      document.getElementById('response-message').innerHTML = 'Error submitting image!';
    }
  };
  xhr.send(formData);
});

function openNav() {
  document.getElementById("sidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}
  </script>
</body>
</html>
