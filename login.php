<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
        }
        * {
            box-sizing: border-box;
        }
        form {
            border: 3px solid #f1f1f1;
            padding: 20px;
            width: 30%;
            margin: 100px auto;
            background-color: #fff;
            border-radius: 5px;
        }
        input[type=text], input[type=password], input[type=date], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        button:hover {
            opacity: 0.8;
        }
        .links {
            text-align: center;
            margin-top: 20px;
        }
        .links a {
            color: dodgerblue;
            text-decoration: none;
        }
        .links a:hover {
            color: #4CAF50;
        }
        .signup-form {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .signup-form-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 5px;
            width: 40%;
        }
        .signup-form-content input[type=text], 
        .signup-form-content input[type=password], 
        .signup-form-content input[type=date], 
        .signup-form-content select {
            width: calc(100% - 24px);
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="login-form">
    <h2>Login</h2>
    <form action="process_login.php" method="post">
        <label for="email">Username:</label>
        <input type="text" id="email" name="email" placeholder="Your Username" required>

        <label for="psw">Password:</label>
        <input type="password" id="psw" name="psw" placeholder="Your Password" required>

        <button type="submit">Signin</button>
    </form>
</div>


</body>
</html>
