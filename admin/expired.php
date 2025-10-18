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
.topnav2 {
  overflow: hidden;
  background-color: #d4baa3;
  height:50px;
  padding-top: 1px;
  padding-bottom: 1px;
}

.topnav2 a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav2 a:hover {
  background-color: #ddd;
  color: black;
}

.topnav2 a.active {
  background-color: #2196F3;
  color: white;
}

.topnav2 .search-container {
  float: right;
}

.topnav2 input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav2 .search-container button {

  height:auto;
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #3e7def;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav2 .search-container button:hover {
  background: #132178;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav2 a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav2 input[type=text] {
    border: 1px solid #ccc;
  }
}
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
  height: 1500px;
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
th,td{
  width:10%;
}
.container{
  overflow: hidden;
  background-color: #e9e9e9;
  height:110px;
}
.container .container-btn{
  float: left;
  padding: 15px;
}
.container .container-btn .btn-returned{
  height:auto;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #09940e;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.container .container-btn .btn-returned:hover{
  background: #7fe382;
}
.container .container-btn .btn-expired{
  height:auto;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #b52d2d;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.container .container-btn .btn-expired:hover{
  background: #f0a1a1;
}
</style>
</head>
<body>

  <!--navbar-->
<div class="topnav2">
<div class="search-container">
<form  method="post" name="form1">
<input class="form-control-delete" type="text" placeholder="Type Username" name="username">
<input class="form-control-delete" type="text" placeholder="Enter Book ID" name="bid">
<button type="submit" name="submit">Submit</button>
</form>
<br>
</div>
</div>
  <!--navbar-->

  <!--navbar button-->
  <div class="container">
  <div class="container-btn">
  <form method="post">
  <button type="submit" name="submit2" class="btn-returned">RETURNED</button>
  <button type="submit" name="submit3" class="btn-expired">EXPIRED</button>
  </form>
  </div>
  </div>
  <!--navbar button-->

  <!--sidenav-->
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Book.php">Book</a>
  <a href="ADD.php">Add Books</a>
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

  <!--borrow form-->
  <section class="listofbooks">
  <!--<h2 style="text-align: center"><br>Date expired list</h2>--><br>
  <br>
  <?php

        if(isset($_POST['submit']))
        {

          $res=mysqli_query($db,"SELECT * FROM `issue_book` where username='$_POST[username]' and bid='$_POST[bid]' ;");

      while($row=mysqli_fetch_assoc($res))
      {
        $d= strtotime($row['returned']);
        $c= strtotime(date("Y-m-d"));
        $diff= $c-$d;

        if($diff>=0)
        {
          $day= floor($diff/(60*60*24));
          $fine= $day*25;
        }
      }
          $x= date("Y-m-d");
          mysqli_query($db,"INSERT INTO `fine` VALUES ('$_POST[username]', '$_POST[bid]', '$x', '$day', '$fine','not paid') ;");


          $var1='<p style="color:yellow; background-color:green;">RETURNED</p>';
          mysqli_query($db,"UPDATE issue_book SET approve='$var1' where username='$_POST[username]' and bid='$_POST[bid]' ");

          mysqli_query($db,"UPDATE books SET quantity = quantity+1 where bid='$_POST[bid]' ");

        }


    $c=0;


         $ret='<p style="color:yellow; background-color:green;">RETURNED</p>';
         $exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';

        if(isset($_POST['submit2']))
        {

        $sql="SELECT student.username,type,books.bid,name,authors,year,approve,issue,issue_book.returned FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='$ret' ORDER BY `issue_book`.`returned` DESC";
        $res=mysqli_query($db,$sql);

        }
        else if(isset($_POST['submit3']))
        {
        $sql="SELECT student.username,type,books.bid,name,authors,year,approve,issue,issue_book.returned FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='$exp' ORDER BY `issue_book`.`returned` DESC";
        $res=mysqli_query($db,$sql);
        }
        else
        {
        $sql="SELECT student.username,type,books.bid,name,authors,year,approve,issue,issue_book.returned FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve !='' and issue_book.approve !='Yes' ORDER BY `issue_book`.`returned` DESC";
        $res=mysqli_query($db,$sql);
        }

        echo "<table class='table table-bordered' style='width:100%;' >";
        //Table header

        echo "<tr style='background-color: #6db6b9e6;'>";
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Type";  echo "</th>";
        echo "<th>"; echo "BID";  echo "</th>";
        echo "<th>"; echo "Book Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Year";  echo "</th>";
        echo "<th>"; echo "Status";  echo "</th>";
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
          echo "<td>"; echo $row['approve']; echo "</td>";
          echo "<td>"; echo $row['issue']; echo "</td>";
          echo "<td>"; echo $row['returned']; echo "</td>";
        echo "</tr>";
      }
    echo "</table>";
        echo "</div>";

    ?>
  </section>
  <!--borrow form-->
