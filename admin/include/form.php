<section id="career">
<br><br><br>

<?php include "config.php" ?>
<?php
if (isset($_POST['insert'])) {
  $fname = $_POST['fname'];
  $lnam = $_POST['lname'];
  $eml = $_POST['email'];
  $user = $_POST['cnumber'];
  $pass = $_POST['intro'];

  $allowed_extension = array('pdf');
    $filename = $_FILES["cv"]["name"];
    $file_extension = pathinfo($filename , PATHINFO_EXTENSION);
    if (in_array($file_extension, $allowed_extension)) {
          echo "UPLOADED";
        
    $randomno = rand(0,100);
    $rename ='name'.date('ymd').$randomno;

    $newname = $rename.'.'.$file_extension;

      $tempname = $_FILES["cv"]["tmp_name"];   
        $folder = 'C:\xampp\htdocs\eCom\upload/cv/'.$newname;
    
    $conectdb->query("INSERT into Information (fname, lname, email, cnumber, intro, cv) values ('$fname', '$lnam', '$eml', '$user', '$pass', '$newname')"); 
    if (move_uploaded_file($tempname, 'C:\xampp\htdocs\eCom\upload/cv/'.$newname))  {
            echo "<script>window.location.reload?mess=Successfully Added'</script>";
        } 
  }else{
            echo "<script>window.location.reload?mess=Not Successfully Added'</script>";
      }  
    }
?>
 
          <h3 class="text-center">Fill Information</h3><br>
          <?php if (!isset($_GET['form_upd'])): ?>
    <form method="POST" enctype="multipart/form-data">
      <div class="container">
      <div class="row">
        <div class="col-6">
        
          <label>First Name</label>
          <input class="form-control" type="text" name="fname" placeholder="First Name" required=""><br>
        
          <label>Last Name</label>
          <input class="form-control" type="text" name="lname" placeholder="Last Name" required=""><br>
        
          <label>E-mail</label>
          <input class="form-control" type="text" name="email" placeholder="Email Address" required=""><br>

          <label>Cell Number</label>
          <input class="form-control" type="text" name="cnumber" placeholder="Enter Number" pattern="[0-9]{11}" title="write only numbers" minlength="11" maxlength="11" required=""><br>
        
          <label>Write About Your Self</label><br>
          <textarea class="form-control" name="intro" placeholder="Introduce YourSelf with-in 300 words" required=""></textarea><br>
        
            <label>Upload Your CV</label>
            <input type="file" name="cv" class="form-control-file" required=""><br>
        
        <button type="submit" name="insert" class="btn btn-primary">Submit</button>
      </div>
        <div class="col-6"><br><br><br><img class="form-control" src="assets/img/contact.jpg " >
        </div>
      </div>  
    </div>
    </form>
  <?php endif ?>
  </section>