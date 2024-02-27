<?php
$host='localhost';
$user='root';
$pass='';
$db='student_profile';

//create connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$stuID=$_POST['studentID'];
$stuName=$_POST['studentName'];
$stuNumber=$_POST['ContactNumber'];
$stuAddress=$_POST['studentAddress'];

$sql="insert into stu_pro(SID,SNAME,SNUMBER,SADDRESS) values('$stuID','$stuName','$stuNumber','$stuAddress')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>