<?php include 'header.php'; ?>



<div class="container my-5">
<form action="checkdata.php" method="POST" enctype="multipart/form-data" class="w-75 mx-auto foorm">
  <div class="form-group">
    <label for="User-Name">User-Name</label>
    <input name="name" type="text" class="form-control" id="User-Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <input name="image" type="file"  id="Image">
    
    
  </div>
  <button type="submit" class="btn btn-primary form-control">Submit</button>
</form>
</div>

<?php
class mina{
  public $name;
  public $email;
  public $password;
  public $age;

public __constract(){
  
}


}



?>






















<?php include 'footer.php'; ?>
