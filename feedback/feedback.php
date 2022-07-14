<?php include 'includes/header.php'; ?>

<?php
  $feedback = [
   [ 
    'id' => '1',
    'name' => 'Beth Williams',
    'email' => 'beth@gmail.com',
    'body' => 'Kevin is doing a great job!'
   ],
   [ 
    'id' => '2',
    'name' => 'Troy Swayzee',
    'email' => 'tro@gmail.com',
    'body' => 'What a great person he is!'
   ],
   [ 
    'id' => '3',
    'name' => 'Michael Howey',
    'email' => 'howey@gmail.com',
    'body' => "He's a cool cat!"
   ],
  ]
?>

<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $sql_feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
   
    <h2>Past Feedback</h2>

    <?php if (empty($feedback)): ?>
      <p class="lead mt3">There is no feedback.</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt2">
        By <?php echo $item['name']; ?>
       </div>
     </div>
   </div>
   <?php endforeach; ?>   

   <?php include 'includes/footer.php'; ?>