<?php
$firstname = $lastname = $email = $phone_number = $nationalty = $dob = $terms = $address = $company =  "";
$firstname_error = $lastname_error = $email_error = $phone_number_error = $nationalty_error = $dob_error = $terms_error = $address_error = $company_error = "";
$issued_date = date("jS F, Y ");
$id = rand(145426,999999);
$errors = [];
$display_card = "none";
$display_form = "block";

if (isset($_POST['submit'])) {
    if (empty($_POST["firstname"])) {
        $errors['firstname_error'] = "Firstname can't be blank!";
    }elseif (!is_string(trim($_POST['firstname']))){
        $errors['firstname_error'] = "Can only be Alpha characters A-Za-z!";
    }elseif (count((explode(" ",trim($_POST['firstname'])))) > 2) {
        $errors['firstname_error'] = "Firstname can't be more than two names!";
    }else {
        $firstname = strtoupper($_POST['firstname']);
    }

    if (empty($_POST["lastname"])) {
        $errors['lastname_error'] = "Lastname can't be blank!";
    }elseif (!is_string(trim($_POST['lastname']))){
        $errors['lastname_error'] = "Can only be Alpha characters A-Za-z!";
    }elseif (count((explode(" ",trim($_POST['lastname'])))) > 1) {
        $errors['lastname_error'] = "Lastname can't be more than one name!";
    }else {
        $lastname = strtoupper($_POST['lastname']);
    }
    
    if (empty($_POST["company"])) {
        $errors['company_error'] = "Company's name can't be blank!";
    }elseif (!is_string(trim($_POST['company']))){
        $errors['company_error'] = "Can only be Alpha characters A-Za-z!";
    }elseif (count((explode(" ",$_POST['company']))) > 3) {
        $errors['company_error'] = "Company's name can't be more than three words!";
    }else {
        $company = strtoupper($_POST['company']);
    }

    if (empty($_POST["email"])) {
        $errors['email_error'] = "Email can't be blank!";
    }elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email_error'] = "Invalid email format";
    }else {
        $email = $_POST['email'];
    }

    if (empty($_POST["phone_number"])) {
        $errors['phone_number_error'] = "Phone Number is required!";
    }else {
        $phone_number = $_POST['phone_number'];
    }

    if (empty($_POST["address"])) {
        $errors['address_error'] = "Address can't be blank!";
    }elseif (!is_string(trim($_POST['address']))){
        $errors['address_error'] = "Can only be Alpha characters A-Za-z!";
    }else {
        $address = strtoupper($_POST['address']);
    }

    if (empty($_POST["nationalty"])) {
        $errors['nationalty_error'] = "Nationalty can't be blank!";
    }elseif (!is_string(trim($_POST['lastname']))){
        $errors['nationalty_error'] = "Can only be Alpha characters A-Za-z!";
    }else {
        $nationalty = strtoupper($_POST['nationalty']);
    }

    if (empty($_POST["dob"])) {
        $errors['dob_error'] = "DOB can't be empty!";
    }else {
        $dob = $_POST['dob'];
    }

    if (empty($_POST["terms"])) {
        $errors['terms_error'] = "You must agree to terms and conditions.";
    }else {
        $terms = $_POST['terms'];
    }

    if (empty($errors)) {
        $display_card = "flex";
        $display_form = "none";
    }else {
        $display_card = "none";
        $display_form = "block";
    }

}
