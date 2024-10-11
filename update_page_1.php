<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>



<?php

if(isset($_GET['id'])){
$id = $_GET['id'];

    $query = "select * from product where id = '$id'";

    $result = mysqli_query($connection, $query);


    if(!$result) {
        die("query failed".mysqli_error($connection));
    }
    else{
        $row = mysqli_fetch_assoc($result);
        }
    }

?>

<?php 


        if(isset($_POST['update_list'])){
            if(isset($_GET['id_new'])){
                $idnew = $_GET['id_new'];
            }
            $name = $_POST['name'];
            $des = $_POST['description'];
            $pri = $_POST['price'];
            $quan = $_POST['quantity'];
            $cat = $_POST['create_at'];
            $uat = $_POST['update_at'];

            $query = "update product set name = '$name', description = '$des', price = '$pri', quantity = '$quan', create_at = '$cat', update_at = '$uat' where id = '$idnew'";

            $result = mysqli_query($connection, $query);


            if(!$result) {
                die("query failed".mysqli_error($connection));
            }
            else{
                header('location:index.php?update_msg=You have successfully update the data.');
            }
        }

?>

<form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">

<div class="form-group">

                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" value="<?php echo $row['description'] ?>">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" value="<?php echo $row['price'] ?>">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control" value="<?php echo $row['quantity'] ?>">
                <label for="create_at">Create_At</label>
                <input type="text" name="create_at" class="form-control"value="<?php echo $row['create_at'] ?>">
                <label for="update_at">Update_At</label>
                <input type="text" name="update_at" class="form-control"value="<?php echo $row['update_at'] ?>">

            </div>
            <input type="submit" class="btn btn-success" name="update_list" value="UPDATE">
<form>

<?php include('footer.php') ?>