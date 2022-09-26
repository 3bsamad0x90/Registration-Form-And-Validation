<?php
    $errors = [];
    $firstName = filterInput("firstName");
    $lastName  = filterInput("lastName");
    $email = filterInput("email");
    $password = filterInput("password");
    $confirmPassword = filterInput("confirmPassword");
    $address = filterInput("address");

    

    //check if any input field is empty
    if(!$firstName){
        $errors["firstName"] = "firstName";
    }
    if(!$lastName){
        $errors["lastName"] = "lastName";
    }
    if(!$email){
        $errors["email"] = "email";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "invalidEmail";
    }
    if(!$password){
        $errors["password"] = "password";
    }
    if(!$confirmPassword){
        $errors["confirmPassword"] = "confirmPassword";
    }
    //compare password
    if($password && $confirmPassword && strcmp($password, $confirmPassword) !==0){
        $errors["passNotEqual"] = "passNotEqual";
    }
    if(!$address){
        $errors["address"] = "address";
    }
    if($errors){
        header("Location: ../index.php?errors=" . implode(",", $errors));
    }else {
        echo "All is Good, Your are Registered" . "<br>";
        echo "Welcome: " . $firstName . " " . $lastName . "<br>";
        echo "Your Email is: " . $email . "<br>";
        echo "Your Address is: " . $address. "<br>";
    }



    function filterInput($field){
        $_POST[$field] ??= 'default' ;
        return htmlspecialchars(stripslashes($_POST[$field]));
    }
?>