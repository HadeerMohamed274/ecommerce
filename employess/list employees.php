<?php
include '../shared/nav.php';
include '../shared/config.php';
include '../shared/function.php';

$select = "SELECT * FROM `employees`";
$s = mysqli_query($conn , $select);
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM `employees` WHERE id = $id";
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
            <th>Salary</th>
            <th>Role</th>
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
            <td> <?php echo $data['salary']; ?> </td>
            <td> <?php echo $data['role']; ?> </td>
            <td> <a onclick="return confirm('Are You Sure')"
            href="list employee.php?delete= <?php echo $data['id'] ?>" class="btn btn-danger">Delete</a>
            <a href="add employee.php?edit= <?php echo $data['id'] ?>" class="btn btn-primary">update</a> </td>
                   
        </tr> 
        <?php } ?>
    </table>
</div>


<?php
include '../shared/script.php';

?>