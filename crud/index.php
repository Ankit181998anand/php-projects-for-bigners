<?php
    include 'dbcorn.php';
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
   <div class="container mt-5">

   <table class="table">
   <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <thead>

    <?php 
    
    $qry="SELECT * FROM `user`";
    $run=mysqli_query($link,$qry);

    if($run->num_rows>0){
        $count=0;
        while($data = $run->fetch_assoc()){
            $count++;
            ?>

                    <tr>
                    <th scope="col"><?php echo $count ?></th>
                    <th scope="col"><?php echo $data['name'] ?></th>
                    <th scope="col"><?php echo $data['email'] ?></th>
                    <th scope="col"><a href="update.php?id=<?php echo $data['id'] ?>">Edit</a></th>
                    <th scope="col"><a href="delete.php?id=<?php echo $data['id'] ?>">Delete</a></th>
                    </tr>

            <?php
        }

    }
    
    ?>
    
    
  </thead>
  <tbody>
  </tbody>
</table>

   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>