<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <style>
        /* Background Style */
        body {
            background-color: #D6D8F7;
            font-family: Arial, sans-serif;
        }
        
        /* Form Container */
        form {
            background-color: #D47C1E;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 20px auto;
        }

        /* Header Style */
        h2 {
            text-align: center;
            font-size: 2em;
            color: #112875;
            margin-top: 30px;
        }

        /* Label Styling */
        label {
            font-weight: bold;
            margin-top: 15px;
            display: block;
            color: #333;
        }

        /* Input Fields */
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1em;
        }

        /* Login Button Styling */
        button {
            width: 100%;
            padding: 12px;
            background-color: #112875;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #D6D8F7;
            color: #112875;
            font-weight: bold;
        }

        /* Text and Link Styling */
        p {
            text-align: center;
            color: #333;
        }

        p a {
            color: #D47C1E;
            text-decoration: none;
            font-weight: bold;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Footer and Back to Home Button Styling */
        footer {
            text-align: center;
            margin-top: 70px;
            padding: 50px; /* Increased padding for more height */
            background-color: #112875; /* Light background for the footer */
            border-top: 1px solid #ccc; /* Line above footer content */
        }

        footer button {
            background-color:#ff6600;
            color: white;
            width: 150px;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        footer button:hover {
            background-color: #0d205f;
        }

        /* Footer Text Styling */
        footer p {
            margin: 10px 0; /* Margin for spacing */
            color: white; /* Text color */
            font-size: 0.9em; /* Slightly smaller font size */
        }
    </style>
</head>
<body>
    <h2 style="font-family: 'Times New Roman', Times, serif;">Login</h2>
    <form action="login_process.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="customeruse2.html">Register here</a></p>

    <footer>
        <p style="font-size:35px; font-family: 'Times New Roman', Times, serif;">Loged in? Then head back to home and find what is yours!</p>
        <button onclick="location.href='zoukweb2.html'">Back to Home Page</button>
    </footer>
</body>
</html>
