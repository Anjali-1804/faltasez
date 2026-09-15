<?php
include("application-top.php");

$company = check_sanity($_POST["company"]);
$rentYear = check_sanity($_POST["rentYear"]);
$rentQuarter = check_sanity($_POST["rentQuarter"]);

$sql = "select rent_status_id, rent_paid_of_year, company, is_rent_paid, rent_paid_of_quarter, rent_amount, previous_due_amount, rent_status_file_name, fsez_rent_status.status, company_id, company_name, company_email, company_phoneNumber from fsez_rent_status inner join fsez_companies on fsez_rent_status.company = fsez_companies.company_id where fsez_companies.company_code = '$company' and fsez_rent_status.rent_paid_of_year = '$rentYear' and fsez_rent_status.rent_paid_of_quarter = '$rentQuarter' and fsez_rent_status.status = 1";
$res = mysqli_query($con, $sql);

$resultset = array();

while ($row = mysqli_fetch_array($res))
{
        $company =   $row['company'];
        $rent_status_id = $row['rent_status_id'];
        $company_name =  $row['company_name'];
        $company_email =  $row['company_email'];
        $company_phoneNumber = $row['company_phoneNumber'];
        $rent_amount = $row['rent_amount'];
        $previous_due_amount = $row['previous_due_amount'];
        $rent_status_file_name = $row["rent_status_file_name"];
        $rent_paid_of_year =  $row["rent_paid_of_year"];
        $rent_paid_of_quarter = $row["rent_paid_of_quarter"];
        $is_rent_paid =  $row['is_rent_paid'];

        $resultset[] = array("company_id" => $company, "rent_status_id" => $rent_status_id, "company_name" => $company_name, "company_email" => $company_email, "company_phoneNumber" => $company_phoneNumber, "rent_paid_of_year" => $rent_paid_of_year, "rent_paid_of_quarter" => $rent_paid_of_quarter , "rent_amount" => $rent_amount, "previous_due_amount" => $previous_due_amount, "rent_status_file_name" => $rent_status_file_name, "is_rent_paid" => $is_rent_paid);
}

echo json_encode( $resultset );
?>




