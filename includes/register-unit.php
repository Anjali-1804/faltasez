<?php
include "../application-top.php";
header('Content-Type: application/json');
if (isset($_POST['company_loa_number']) && isset($_POST['company_name']) && isset($_POST['company_email']))  {
    $company_name = mysqli_real_escape_string($con, check_sanity($_POST["company_name"]));
    $company_email = mysqli_real_escape_string($con, check_sanity($_POST["company_email"]));
    $company_loa_number = mysqli_real_escape_string($con, check_sanity($_POST["company_loa_number"]));
    $company_loa_status = mysqli_real_escape_string($con, check_sanity($_POST["company_loa_status"]));
    $company_phoneNumber = mysqli_real_escape_string($con, check_sanity($_POST["company_phoneNumber"]));
    $company_address = mysqli_real_escape_string($con, check_sanity($_POST["company_address"]));
    $company_cin = mysqli_real_escape_string($con, check_sanity($_POST["company_cin"]));
    $company_id_type = mysqli_real_escape_string($con, check_sanity($_POST["company_id_type"]));
    $company_iec = mysqli_real_escape_string($con, check_sanity($_POST["company_iec"]));
    $company_code = generateCompCode($company_name);

    $chksql = "select company_loa_number from fsez_companies where company_loa_number = '" . $company_loa_number . "'";
    $chkres = mysqli_query($con, $chksql);

    if (mysqli_num_rows($chkres) > 0) {
        die('2');
    }
    
    $sql = "insert into fsez_companies (company_name, company_email, company_loa_number, company_loa_status, company_phoneNumber, company_address, company_id_type, company_cin, company_iec, company_code, added_on) values ('$company_name', '$company_email', '$company_loa_number', '$company_loa_status', '$company_phoneNumber', '$company_address', '$company_id_type', '$company_cin', '$company_iec', '$company_code', NOW())";
    $res = mysqli_query($con, $sql);
    $company_id = mysqli_insert_id($con);


    if ($res) {
        echo "0";
       // send_registration_confirmation($company_id);
    } else {
        echo "1";
    }
}
