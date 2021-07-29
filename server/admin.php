<!DOCTYPE html>
<?php
include 'connection.php';

if (isset($_POST['period'])){
 //3.1.1 Assigning posted values to variables.
$period = $_POST['period']; 
 $usql = "UPDATE `time` SET `atime`= $period WHERE id = 1 ;";

      $result = mysqli_query($db, $usql);
 }
if (isset($_POST['loginm'])){
 //3.1.1 Assigning posted values to variables.
 $loginm = $_POST['loginm'];
 $usql = "UPDATE `temp` SET `login`='$loginm' WHERE id = 1 ;";

      $result = mysqli_query($db, $usql);
 }
 if (isset($_POST['logoutm'])){
 //3.1.1 Assigning posted values to variables.
 $logoutm = $_POST['logoutm'];
 $usql = "UPDATE `temp` SET `logout`='$logoutm' WHERE id = 1 ;";

      $result = mysqli_query($db, $usql);
 }



if(isset($_POST['submit'])){

    if(!empty($_POST['check_list'])) {    
      $list = $_POST['check_list'] ;
        foreach($list as $value){

    $usql = "UPDATE users SET `disable` = 'yes' WHERE username = '" .$value. "' ;";

      $result = mysqli_query($db, $usql);
        }
    }

     if(!empty($_POST['check_list1'])) {    
      $list = $_POST['check_list1'] ;
        foreach($list as $value){
          $usql = "UPDATE users SET `flogout` = 'yes' WHERE username = '" .$value. "' ;";

      $result = mysqli_query($db, $usql);

              
        }
    }

}


if(isset($_POST['submit1'])){

    if(!empty($_POST['check_list'])) {    
      $list = $_POST['check_list'] ;
        foreach($list as $value){

    $usql = "UPDATE users SET `disable` = 'no' WHERE username = '" .$value. "' ;";

      $result = mysqli_query($db, $usql);
        }
    }

   

}
if (isset($_POST["gender"])) {
  $usql = "UPDATE `temp` SET `css`= " .$_POST["gender"]. " WHERE id =1;";

      $result = mysqli_query($db, $usql);
}




?>


<script language="javascript" type="text/javascript">
var timeout = setTimeout(reloadChat, 5000);

function reloadChat () {
$('#re').load('admin.php #re',function () {
        $(this).unwrap();
        timeout = setTimeout(reloadChat, 5000);
});
}
</script>



<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:hover {background-color: #f5f5f5;}
input[type=text] {
  background-color: #3CBC8D;
  color: white;
  margin: 10px;
}
button  {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

}


</style>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>




<div id="re" style="margin-top: 10px;">

                <?php

                 $query = "SELECT * FROM users WHERE active='yes' AND disable!='yes' ;";
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));


echo '<form action="admin.php" method="post"><table id="table">
<tr>
<th>username</th>
<th>email</th>
<th>disable</th>
<th>force logout</th>

</tr>';
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo '<td><input type="checkbox"  name="check_list[]" value="' . $row['username'] .'">
</td>';
echo '<td><input type="checkbox"  name="check_list1[]" value="' . $row['username'] .'">
</td>';

echo "</tr>";
}
echo "</table>
<form>";
                ?>
<input type="submit" style="margin : 15px;  " name="submit" value="Submit"/>
<br> 
              </div>

<div style="margin: 20px">

                  <form class="login100-form validate-form" action="admin.php" method="post">
            <span class="label-input100">period</span>
            <input class="input100"  type="text" name="period" placeholder="Enter username">
          
            <button>
             Submit
            </button>
        </form>

            <form class="login100-form validate-form" action="admin.php" method="post">
            <span class="label-input100">login</span>
            <input class="input100"  type="text" name="loginm" placeholder="Enter username">
          
            <button>
             Submit
            </button>
        </form>

            <form class="login100-form validate-form" action="admin.php" method="post">
            <span class="label-input100">logout</span>
            <input class="input100"  type="text" name="logoutm" placeholder="Enter username">
          
            <button>
             Submit
            </button>
        </form>
        </div>
<div >

            <?php

                 $query = "SELECT * FROM users WHERE disable='yes' ;";
                  $result = mysqli_query($db, $query) or die(mysqli_error($db));

echo '<form action="admin.php" method="post"><table id="table">
<tr>
<th>username</th>
<th>email</th>
<th>enable</th>

</tr>';
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo '<td><input type="checkbox"  name="check_list[]" value="' . $row['username'] .'">
</td>';


echo "</tr>";
}
echo "</table>
<form>";
                ?>
<input type="submit" name="submit1" value="Submit"/>
</div>



<form action="admin.php" method="post">
   Style:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="1">1
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="2">2
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="3">3  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="4">4
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>







<script>

  var text = ""; 
    var sock = new WebSocket("ws://localhost:5001");
  sock.onopen = function(event){

        sock.send("");

    };
    sock.onmessage = function(event){
      console.log(event);
      var json = event.data ;  
      
      var myObj = JSON.parse(json);

      var holder = document.getElementById("holder");

for ( var i=0; i < myObj.length; i+=1 ) {
  var n = myObj[i].indexOf("username");

  var f = myObj[i].indexOf("," , n ); 
  var s1 = myObj[i].substr(n, f);
  if(myObj[i] != null){
holder.innerHTML += "<p>" + myObj[i] + "</p><br/>" ;
}
for (var j = 0; j < myObj.length; j++) {
   var n1 = myObj[j].indexOf("username");

  var f1 = myObj[j].indexOf("," , n1 ); 
  var s = myObj[j].substr(n1, f1);
           if(s == s1){
            myObj[j] = "";
           }
}



}


    }

</script>
<div id="holder"></div>


</body>
</html>