<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: signup.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Expense-Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            background-image: linear-gradient( 89.2deg,  rgba(255,255,255,1) -1.3%, rgba(253,109,38,1) 281.6% );

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
            margin-top: 0px;
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
            margin-left: 240px;
            padding: 20px;
        }

        #main-content p {
            margin-top: 10px;
        }

        #expense {
            position: relative;
            margin-left: 250px;
            padding: 20px;
            background: linear-gradient(135deg, #f8ebeb, #d1e7f0);
            border-radius: 10px;
            margin-top: 20px;
        }

        #expense li {
            margin: 5px;
        }

        #expense li a {
            text-decoration: none;
            color: #27579a;
            font-weight: bold;
        }

        #expense li a:hover {
            color: #ff0000;
        }

        #form {
            margin-left: 100px;
            width: 400px;
            padding: 30px;
            background-color: #f8ebeb;
            border: 1px solid rgb(105, 105, 175, 0.3);
            align-items: center;
            align-content: center;
            display: flex;
            flex-direction: column;
            border-radius: 12px;
            margin-top: 20px;
            font-family: 'Segoe UI', sans-serif;
        }

        #form #data {
            display: block;
            margin-bottom: 10px;
        }

        #form input {
            border-radius: 5px;
            height: 30px;
            width: 200px;
            border-top: none;
            border-right: none;
            border-left: none;
        }

        #form button {
            background-color: #10c0a6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-left: 36px;
        }

        #room {
            display: flex;
            flex-direction: row;
        }

        #form h3 {
            color: #31465d;
            font-family: cursive;
            background-color: #10c0a6;
            width: 300px;
            height: 100px;
            text-align: center;
            align-content: center;
            margin-bottom: 10px;
            clip-path: polygon(0% 0%, 100% 0%, 80% 100%, 20% 100%);

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

            #main-content {
                margin-left: 0;
                padding: 10px;
            }

            #room {
                display: flex;
                flex-direction: column;
                margin-left: 0;
            }

            #expense,
            #form {
                width: 90%;
                margin: 10px auto;
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
                <li><a href="index.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="history.php"><i class="fas fa-history"></i> History</a></li>
                <li><a href="#reports"><i class="fas fa-chart-bar"></i> Reports</a></li>
                <li><a href="#settings"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="log.php"><i class="fas fa-sign-out-alt"></i> LOG OUT</a></li>
            </ul>
        </nav>
    </div>

    <div id="main-content">
        <h2 style="font-family: cursive; color:rgb(27, 52, 99);">Welcome to the Expense Dashboard</h2>
        <p>This is where you can manage your expenses, view reports, and adjust settings.</p>
    </div>

    <div id="room">
        <div id="expense">
            <h2 style="font-family: cursive;">Expense Management</h2>
            <p>Track your expenses efficiently and stay on top of your budget.</p>
            <ul>
                <li><a href="index.php">Add new expenses</a></li>
                <li><a href="amtgiven.php">Amount Given</a></li>
                <li><a href="amtpay.php">Amount Taken</a></li>
                <li><a href="history.php">View expense history</a></li>
            </ul>
        </div>

        <div id="form">
            <h3>EXPENSE</h3>
            <form action="insert.php" method="post" onsubmit="return check();">
                <label for="expense-date" id="data">Date:</label>
                <input type="date" id="expense-date" name="date" max="<?= date('Y-m-d') ?>" required><br>
                
              

                <label for="expense-name" id="data">Expense Name:</label>
                <input type="text" id="expense-name" name="name" required><br>
                <label for="expense-amount" id="data">Amount:</label>
                <input type="number" id="expense-amount" name="amount" required><br><br>
                <script>
                    function check() {
                        var date = document.getElementById("expense-date").value;
                        var personname = document.getElementById("expense-name").value;
                        var amount = document.getElementById("expense-amount").value;

                        if (isNaN(amount) || amount <= 0) {
                            alert("Please enter a valid amount.");
                            return false;
                        }

                        return true; 
                    }
                </script>
                <button type="submit" name="submit">Add Expense</button>
            </form>
        </div>
    </div>

</body>

</html>
