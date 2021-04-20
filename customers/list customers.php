<?php
include '../shared/nav.php';
include '../shared/config.php';
include '../shared/function.php';

$select = "SELECT * FROM `customers`";
$s = mysqli_query($conn , $select);
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `customers` WHERE id = $id";
   $d = mysqli_query($conn , $delete);
   testmessage($d , "Deleted");
}

?>
<div class="container col-6 mt-5">
    <table class="table table-dark table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Mail</th>
            <th>Password</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
            <?php
              foreach($s as $data){
            ?>
        <tr>
            <td> <?php echo $data['id']; ?> </td>
            <td> <?php echo $data['name']; ?> </td>
            <td> <?php echo $data['phone']; ?> </td>
            <td> <?php echo $data['mail']; ?> </td>
            <td> <?php echo $data['password']; ?> </td>
            <td> <?php echo $data['address']; ?> </td>
            <td> <a onclick="return confirm('Are You Sure')"
            href="list customers.php?delete= <?php echo $data['id'] ?>" class="btn btn-danger">Delete</a>    
        </tr> 
        <?php } ?>
    </table>
</div>


<?php
include '../shared/script.php';

?>