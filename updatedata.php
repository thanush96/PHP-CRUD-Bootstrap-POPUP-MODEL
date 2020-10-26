<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'PHP-CRUD2');

if(isset($_POST['updatedata'])){
    $id=$_POST['update_id'];

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $course=$_POST['course'];
    $contact=$_POST['contact'];

    $query="UPDATE student SET fname='$fname', lname='$lname',course='$course', contact='$contact' WHERE id='$id'";    
    $query_run=mysqli_query($connection,$query);

    if($query_run){
        echo'<script>alert("Data Updated");</script>';
        header('location:index.php');
    }
    else
    {
        echo'<script>alert("Data Not Updated !");</script>';

    }


}
