<?php  
include 'dbcon.php';

if(isset($_POST['add_product'])){
    $name = $_POST['name'];
    $des = $_POST['description'];
    $pri = $_POST['price'];
    $quan = $_POST['quantity'];
    $cat = $_POST['create_at'];
    $uat = $_POST['update_at'];

    if($name == "" || empty($name)){
        header('location:index.php?message=You need to fill in the last name');
    }

    else{
        $query = "insert into product (name, description, price, quantity, create_at, update_at) values('$name', '$des', '$pri', '$quan', '$cat', '$uat')";
        $result = mysqli_query( $connection,$query);

        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
        else{
            header('location:index.php?insert_msg=Your data has been added successfully');
        }
    }

    
}