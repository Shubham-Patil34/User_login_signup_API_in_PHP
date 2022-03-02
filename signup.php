<?php
    //variable declaration for io
    $name = "";
    $email = "";
    $password = "";
    $mobile = "";
    $address = "";

    //variables for database connection
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "Mydatabase";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //Database connection
        $conn = new mysqli($sname, $uname, $pass, $db);

        //check connection
        if($conn->connect_error){
            echo "database connection failed....!!";
        }
        else{
            // get form data
            $name = trim($_POST['name']);
            $address = trim($_POST['address']);
            $email =  trim($_POST['email']);
            $password =  trim($_POST['password']);
            $mobile = trim($_POST['mobile']);


            $qry = "INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES (NULL, '$name', '$email', '$password', '$mobile', '$address')";
                    
            $res = mysqli_query($conn, $qry);

            if($res == true){
                echo 'Account created successfully...';                    }
                    
            else{
                echo 'Account creation failed...!!';            
            }
        }
    }

    


?>