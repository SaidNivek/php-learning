<?php include 'includes/header.php'; ?>

<?php
  $name = $email = $body = '';
  $name_err = $email_err = $body_err = '';
  
  // Form submit, when the database is connecting properly
  if(isset($_POST['submit'])) {
    // Validate the name field
    if(empty($_POST['name'])){
      $name_err = 'Name is required.';
    } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    // Validate the email field
    if(empty($_POST['email'])){
      $email_err = 'Email is required.';
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    // Validate the feedback (body) field
    if(empty($_POST['body'])){
      $body_err = 'Body is required.';
    } else {
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    // If all of these errors are empty, we can move on
    if(empty($name_err) && empty($email_err) && empty($body_err)) {
      // Add to database
      $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
      
      if(mysqli_query($conn, $sql)) {
        // Successful if the above is true
        header('Location: feedback.php');
      } else {
        echo 'Error: ' . mysqli_error($conn);
      }
    }
  }
?>

    <img src="/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $name_err ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback"><?php echo $name_err?></div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $email_err ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback"><?php echo $email_err?></div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $body_err ? 'is-invalid' : ''; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invalid-feedback"><?php echo $body_err?></div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

<?php include 'includes/footer.php'; ?>
    
