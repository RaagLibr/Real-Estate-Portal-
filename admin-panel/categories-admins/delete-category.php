<?php require "../layouts/header.php"; ?>           
<?php require "../../config/config.php"; ?>

<?php 


  if(!isset($_SESSION['adminname'])) {

   echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
      
  }

  if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $select = $conn->query("DELETE FROM categories WHERE id = '$id'");
    $select->execute();

    echo "<script>window.location.href='".ADMINURL."/categories-admins/show-categories.php'</script>";
}
  
?>
