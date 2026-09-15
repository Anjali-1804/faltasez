<?php

class ClientSettings {

    public $isRentPaymentEnabled;

    public function __construct() {
        global $con;
        $cntsql = "select * from fsez_global_settings where setting_id = 1";
        $cntres = mysqli_query($con, $cntsql);   
        $cntrow = mysqli_fetch_array($cntres);
        $this->isPaymentEnabled($cntrow);
    }


    public function isPaymentEnabled($pm) {
       $this->isRentPaymentEnabled = $pm['isRentPaymentEnabled'];
       return $this->isRentPaymentEnabled;
    }

}