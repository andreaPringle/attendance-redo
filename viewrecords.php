<?php 
$title = "View Records";
require_once "includes/header.php"; 
require_once "db/con_redo.php";

$results = $crud->getAttendees();
?>
  <br/>  <br/> 
<h1 class="text-center">Records</h1>
    <br/>  <br/> 
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th> 
            <th>Area of Expertise</th>
            <th>Actions</th>
        </tr>
        <?php 
        while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td> <?php echo $r["attendee_id"] ?> </td>
                <td> <?php echo $r["firstname"] ?> </td>
                <td> <?php echo $r["lastname"] ?> </td>
                <td> <?php echo $r["name"] ?> </td>
                <td>
                    <a href="view.php?id=<?php echo $r["attendee_id"] ?> " class= "btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r["attendee_id"] ?> " class= "btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $r["attendee_id"] ?> " class= "btn btn-danger">Delete</a>
            </td>
        </tr>
       <?php }?>

    </table> 
    <br/> <br/>  
    <?php require_once "includes/footer.php"; ?>