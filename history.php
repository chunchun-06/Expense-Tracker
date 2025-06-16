<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f0f0f0;
        }

        #side-bar {
            width: 240px;
            height: 100vh;
            background-color: #32485f;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }

        #side-bar h1 {
            background: url('expense.jpg') no-repeat center;
            background-size: cover;
            -webkit-background-clip: text;
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
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            margin-left: -10px;
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

        #main-content {
            margin-left: 260px;
            padding: 20px;
        }

        #main-content h2 {
            color: #31465d;
            margin-bottom: 20px;
        }

        #main-content p {
            margin-top: 1px;
            color: #5e3232;
            font-family: cursive;
        }

        #container {
            margin-left: 600px;
            margin-top: 40px;
            padding: 20px;
            background-color: white;
            width: 300px;
            height: 400px;
            justify-items: center;
            align-content: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to right, pink, lightblue);
            
        }

        #container:hover {
            background: linear-gradient(to right, lightyellow, lightblue, pink);
        }
        #container h1 {
            text-align: center;
            color: #31465d;
            font-family: cursive;
            margin-bottom: 20px;
        }

        #container ul {
            list-style-type: none;
            padding: 0;
        }

        #container ul li a {
            text-decoration: none;
            font-weight: bold;
            color: black;
            cursor: pointer;
            background-color: white;
            border-top: 1px solid rgba(0, 0, 0, 0.4);
            border-bottom: 1px solid rgba(0, 0, 0, 0.4);
            padding: 10px;
            display: block;
            text-align: center;
            width: 270px;
            margin: 10px auto;
            border-radius: 5px;
        }

        /* Point	Coordinates	Where it is
                Top-left	0% 0%	Left edge, top edge
                Top-right	100% 0%	Right edge, top edge
                Bottom-right	100% 100%	Right edge, bottom edge
                Bottom-left	0% 100%	Left edge, bottom edge */
        #container h1 {
            text-align: center;
            color: white;
            font-size: 24px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-bottom: 50px;
            background-color: rgb(255, 38, 0);
            height: 150px;
            width: 200px;
            align-content: center;
            clip-path: polygon(0% 0%, 100% 0%, 80% 100%, 20% 100%);
        }
        #container h1:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        #container ul li a:hover {
            color: white;
            background-image: linear-gradient( 111.1deg,  rgba(69,150,164,1) 2.5%, rgba(17,20,34,1) 100.3% );
        }
       


        @media screen and (max-width: 768px) {
            #side-bar {
                position: relative;
                width: 100%;
                height: auto;
            }

            nav ul {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 20px;
            }

            #side-bar h1 {
                text-align: center;
            }

            nav ul li {
                width: 80%;
                margin: 10px auto;
            }

            #container {
                margin: 20px auto;
                width: 90%;
                height: auto;
                padding: 20px;
            }

            #container h1 {
                width: 100%;
                font-size: 20px;
                height: auto;
            }

            #container ul li a {
                width: 90%;
            }
            #container h1:hover {
            color: black;
            background-color: rgb(123, 99, 95);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        #container ul li a:hover {
            color: white;
            background-image: linear-gradient( 111.1deg,  rgba(69,150,164,1) 2.5%, rgba(17,20,34,1) 100.3% );
        }

            #main-content {
                margin-left: 0;
                margin-top: 20px;
                padding: 10px;
            }
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
                <li><a href="reports.php"><i class="fas fa-chart-bar"></i> Reports</a></li>
                <li><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="log.php"><i class="fas fa-sign-out-alt"></i> LOG OUT</a></li>

            </ul>
        </nav>
    </div>

    <div id="main-content">
        <h2>History</h2>
        <p>Here you can view your Amount given, people amount taken and expenses.</p>
    </div>

    <div id="container">
        <h1>HISTORY</h1>
        <ul id="expense">
            <li><a href="expense.php">Expense</a></li>
            <li><a href="amtgiven1.php">Amount Given</a></li>
            <li><a href="amtpay1.php">Amount Taken</a></li>
        </ul>
    </div>
</body>


</html>