<?php 
    session_start(); 
?>

<?php
include('connection.php');

//Get values from the form 
$m_name=$_POST['m_name'];
$m_email=$_POST['m_email'];
$list=$_POST['list'];
$_SESSION['list'] = $_POST['list'];


// Insert data into the database
$sql="INSERT INTO member (m_name, m_email, sid)VALUES('$m_name','$m_email', '$list')";
$result=mysql_query($sql);

//if inserted successfully then redirect to show.php 
if($result){
    echo "<script>window.open('show.php','_self')</script>";
}
//or show an error message
else {
echo "ERROR";
}

