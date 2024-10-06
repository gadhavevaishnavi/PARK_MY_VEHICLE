<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
	header("location:login.php");
}

include('include/connect.php');
require_once __DIR__ . '/vendor/autoload.php';

$user_id = $_GET['user_id'];
$slot_id = $_GET['slot_id'];
$sql = "SELECT * FROM parking_details WHERE u_id=$user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sql3 = "SELECT * FROM `users` WHERE `u_id`='$user_id'";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);


//create new PDF instance
$mpdf = new \Mpdf\Mpdf();
//create pdf
$data = '';

$data .= '
    <style>
    .container {
        padding-top: 20px;
    }

    .card {
        border-radius: 0px;
	}
	h2,h3 {
		text-align:center;
	}
	</style>
	<body>
	<div style="text-align:center;border:3px solid black;">
	<h2>ONLINE PARKING BOOKING</h2>
	<h3>**Address**</h3>
	<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' . $row['booking_code'] . '&choe=UTF-8" style="width:300px;height:300px; margin-left: auto; margin-right: auto;">

		<div class="card" style="padding:3px;border: 2px solid black;border-left:none; border-right:0px;border-radius:0px;">
		
		TICKET NUMBER : ' . $row['booking_code'] . '
		</div><br>
        ' . strtoupper($row3['u_name']) . '<br><hr>
        SLOT NUMBER : ' . $row['slot_id'] . '<br><hr>
        DATE : ' . $row['slot_date'] . '<br><hr>
        TIME : ' . $row['start_time'] . '<br><hr>
		VEHICLE NUMBER : ' . $row['u_vehicleno'] . '<br><hr>
		TOTAL PRICE : ₹' . $row['no_of_hr'] * 10 . '<br><hr>
		<b>PLEASE SHOW THIS QR CODE DURING ENTRY & EXIT</b><br>
		</div>
		</body>';



$mpdf->WriteHTML($data);
$mpdf->Output('Park_My_Vehhicle_pmreciept.pdf', 'D');
		
		//header('location:user_dashboard.php');
