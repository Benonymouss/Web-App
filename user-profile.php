<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>3 Column Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #90EE90;
    font-family: Arial, sans-serif;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .form-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    max-width: 900px;
    background-color: #f0e68c;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;

  }

  .form-container:hover {
    transform: scale(1.02);
  }

  .form-container .form-section {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .form-container label {
    text-align: left;
    font-weight: bold;
  }

  .form-container input, select,
  .form-container input[type="file"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s ease;
  }

  .form-container input:focus,
  .form-container input[type="file"]:focus {
    border-color: #007bff;
    outline: none;
  }

  .form-container img {
    grid-column: span 3;
    justify-self: center;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
  }

  /* .form-container input[type="file"] {
    grid-column: span 3;
    justify-self: center;
  } */

  .form-container .label-column {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .form-container .label-column-input {
    display: flex;
    padding: 10px;
    background-color:azure;
    border-radius: 15px;
    flex-direction: column;
    align-items: center;
    border: 1px solid gray;
  }

  .form-container .input-column {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .input-coloumn{
    margin-bottom: 15px;
  }

  .img-profile {
    padding: 5px;
    border-radius: 50%;
    border: 2px solid #007bff;
  }
</style>
</head>
<body>

<form action="">
  <div class="form-container">
    <div class="label-column-input">
        <img src="process/images/1-5.jpg" class="img-profile" alt="Profile Image"><br>
        <label for="file-upload">Click below to select an image</label><br>
        <input id="file-upload" type="file" class="input-coloumn"><br>
    </div>
    <div class="label-column">
        <label for="first-name" class="input-coloumn">First Name</label>
        <label for="last-name" class="input-coloumn">Last Name</label>
        <label for="email" class="input-coloumn">Email</label>
        <label for="birthday" class="input-coloumn">Birthday</label>
      <label for="gender" class="input-coloumn">Gender</label>
      <label for="contact" class="input-coloumn">Contact</label>
      <label for="password" class="input-coloumn">Password</label>
    </div>
    <div class="input-column">
      <input type="text" id="first-name" class="input-coloumn" type="text">
      <input type="text" id="last-name" class="input-coloumn" type="text">
      <input type="email" id="email" class="input-coloumn" type="text">
      <input  type="date" id="birthday" class="input-coloumn" type="text">
      
      <select id="gender" class="input-column">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>

      <input type="text" id="contact" class="input-coloumn" type="text">
      <input type="password"  id="password" class="input-coloumn" type="text">
    </div>
  </div>
</form>

</body>
</html>
