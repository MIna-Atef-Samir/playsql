<?php include 'header.php' ?>
<?php include 'conn.php' ?>

<div class="container my-5">
<table class="table">
  <thead class="thead-dark">
      
      <tr>
          <th scope="col">#</th>
          <th scope="col">image</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
        </tr>
        
        
    </thead>
    <tbody>
    <?php 
    $q = "SELECT * FROM workers" ;
    $loop = $conn->query($q);
    foreach($loop as $l){?>
    <tr>
      <th scope="row"><?= $l['id']?> </th>
      <td><img src="<?= $l['image']?>" width="100" alt=""></td>
      <td><?= $l['name']?></td>
      <td><?= $l['email']?></td>
      <td><?= $l['password']?></td>
    </tr>
    <?php }?>
  </tbody>
</table>

</div>




























<?php include 'footer.php' ?>