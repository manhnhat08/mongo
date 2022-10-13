<?php
require "./vendor/autoload.php";
$dbname = 'dct';
try {
  $m = new MongoDB\Client("mongodb+srv://manhnhat12:manhnhat1203@cluster0.wkud7kv.mongodb.net/?retryWrites=true&w=majority");
// $m = new MongoDB\Client("mongodb+srv://tungtruong2318:soaika1810@cluster0.swupiyi.mongodb.net/?retryWrites=true&w=majority");
 $db = $m->$dbname;
//  $db = $m->selectDB($dbname);
// echo "<p>Connected!<p>";
//  echo "thanh cong";
// $db = $m->$dbname;

//         $student = $db->student;

//         $datastudent = $student->find();
//         foreach($datastudent as $data) 
//         {
//             echo "<div> scode: ".$data['scode'].",  sname: ".$data['snam'].",  class: ".$data['class'].", age: ".$data['age']." </div>";
//         }

}
catch(Exception $ex) {
 print $ex;
 header("location:../error.html");
}
?>
