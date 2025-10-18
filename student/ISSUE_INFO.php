<!--DB CONNECTION-->
<?php
include "connection.php";
include "navbar.php";
 ?>
<!--DB CONNECTION-->
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lowa State University Library</title>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
.form-control-delete::-webkit-input-placeholder {
  font-size: 14px;
  color: gray;
  font-family: arial;
}
.form-control-request::-webkit-input-placeholder {
  font-size: 14px;
  color: gray;
  font-family: arial;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.listofbooks{
    width: 100%;
    height: 500px;
    overflow: auto;
}
.listofbooks h2{
  color: #03040a;
  background: #ffffff;
  height: 110px;
  font-size: 50px;
}
.listofbooks table {
  border-collapse: collapse;
  width: 100%;
}
.listofbooks th{
  color: white;
}
.listofbooks th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #b7b8c7;
}

.listofbooks tr:hover {background-color: #b7b8c7;;}
button {
  border: none;
  width: 164px;
  height: 51px;
  margin: auto;
  margin-top: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #333;
  font-size: 15px;
  color: #fff;
}
button:hover{
  background: orange;
}
.scroll{
  width: 100%;
  height: 500px;
  overflow: auto;
}
th,td
{
  width: 10%;
}
</style>
</head>
<body>



<!--sidenav-->
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="Book.php">Book</a>
<a href="REQUEST.php">Book Request</a>
<a href="ISSUE_INFO.php">Issue Information</a>
<a href="expired.php">Expired List</a>
<a href="fine.php">Fines</a>
</div>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
document.getElementById("main").style.marginLeft = "250px";
document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft= "0";
document.body.style.backgroundColor = "white";
}
</script>
<!--sidenav-->
<section class="listofbooks">
  <h2 style="text-align:center;"> List of Borrowed Books </h2>
  <br>
  <?php
      $c=0;

        if(isset($_SESSION['login_user']))
        {
          $sql="SELECT student.username,type,books.bid,name,authors,year,issue,issue_book.returned FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.username ='$_SESSION[login_user]' and issue_book.approve !='' ORDER BY `issue_book`.`returned` ASC";
          $res=mysqli_query($db,$sql);


          echo "<table class='table table-bordered' style='width:100%;' >";
          //Table header

          echo "<tr style='background-color: #6db6b9e6;'>";
          echo "<th>"; echo "Username";  echo "</th>";
          echo "<th>"; echo "Type";  echo "</th>";
          echo "<th>"; echo "BID";  echo "</th>";
          echo "<th>"; echo "Book Name";  echo "</th>";
          echo "<th>"; echo "Authors Name";  echo "</th>";
          echo "<th>"; echo "Year";  echo "</th>";
          echo "<th>"; echo "Issue Date";  echo "</th>";
          echo "<th>"; echo "Return Date";  echo "</th>";

        echo "</tr>";
        echo "</table>";

         echo "<div class='scroll'>";
          echo "<table class='table table-bordered' >";
        while($row=mysqli_fetch_assoc($res))
        {

          echo "<tr>";
            echo "<td>"; echo $row['username']; echo "</td>";
            echo "<td>"; echo $row['type']; echo "</td>";
            echo "<td>"; echo $row['bid']; echo "</td>";
            echo "<td>"; echo $row['name']; echo "</td>";
            echo "<td>"; echo $row['authors']; echo "</td>";
            echo "<td>"; echo $row['year']; echo "</td>";
            echo "<td>"; echo $row['issue']; echo "</td>";
            echo "<td>"; echo $row['returned']; echo "</td>";
          echo "</tr>";
        }
      echo "</table>";
          echo "</div>";

        }
        else
        {
          ?>
            <h3 style="text-align: center;">Login to see information of Borrowed Books</h3>
          <?php
        }
      ?>
</section>
