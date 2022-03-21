<?php
class SubmitDocController
{
    public function index()
    {
        require_once("./views/submitDoc/index_submitDoc.php");
    }

    public static function add()
    {
        $intern_coop = $_GET['intern_coop'];
        $petition = $_GET['petition'];
        $nisit_no = $_GET['nisit_no'];
        $name_surname = $_GET['name_surname'];
        $telephone_no = $_GET['telephone_no'];
        $facebook_name = $_GET['facebook_name'];
        $intern_position = $_GET['intern_position'];
        $person1_name = $_GET['person1_name'];
        $pos_ps1 = $_GET['pos_ps1'];
        $company_name = $_GET['company_name'];
        $house_number = $_GET['house_number'];
        $street = $_GET['street'];
        $districts = $_GET['districts'];
        $amphures = $_GET['amphures'];
        $provinces = $_GET['provinces'];
        $postcode = $_GET['postcode'];
        $HR_name = $_GET['HR_name'];
        $HR_number = $_GET['HR_number'];
        $email = $_GET['email'];
        $start_intern = $_GET['start_intern'];
        $end_intern = $_GET['end_intern'];
        $salary = $_GET['salary'];
        $room = $_GET['room'];

        SubmitDoc::add($intern_coop,$petition,$nisit_no,$name_surname,$telephone_no,$facebook_name,$intern_position,$person1_name,$pos_ps1,$company_name,$house_number,$street,$districts,$amphures,$provinces,$postcode,$HR_name,$HR_number,$email,$start_intern,$end_intern,$salary,$room);

        require_once("./views/submitDoc/index_submitDoc.php");
    }
}


?>