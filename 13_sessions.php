<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/
// To have a session, you need to use session_start()
// Anywhere you want to use this value, you also have to have session_start() (such as in the extras/dashboard.php file)
// However, if you include a header in all of your pages that has a session_start() in it, then you wouldn't need to put the session_start() anywhere else
session_start();

if(isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

  $password = $_POST['password'];

  if($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="name">Username: </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="age">Password: </label>
    <input type="password" name="password">
  </div>
  <input type="submit" name="submit" value="Submit">
</form>