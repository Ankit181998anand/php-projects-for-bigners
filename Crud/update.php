<?php
    include 'dbcorn.php';
    $id=$_GET['id'];
   $qry="SELECT * FROM `user` WHERE `id`='$id'";
   $run=mysqli_query($link,$qry);
   $data=$run->fetch_assoc();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
   <form action="" method="post">
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="test" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['name'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['email'] ?>" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" value="<?php echo $data['password'] ?>">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $qry="UPDATE `user` SET `name`='$name',`email`='$email',`password`='$pass' WHERE `id`='$id'";
    $run=mysqli_query($link,$qry);

    if($run){
        ?>
            <script>
                alert("Data updated Sucessfully")
            </script>
        <?php
        header("Location: index.php");
    }
    else{
        ?>
        <script>
            alert("Data not updated")
        </script>
    <?php
    header("Location: update.php");
    }

}

?>