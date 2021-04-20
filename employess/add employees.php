<?php
include '../shared/nav.php';
include '../shared/config.php';
if(isset($_POST['send'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$salary = $_POST['salary'];
$role = $_POST['role'];
$insert = "INSERT INTO `employees` VALUES (NULL , '$name' , '$phone' , '$mail' , '$password' , '$salary' , '$role' )";
$i = mysqli_query($conn , $insert);

header("location:/ecommerce/employee/list employee.php");
}
//edit part
$name = "";
$mail = "";
$update = false;
if(isset($_GET['edit'])){
  $update = true;
$id = $_GET['edit'];
$select = "SELECT * FROM `employees` WHERE id = $id";
$s = mysqli_query($conn , $select);
$row = mysqli_fetch_assoc($s);
$name = $row['name'];
$mail = $row['mail'];}


if(isset($_POST['Update'])){
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$salary = $_POST['salary'];
$role = $_POST['role'];
$update = "UPDATE `employees` SET name = '$name' , id = '$id' , mail = '$mail' , password = '$password' ";
$u = mysqli_query($conn , $update);
if ($u){
header('location:./list employee.php');
}
else
echo "no";

}





?>
  <form method="POST">
   <div class="container col-5 mt-5">
    <h1 class="text-dark display-4"> Add Employee Data </h1>

    <div class="form-group">
      <label for="exampleInputEmail1">ID</label>
      <input type="number" value="<?php echo $id; ?>" name="id" class="form-control" placeholder="Employee ID">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" value="<?php echo $name; ?>" name="name" class="form-control" placeholder="Employee Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone</label>
      <input type="number" value="<?php echo $phone ?>" name="phone" class="form-control" placeholder="Employee Phone">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Mail</label>
      <input type="float" value="<?php echo $mail ?>" name="mail" class="form-control" placeholder="Employee Mail">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="float" value="<?php echo $password ?>" name="password" class="form-control" placeholder="Employee Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Salary</label>
      <input type="number" value="<?php echo $salary ?>" name="salary" class="form-control" placeholder="Employee Salary">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Role</label>
      <input type="text" value="<?php echo $role ?>" name="role" class="form-control" placeholder="Employee Role">
    </div>
    <?php if($update){ ?>
    <button type="submit" name="Update" class="btn btn-dark btn-block">update</button>
    <?php
    }
    else{  
    ?> <button type="submit" name="send" class="btn btn-dark btn-block">send</button>
  <?php } ?>
    </div>
</form>








<?php
include '../shared/script.php';
?>
