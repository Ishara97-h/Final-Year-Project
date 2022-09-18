<?php
session_start();

$pname = "";
$reg_id = "";
$age = "";
$bg = "";
$gender = "";
$address = "";
$phone_no = "";
$nic = "";
$bht = "";
$inch = "";
$kg = "";
//$bmi = "";

$errors = array();

$vkey = md5(time().$pname);

$db = mysqli_connect('localhost','root','','asa') or die("Could not connect to the database");

if(isset($_POST['admit'])){ 

$reg_id = mysqli_real_escape_string($db, $_REQUEST['reg_id']);
$pname = mysqli_real_escape_string($db, $_REQUEST['pname']);
$age = mysqli_real_escape_string($db, $_REQUEST['age']);
$bg = mysqli_real_escape_string($db, $_REQUEST['bg']);
$gender = mysqli_real_escape_string($db, $_REQUEST['gender']);
$address = mysqli_real_escape_string($db, $_REQUEST['address']);
$phone_no = mysqli_real_escape_string($db, $_REQUEST['phone_no']);
$nic = mysqli_real_escape_string($db, $_REQUEST['nic']);
$bht = mysqli_real_escape_string($db, $_REQUEST['bht']);
$inch = mysqli_real_escape_string($db, $_REQUEST['inch']);
$kg = mysqli_real_escape_string($db, $_REQUEST['kg']);
//$bmi = mysqli_real_escape_string($db, $_POST['bmi']);

if(empty($pname)) {
    array_push($errors, "Name is required");
}
if(empty($reg_id)) {
    array_push($errors, "Register ID is required");
}
if(empty($age)) {
    array_push($errors, "Age is required");
}

if (empty($address)) {
    array_push($errors, "Address Is Required"); //add error to error array
}
if (empty($phone_no)) {
    array_push($errors,"Phone number is Required");
}
if(empty($gender)) {
    array_push($errors, "Gender is required");
}
if(empty($nic)) {
    array_push($errors, "NIC is required");
}
if(empty($bht)) {
    array_push($errors, "BHT is required");
}

if (empty($inch)) {
    array_push($errors, "Height Is Required"); //add error to error array
}
if (empty($kg)) {
    array_push($errors,"Weight is Required");
}
if (empty($bg)) {
    array_push($errors,"Blood Group is Required");
}


$patients_check_query= "SELECT * FROM patients WHERE reg_id='$reg_id' LIMIT 1";
$result = mysqli_query($db, $patients_check_query);
$patients = mysqli_fetch_assoc($result);

if($patients_check_query){
	if($patients['reg_id']==$reg_id){
		array_push($errors, "Register ID already exists!");
	}
	
}

//if there are no erros then save the data

if (count($errors)==0) {
 
// Attempt insert query execution
    $sql = "INSERT INTO patients (pname,reg_id,age,bg,gender,address,phone_no,nic,bht,inch,kg) VALUES ('$pname','$reg_id','$age','$bg','$gender','$address','$phone_no','$nic','$bht','$inch','$kg')";
    if(mysqli_query($db, $sql)){
        $_SESSION['reg_id'] = $reg_id;
        $_SESSION['pname'] = $pname;
        $_SESSION['success'] = "You are now logged in";
        header('location:medical.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
    }
}
}

 ?>


