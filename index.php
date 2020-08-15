<?php

$con = mysqli_connect("localhost","root",'','mysql');
      
$goals = $_POST['goals'];
$poc = $_POST['poc'];
$recpective_lang = $_POST['recpective_lang'];
$expressive_lang = $_POST['expressive_lang'];
$fluency = $_POST['fluency'];
$voice = $_POST['voice'];
$case_history = $_POST['case_history'];
$articulation = $_POST['articulation'];

$sql ="INSERT INTO `care_aba`(`case_history`, `articulation`, `recpective_lang`, `expressive_lang`, `fluency`, `voice`, `poc`, `goals`) 
VALUES ('$case_history','$articulation','$recpective_lang','$expressive_lang','$fluency','$voice','$poc','$goals')";

if(mysqli_query($con,$sql)){
   
    echo "inserted";
}
else{
    echo "not inserted";
}
?>   