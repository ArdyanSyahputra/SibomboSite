<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .dashboard-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .welcome-message {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .user-name {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <div class="dashboard-container">
        @auth
            <p class="welcome-message">Selamat Datang, <span class="user-name">{{ Auth::user()->nama }}!</span></p>
        @else
            <p class="welcome-message">Selamat Datang</p>
        @endauth
    </div>
</body>
</html>
