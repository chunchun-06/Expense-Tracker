<?php include 'checklogin.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background:linear-gradient(to right,lightblue, lightyellow);
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

    #box-container {
      margin-left: 250px;
      margin-top: 50px;
      padding: 10px;
      overflow-x: auto;
       /* background: linear-gradient(to right, lightyellow, lightblue); */
    }

    #box {
      width: 100%;
      min-width: 500px;
      border-collapse: collapse;
      border: 1px solid black;
    }

    #box th,
    #box td {
      border: 1px solid black;
      border-bottom:1px solid rgb(0,0,0,0.2);
      padding: 5px;
      text-align: center;
      font-family:Sans-serif;
    }

    button#edit {
      background-color: rgb(74, 107, 140);
      color: white;
      border: none;
      width: 70px;
      height: 30px;
      cursor: pointer;
    }

    @media screen and (max-width: 768px) {
      #side-bar {
        width: 100%;
        height: auto;
        position: relative;
      }

      nav ul li {
        width: 100%;
        margin: 5px 0;
      }

      #box-container {
        margin-left: 0;
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
        <li><a href="#reports"><i class="fas fa-chart-bar"></i> Reports</a></li>
        <li><a href="#settings"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="log.php"><i class="fas fa-sign-out-alt"></i> LOG OUT</a></li>

      </ul>
    </nav>
  </div>

  <div id="box-container">
    <table id="box">
      <thead>
        <tr>
          <th>SL NO.</th>
          <th>DATE</th>
          <th>NAME</th>
          <th>AMOUNT</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
  
        include 'connection.php';
        $userid = $_SESSION['userid'];
        $sql = "SELECT * FROM `data` WHERE user_id = $userid ORDER BY date ASC";
        $result = mysqli_query($con, $sql);
        $serial = 0;
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $date = $row['date'];
            $name = $row['name'];
            $amount = $row['amount'];
            echo '<tr>
                    <td>' . ++$serial . '</td>
                    <td>' . $date . '</td>
                    <td>' . $name . '</td>
                    <td>' . $amount . '</td>
                    <td><button type="button" id="edit" onclick="edit()">EDIT</button></td>
                  </tr>';
          }
        }
        ?>
      </tbody>
         <tfoot>
        <tr>
          <td colspan="3">Total Amount Given:</td>
          <td colspan="3">
            <?php
            $totalQuery = "SELECT SUM(amount) AS total FROM `data` WHERE user_id = $userid";
            $totalResult = mysqli_query($con, $totalQuery);
            if ($totalResult) {
              $totalRow = mysqli_fetch_assoc($totalResult);
              echo $totalRow['total'];
            } else {
              echo "0";
            }
            ?>
          </td>
        </tr>
        </tfoot>
    </table>
  </div>

  <script>
    function edit() {
      alert("Edit feature is under construction.");
    }
  </script>
</body>

</html>
