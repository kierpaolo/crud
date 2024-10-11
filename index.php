<?php include('header.php'); ?>
    <?php include('dbcon.php'); ?>


    <div class="box1">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD PLAYERS</button>
        </div>
        
    <table  id="dataID" class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>description</th>
                <th>price</th>
                <th>quantity</th>
                <th>create_at</th>
                <th>Update_at</th>
                <th>edit</th>
                <th>Delete</th>
                

            </tr>           
        </thead>
        <tbody>

            <?php 
            
                $query = "select * from product";

                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("query failed".mysqli_error($connection));
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                        ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['create_at']; ?></td>
                            <td><?php echo $row['update_at']; ?></td>
                            <td><a href="update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                            <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        
                        <?php
                    }
                }
            
            ?>
           
        </tbody>
    </table>

    <?php 
    
    if(isset($_GET['message'])){
        echo "<h6>".$_GET['message']."</h6>";
    }
    
    ?>



    <form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
                <label for="description">description</label>
                <input type="text" name="description" class="form-control">
                <label for="price">price</label>
                <input type="text" name="price" class="form-control">
                <label for="quantity">quantity</label>
                <input type="text" name="quantity" class="form-control">
                <label for="create_at">create_at</label>
                <input type="datetime-local" name="create_at" class="form-control">
                <label for="update_at">update_at</label>
                <input type="datetime-local" name="update_at" class="form-control">
            </div>

            
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_product" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
    <?php include('footer.php'); ?>

    