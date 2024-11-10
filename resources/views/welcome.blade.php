<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Debugging Contest!</title>
    <style>
        /* Resetting default margin and padding */
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden; /* Hide scrollbars */
            font-family: Arial, sans-serif; /* Use Arial font */
            background-color: #f5f5f5; /* Light gray background */
        }

        span{
          text-decoration: underline;
        }

        /* Main container styling */
        .container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #e0f2f1;
        }

        /* Logo styling */
        .logo {
            width: 25%;
            height: 40%;
            margin-bottom: 30px;

        }

        /* Title styling */
        h1 {
            font-size: 36px;
            color: #333;
            text-align: center;
            margin-top: 0px;
        }

        /* Description styling */
        p {
            font-size: 18px;
            color: #666;
            text-align: center;
            max-width: 600px;
            margin-top: 5px;
            line-height: 1.5;
        }

        /* Button styling */
        .start-btn {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            margin-right: 20px;
        }

        .start-btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        #rules{
          text-align: left;
        }

        #buttons{
            flex-direction: row;
            display: flex;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <img src="{{ asset('images/logo.jpg') }}" alt="My Image">
        <br>
        <h1>Welcome to the Debugging Contest!</h1>
        <p>Are you ready to test your debugging skills? Join us in this exciting contest and solve challenging problems to win cash prizes!</p>
        <div id="buttons">
            <a href="{{ url('register') }}" class="start-btn">Register</a>
            <a href="{{ url('login') }}" class="start-btn">Login</a>
        </div>

    </div>

</body>
</html>
