<?php 
$title = "Index";
require_once "includes/header.php"; 
require_once "db/con_redo.php";

$results = $crud->getSpecialties();
?>
     <!--NAME: Andrea Pringle  ID:1917005528
        This series of videos will walk you through:
    1. Setting up a PHP Website ✓
    2. Adding Bootstrap 4 to your website ✓
    3. Setting up a Website Layout ✓
    4. Connecting to a MySQL Database ✓
    5. Perform Create, Read, Updateand Delete Operations against a database ✓
    6. Deploying your website to GitHub and Heroku 
    7. Provisioning a remote (internet) database and connecting your application to it.
    The end result will have you share with me: 
    1. The public GitHub repository link 
    2. The public published Heroku web application. 
    3. Connection details to the remote database. -->
    <br/>  <br/> 
    <h1 class="text-center">Registration for IT Conference</h1>
    <br/>  <br/>  


    <form method="post" action="success.php">
    <div class="form-group">
    <label for="fname">First Name</label>
    <input required  type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name">
  </div>
  <br/> 
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input required type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name">
  </div>
  <br/> 
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input required type="text" class="form-control" id="dob" name="dob" placeholder="Enter date of birth">
  </div>
  <br/> 
  <div class="form-group">
    <label for="specialty">Area of Expertise</label>
    <select  class="form-control" id="specialty" name="specialty">
    <?php 
        while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $r["specialty_id"] ?> "><?php echo $r["name"] ?> </option>
        <?php } ?>
    </select>
  </div>
  <br/> 
  <div class="form-group">
    <label for="email">Email address</label>
    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <br/> 
  <div class="form-group">
    <label for="tel">Contact #</label>
    <input required type="text" class="form-control" id="tel" name="tel" aria-describedby="telHelp"placeholder="Enter contact number">
    <small id="telHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
  </div>
  <br/> 
  <button type="submit" name="submit" class="btn btn-primary w-100" >Submit</button>
</form>
<br/> <br/>  
    <?php require_once "includes/footer.php"; ?>
   
   