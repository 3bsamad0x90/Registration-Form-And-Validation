<?php
    $errors = [];
    if(isset($_GET['errors'])){
        $errors = explode("," , $_GET['errors']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<form class = "container mt-5" method="post" action="functions/registerHandle.php" novalidate>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputFirstName">First Name</label>
            <input type="text" class="form-control <?php 
                if(in_array('firstName', $errors)){echo 'is-invalid';}?>" 
                id="inputFirstName" name = "firstName" placeholder= "Enter Your First Name">
            <div class="invalid-feedback">
                <?php 
                    if(in_array('firstName', $errors)){echo 'This Field Is Required';}
                ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputLastName">Last Name</label>
            <input type="text" class="form-control <?php 
                if(in_array('lastName', $errors)){echo 'is-invalid';}?>" 
                id="inputLastName" name = "lastName" placeholder= "Enter Your Last Name">
            <div class="invalid-feedback">
                <?php 
                    if(in_array('lastName', $errors)){echo 'This Field Is Required';}
                ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control <?php 
                if(in_array('email', $errors) || in_array('invalidEmail', $errors) ){echo 'is-invalid';}?>" 
                id="inputEmail" placeholder="Enter Your Email" name = "email">
        <div class="invalid-feedback">
            <?php 
                if(in_array('email', $errors)){
                    echo 'This Field Is Required';
                }if(in_array('invalidEmail', $errors)){
                    echo "Email Must Be Valid";
                }
            ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Password">Password</label>
            <input type="password" class="form-control <?php 
                if(in_array('password', $errors)){echo 'is-invalid';}?>" 
                id="Password" name = "password" placeholder = "Enter password">
            <div class="invalid-feedback">
                <?php 
                    if(in_array('password', $errors)){echo 'This Field Is Required';}
                ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="ConfirmPassword">Confirm Password</label>
            <input type="password" class="form-control <?php 
                if(in_array('confirmPassword', $errors) || in_array('passNotEqual', $errors)){echo 'is-invalid';}?>" 
                id="ConfirmPassword" name = "confirmPassword" placeholder = "Confirm password">
            <div class="invalid-feedback">
                <?php 
                    if(in_array('confirmPassword', $errors)){echo 'This Field Is Required';}
                    if(in_array('passNotEqual', $errors)){echo 'Password Doesn\'t match ';}
                ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" class="form-control <?php 
                if(in_array('address', $errors)){echo 'is-invalid';}?>" 
                id="Address" placeholder="Enter Your Address" name = "address">
        <div class="invalid-feedback">
                <?php 
                    if(in_array('address', $errors)){echo 'This Field Is Required';}
                ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>