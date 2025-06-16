<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background: linear-gradient(to right, #6dd5fa, #2980b9);
        }

        #side-bar {
            width: 270px;
            height: 100vh;
            background-color: #32485f;
            padding: 20px;
        }

        #side-bar h1 {
            background: url('expense.jpg') no-repeat center;
            background-size: cover;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 40px;
            margin-bottom: 20px;
            font-family: cursive;
        }

        nav ul {
            list-style-type: none;
            margin-top: 40px;
            padding-left: 0;
        }

        nav ul li {
            border: 1px solid black;
            background-color: #4a6b8c;
            width: 220px;
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            letter-spacing: 2px;
        }

        nav ul li a:hover {
            color: black;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .profile_card {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }

        .profile_card h2 {
            margin-bottom: 30px;
            text-align: center;
            color: #32485f;
        }

        .profile_info p {
            font-size: 18px;
            margin: 15px 0;
            color: #333;
        }

        .profile_info p i {
            margin-right: 10px;
            color: #2980b9;
        }

        .edit_btn {
            display: block;
            margin: 30px auto 0;
            background-color: #2980b9;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .edit_btn:hover {
            background-color: #1c5980;
        }
    </style>
</head>

<body>
    <div id="side-bar">
        <h1>Expense Dashboard</h1>
        <nav>
            <ul>
                <li><a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a></li>
                <li><a href="index.php"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="history.php"><i class="fas fa-history"></i> History</a></li>
                <li><a href="#reports"><i class="fas fa-chart-bar"></i> Reports</a></li>
                <li><a href="#settings"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="log.php"><i class="fas fa-sign-out-alt"></i> LOG OUT</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div class="profile_card">
            <h2><i class="fas fa-user-circle"></i> User Profile</h2>
            <div class="profile_info">
                <p><i class="fas fa-user"></i><strong>Name:</strong> Chunchun Rai</p>
                <p><i class="fas fa-phone"></i><strong>Phone:</strong> +91 9876543210</p>
                <p><i class="fas fa-envelope"></i><strong>Email:</strong> chunchun@example.com</p>
                <p><i class="fas fa-calendar-alt"></i><strong>DOB:</strong> 2003-08-12</p>
                <button class="edit_btn"><i class="fas fa-edit"></i> Edit Profile</button>
            </div>
        </div>
    </div>
</body>

</html>