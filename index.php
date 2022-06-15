<?php require "script.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate ID Card</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">


    <style>
        * {
            -webkit-print-color-adjust: exact !important;
            color-adjust: exact !important;
        }

        body {
            font-family: 'Open Sans', sans-serif;
        }

        .id {
            position: absolute;
            top: 15%;
            left: 20%;
        }

        .date-issued {
            position: absolute;
            top: 15%;
            left: 60%;
        }

        .name {
            position: absolute;
            top: 35%;
            left: 20%;
            font-size: 20px;
        }

        .dob {
            position: absolute;
            top: 55%;
            left: 20%;
        }

        .nationalty {
            position: absolute;
            top: 55%;
            left: 60%;
        }

        .address {
            position: absolute;
            top: 75%;
            left: 20%;
        }

        .card-label-up {
            font-size: 12px;
            font-weight: bold;
            margin: 0;
            padding: 0;
            color: white;
        }

        .card-label {
            font-size: 12px;
            font-weight: bold;
            margin: 0;
            padding: 0;
            color: black;
        }

        .value {
            font-size: 18px;
            font-weight: bold;

        }

        .box-shadow {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }

        @media print {
            .box-shadow {
                width: 100% !important;
            }

            #button {
                display: none;
            }
        }

        @media (max-width: 1200px) {
            .box-shadow {
                width: 60% !important;
            }
        }

        @media (max-width: 991px) {
            .box-shadow {
                width: 80% !important;
            }
        }

        @media (max-width: 767px) {
            .box-shadow {
                width: 100% !important;
            }

            .card-label {
                font-size: 10px;
            }

            .value {
                font-size: 15px;
            }
        }

        @media (max-width: 514px) {
            .box-shadow {
                width: 100% !important;
            }

            .card-label {
                font-size: 8px;
            }

            .value {
                font-size: 10px;
            }

            #card-image {
                height: 150px !important;
                width: 150px !important;
            }

            .card-label-up {
                font-size: 10px;
            }

            h4 {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>
    <div class="container mx-auto my-5">
        <div style="display:<?php echo $display_form ?>">
            <h2 class="text-center my-5 bg-warning p-3">Get a Free ID Card generated with an Avatar image</h2>
            <form class="row g-3 needs-validation" action="card.php" method="post" novalidate>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $firstname ?>" name="firstname" required>
                    <small class="text-danger m-0 p-0"><?php
                                                        if (array_key_exists('firstname_error', $errors)) {
                                                            echo  $errors['firstname_error'];
                                                        }
                                                        ?></small>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?php echo $lastname ?>" name="lastname" required>
                    <small class="text-danger m-0 p-0"><?php
                                                        if (array_key_exists('lastname_error', $errors)) {
                                                            echo  $errors['lastname_error'];
                                                        }
                                                        ?></small>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom03" class="form-label">Company's name</label>
                    <input type="text" class="form-control" id="validationCustom03" value="<?php echo $company ?>" name="company" required>
                    <small class="text-danger m-0 p-0"><?php
                                                        if (array_key_exists('company_error', $errors)) {
                                                            echo  $errors['company_error'];
                                                        }
                                                        ?></small>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationCustomEmail" value="<?php echo $email ?>" name="email" required>
                    <small class="text-danger m-0 p-0"><?php
                                                        if (array_key_exists('email_error', $errors)) {
                                                            echo  $errors['email_error'];
                                                        }
                                                        ?></small>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomPhoneNumber" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="validationCustomPhoneNumber" value="<?php echo $phone_number ?>" name="phone_number" required>
                    <small class="text-danger m-0 p-0"><?php
                                                        if (array_key_exists('phone_number_error', $errors)) {
                                                            echo  $errors['phone_number_error'];
                                                        }
                                                        ?></small>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom04" class="form-label">Address</label>
                    <input type="text" class="form-control" id="validationCustom04" value="<?php echo $address ?>" name="address" required>
                    <small class="text-danger m-0 p-0"><?php
                                                        if (array_key_exists('address_error', $errors)) {
                                                            echo  $errors['address_error'];
                                                        }
                                                        ?></small>
                </div>
                <div class="col-md-6">
                    <label for="validationCustomDOB" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="validationCustomDOB" aria-describedby="inputGroupPrepend" value="<?php echo $dob ?>" name="dob" required>
                    <small class="text-danger m-0 p-0"><?php
                                                        if (array_key_exists('dob_error', $errors)) {
                                                            echo  $errors['dob_error'];
                                                        }
                                                        ?></small>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Nationalty</label>
                    <input type="text" class="form-control" id="validationCustom05" value="<?php echo $nationalty ?>" name="nationalty" required>
                    <small class="text-danger m-0 p-0"><?php
                                                        if (array_key_exists('nationalty_error', $errors)) {
                                                            echo  $errors['nationalty_error'];
                                                        }
                                                        ?></small>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="terms" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <small class="text-danger m-0 p-0"><?php
                                                            if (array_key_exists('terms_error', $errors)) {
                                                                echo  "<br/>" . $errors['terms_error'];
                                                            }
                                                            ?></small>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                </div>
            </form>
        </div>



        <div style="display:<?php echo $display_card ?>">
            <div class="mx-auto my-5 w-50 d-flex flex-column box-shadow">
                <div class="d-flex justify-content-around align-items-center align-content-start bg-primary text-white">
                    <div class="text-center"><b><?php echo $company ?></b></div>
                    <div class="text-left my-2">
                        <h4>YOUR IDENTITY CARD</h4>
                        <p class="card-label-up"><?php echo "Email: $email<br/>" ?></p>
                        <p class="card-label-up"><?php echo "Phone Number: $phone_number" ?></p>
                    </div>
                </div>
                <div style="position:relative; width:100%; height:100%">
                    <img src="https://static.vecteezy.com/system/resources/previews/002/822/349/non_2x/abstract-lines-and-dots-connect-on-white-background-technology-connection-digital-data-and-big-data-concept-vector.jpg" height="100%" width="100%" />
                    <div class="d-flex justify-content-around align-items-center" style="position:absolute; top:0; width:100%; height:100%">
                        <div class="text-center bg-light mx-2">
                            <img id="card-image" height="100%" src="https://cdn.pixabay.com/photo/2017/01/31/21/23/avatar-2027366_1280.png" alt="Card Picture" height="200px" width="200px" />
                        </div>
                        <div class="" style="position:relative; width:100%; height:100%">
                            <p class="id value"><?php echo "$id <br/> <small class='card-label'>EMPLOYEE ID</small>" ?></p>
                            <p class="date-issued value"><?php echo "$issued_date <br/> <small class='card-label'>DATE ISSUED</small>" ?></p>
                            <p class="name value text-primary"><?php echo "$firstname $lastname <br/> <small class='card-label'>FULLNAME</small>" ?></p>
                            <p class="dob value"><?php echo "$dob <br/> <small class='card-label'>DOB</small>" ?></p>
                            <p class="nationalty value"><?php echo "$nationalty <br/> <small class='card-label'>NATIONALTY</small>" ?></p>
                            <p class="address value"><?php echo "$address <br/> <small class='card-label'>ADDRESS</small>" ?></p>
                        </div>
                    </div>
                </div>
                <div class="bg-primary p-2"></div>
            </div>
        </div>
        <div class="justify-content-center" style="display:<?php echo $display_card ?> ">
            <button class="btn btn-primary" id="button" type="button" onclick="window.print()">Print PDF</button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>