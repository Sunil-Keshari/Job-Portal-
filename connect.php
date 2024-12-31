<?php
$fullName = $_POST['fullName'];
$Email= $_POST['Email'];
$Password= $_POST['Password'];
$MobileNumber = $_POST['MobileNumber'];
$Location = $_POST['Location'];
$WorkStatus= $_POST['WorkStatus'];
$Joiner = $_POST['Joiner'];
$Skills = $_POST['Skills'];
$Resume = $_POST['Resume'];

//Database Connections
$conn = new mysqli ('localhost','root','','Registration')

if ($conn-> connect_error){
    die('connection Failed:'.$conn-> connect_error);
    else{
        $stmt = $conn ->prepare ("insert into Sunil (fullName,Email,Password,Location,WorkStatus,Joiner,Skills,Resume)
        values(?,?,?,?,?,?,?,?")
        $stmt ->bind_param("ssssssss",$fullName,$Email,$Password,$Location,$WorkStatus,$Joiner,$Skills,$Resume);
        $stmt ->execute();
        echo "Form Filled successfully";
        $stmt ->close();
        $conn ->close();
    }
}
?>