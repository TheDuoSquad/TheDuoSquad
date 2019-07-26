<?php
include "conn.php";



//Handle Deleting User
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $conn->exec($sql);
    header('location: admin.php');
    die;
}

//Handle Updating User Info
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $status = $_POST['status'];

    $sql = "UPDATE users SET username = '$username', email = '$email', `type` = '$type', `status` = '$status' WHERE id = $id";
}
    


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $s = $conn->prepare($sql);
    $s->execute();
    $users = $s->fetch(PDO::FETCH_ASSOC);
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Update User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
</head>
<body>
<div class="container">

<h1>Update User</h1>
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Update Username:</label>
        <input type="text" name="username" id="username" value="<?php echo $users['username']; ?>" required>
      </div>

      <div class="form-group">
        <label for="email">Update Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $users['email']; ?>" required>
      </div>

         <div class="form-group">
        <label for="status">Update Status:</label>
        <input type="text" name="status" id="status" value="<?php echo $users['status']; ?>" required>
      </div>         

      <input type="hidden" name="id" value= "<?php echo $user['id']; ?>">

      <div class="form-group">
        <label for="type">Update Type:</label>
        <input type="text" name="type" id="type" required value="<?php echo $users['type']; ?>">
      </div>
      

      
      



<form action="adminupdateuser.php" method="get">
<input type="hidden" name="id" value= "<?php echo $user['id']; ?>">
<button type="submit" name="update" class= "btn btn-primary">Update</button>
    </form>

<form action="" method="post">
<input type="hidden" name="id" value= "<?php echo $user['id']; ?>">
<button type="submit" name="delete" class= "btn btn-danger">Delete</button>
    </form>


</div>
</body>
</html>