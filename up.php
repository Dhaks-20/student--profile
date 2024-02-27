<?php
$host='localhost';
$user='root';
$pass='';
$db='student_profile';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['SID'];
$sna=$_POST['SNAME'];
$sno=$_POST['SNUMBER'];
$sa=$_POST['SADDRESS'];


$sql="update stu_pro set SNAME='$sna',SNUMBER='$sno' , SADDRESS='$sa' where SID='$id'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>