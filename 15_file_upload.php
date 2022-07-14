<?php
// If the superglobal $_POST is used, the submit button in this case, then we will do some stuff
  if(isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
    // Use the files superglobal to check to see if the 'upload' name from the form below is empty, which it will be unless a file is selected
    if(!empty($_FILES['upload']['name'])) {
      // print_r($_FILES);
      $file_name = $_FILES['upload']['name'];
      $file_size = $_FILES['upload']['size'];
      $file_tmp = $_FILES['upload']['tmp_name'];
      $target_dir = "uploads/${file_name}";

      // Get file extension
      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));

      // Validate file ext
      if(in_array($file_ext, $allowed_ext)) {
        if($file_size <= 1000000) {
          move_uploaded_file($file_tmp, $target_dir);

          $message = '<p style="color: green;">File uploaded.</p>';
        } else {
          $message = '<p style="color: red;">File is too large.</p>';
        }
      } else {
        $message = '<p style="color: red;">Invalid file type.</p>';
      }

    } else {
      $message = '<p style="color: red;">Please choose a file.</p>';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Use the coalescing operator - If there is a message it will echo it, otherwise it will hold null -->
  <?php echo $message ?? null ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="POST" enctype="multipart/form-data" >
    Select image to upload:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
  </form>
  
</body>
</html>