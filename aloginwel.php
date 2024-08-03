<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName,lastName,clients,link,pic,prizes, status,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Subscribe</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
  <style>
    .popup-image {
  width: 50%;
  height: auto;
  margin: 0 auto;
  display: block;
}

#image-form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  #image-form label, #image-form input, #image-form button {
    flex: 1 0 20%; /* adjust the width to your liking */
    margin: 10px;
  }

  #image-form label {
    text-align: right;
    margin-right: 10px;
    font-weight: bold;
    color: #333;
  }

  #image-form input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  #image-form input:focus {
    border-color: #aaa;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  #image-form button {
    flex: 1 0 100%; /* make the button full width */
    margin-top: 20px;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  


  </style>
</head>
<body>
	
	<header>
		<nav>
		
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
        <li><a class="homeblack" href="limit.php">Add Limit</a></li>
			 
        <li><a class="homeblack" href="viewemp.php">View Employee</a></li>
			
				
		
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div class="divider"></div>
	<div id="divimg">
	<div style="display: flex; justify-content: space-around; align-items: center;">
  <div style="padding: 0 px;">
    <a href="/final/Views/aloginwel.php"><h2>Views</h2></a>
  </div>
  <div style="padding: 0 px;">
    <a href="/final/Share/aloginwel.php"><h2>Share</h2></a>
  </div>
  <div style="padding: 0 px;">
    <a href="/final/Follow/aloginwel.php"><h2>Follow</h2></a>
  </div>
  <div style="padding: 0 0px;">
    <a href="/final/Subscribe/aloginwel.php"><h2>Subscribe</h2></a>
  </div>
</div>
    	
 <table>

			<tr bgcolor="#000">
				<th align = "center">Ranking</th>
			    <th align = "center">Profile</th>
				<th align = "center">Account Name</th>
				<th align = "center">Links</th>
				<th align = "center">Status</th>
				<th align = "center">Prizes</th>

				
				

			</tr>

			<?php
// ...

$seq = 1;
while ($employee = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$seq."</td>";
    echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
    echo "<td>".$employee['clients']."</td>";
 
	
	
	
		
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
<form id='image-form' enctype='multipart/form-data' action='insert.php'> 
  <div id='drag-drop-area' style='border: 1px dashed #ccc; padding: 20px; border-radius: 10px; overflow-y: auto; max-height: 300px;'>
    <p>Drag & drop an image or <input type='file' id='image-input' name='image' style='margin: 10px 0;'> </p>
    <div id='image-preview'></div>
  </div>

  <label for='facebook_name'>Facebook Name:</label>
  <input type='text' id='facebook_name' name='facebook_name'>
  <label for='gcash_name'>Gcash Name:</label>
  <input type='text' id='gcash_name' name='gcash_name'>
  <label for='gcash_number'>Gcash Number:</label>
  <input type='text' id='gcash_number' name='gcash_number'>
  <label for='contact_number'>Contact Number:</label>
  <input type='text' id='contact_number' name='contact_number'>
  <button id='submit-btn'>Submit</button>
  <div id='response-message'></div>
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


    
echo "<td>".$employee['status']."</td>";    
   
        echo "<td>".$employee['prizes']."</td>";
    
    
    $seq+=1;
}
?>

		</table>

  <!-- Add this to your HTML -->
<div id="popup" style="display: none; position: absolute; background-color: #fff; border: 1px solid #ddd; padding: 10px;">
  <!-- popup content will be displayed here -->
</div>

		<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Reset Points</button>
		</div>

		
	</div>
  <script>
   let clickCount = 0;
  let maxClicks = 5; // set the click limit to 5

  function clickLimit(link) {
    clickCount++;
    if (clickCount <= maxClicks) {
      displayCount(); // call the original displayCount function
      return true;
    } else {
      link.href = 'javascript:void(0)'; // disable the link
      link.onclick = null; // remove the onclick event
      alert('You have reached the maximum number of clicks.'); // optional alert
      return false;
    }
  }

  const dragDropArea = document.getElementById('drag-drop-area');

const imagePreview = document.getElementById('image-preview');
const form = document.getElementById('image-form');
const submitBtn = document.getElementById('submit-btn');

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
      const imageData = event.target.result;
      imagePreview.innerHTML = `<img src="${imageData}" alt="Uploaded Image" style="max-width: 100%; height: auto;">`;
      imageInput.files = files;
    };
    reader.readAsDataURL(file);
  }
});

imageInput.addEventListener('change', (e) => {
  const file = imageInput.files[0];
  const reader = new FileReader();
  reader.onload = (event) => {
    const imageData = event.target.result;
    imagePreview.innerHTML = `<img src="${imageData}" alt="Uploaded Image" style="max-width: 100%; height: auto;">`;
  };
  reader.readAsDataURL(file);
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
  </script>
</body>
</html>