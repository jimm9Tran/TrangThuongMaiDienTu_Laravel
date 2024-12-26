<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff; 
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2rem;
            margin: 0;
        }

    
        h1:hover {
            color: #ff6600; 
            transition: color 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, {{ $ten }}!</h1>
    </div>
</body>
</html>
