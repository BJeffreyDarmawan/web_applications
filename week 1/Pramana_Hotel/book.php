<?php
include ("connectdb.php");

$customer_name = htmlspecialchars($_POST['name']);
$customer_email = htmlspecialchars($_POST['email']);
$customer_phone = htmlspecialchars($_POST['phone']);
$stay_date = htmlspecialchars($_POST['date']);
$stay_length = htmlspecialchars($_POST['stay']);
$room_type = htmlspecialchars($_POST['room']);
$addi = htmlspecialchars($_POST['add']);

// get last row on customer
$query = "SELECT * FROM customer ORDER BY customer_id DESC LIMIT 1;"
$result = $conn->query($query);

$query_insert = "";

$cur_cust_id = "";
$cur_book_id = "";


if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $cur_cust_id = $row["customer_id"];
        }
    
    $array = str_split($your_string);
    $num = "";
    foreach ($array as $char) {
        if(is_numeric($char)){
            $num .= $char;
        }
    }
    $num = (int) $num + 1;
    if($num < 10)
        $cur_cust_id .= "00" . $num;
    else if ($num < 100)
        $cur_cust_id .= "0" . $num;
    else
        $cur_cust_id .= $num;
    
    $query_insert .= "INSERT INTO customer VALUES ('CS$cur_cust_id', '$customer_name', '$customer_email', '$customer_phone');";
        
}else {
    $query_insert .= "INSERT INTO customer VALUES ('CS000', '$customer_name', '$customer_email', '$customer_phone')";
}

// get last row on booking
$query = "SELECT * FROM booking ORDER BY booking_id DESC LIMIT 1;";
$result = $conn->query($query);

if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $last_cust_id = $row["customer_id"];
        }
    
    $array = str_split($your_string);
    $num = "";
    foreach ($array as $char) {
        if(is_numeric($char)){
            $num .= $char;
        }
    }
    $num = (int) $num + 1;
    if($num < 10)
        $cur_cust_id .= "00" . $num;
    else if ($num < 100)
        $cur_cust_id .= "0" . $num;
    else
        $cur_cust_id .= $num;
    
    $query_insert .= "INSERT INTO customer VALUES ('CS$cur_cust_id', '$customer_name', '$customer_email', '$customer_phone');";
        
}else {
    $query_insert .= "INSERT INTO customer VALUES ('CS000', '$customer_name', '$customer_email', '$customer_phone')";
}



?>