<?php
// $name = "OK";
// echo "$name";
// if(isset($_POST['formsubmit'])){
// echo $_POST['done'];
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name ="OK" ;
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }
?>