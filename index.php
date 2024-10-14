<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
        }

        @media only screen and (max-width: 425px) {
            #login-box {
                width: 100vw;
            }
        }

        #login-box {
            padding: 0;
            padding-top: 0;
            border: 2px solid #ADD8E6;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            width: 50%;
        }

        h2 {
            background-color: #ADD8E6;
            padding: 10px 2px;
            margin: 0;
            margin-bottom: 10px;
            width: 100%;
            text-align: center;
        }

        form {
            padding: 20px;
            text-align: center;
        }
        
        input[type="text"], input[type="email"] {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #ADD8E6;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="login-box">
        <h2>Welcome to Our Training Courses</h2>
        <form method="post" action="home.php">
            <label for="name">Visitor Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <input type="submit" value="Proceed">
        </form>
    </div>
</body>
</html>
