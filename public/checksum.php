<?php

  require_once('../private/initialize.php');

  $message = '';
  $checksum = '';
  $result_text = '';

  if(isset($_POST['submit'])) {
  
    if($_POST['submit'] === 'Create') {
    
      // This is a create signature request
      $message = isset($_POST['message']) ? $_POST['message'] : nil;
      $checksum = create_checksum($message);
    
    } else {
    
      // This is a verify signature request
      $message = isset($_POST['message']) ? $_POST['message'] : nil;
      $checksum = isset($_POST['checksum']) ? $_POST['checksum'] : nil;
      $result = verify_checksum($message, $checksum);
      $result_text = $result === True ? 'Valid' : 'Not valid';
    }
  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>One-way Hash Algorithms: Create/Verify Checksum</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>
    
    <a href="index.php">Main menu</a>
    <br/>

    <h1>One-way Hash Algorithms: Checksum</h1>
    
    <div id="encoder">
      <h2>Create Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="message">Message</label>
          <textarea name="message"><?php echo h($message); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="Create">
        </div>
      </form>
    
      <div class="result"><?php echo h($checksum); ?></div>
      <div style="clear:both;"></div>
    </div>
    
    <hr />
    
    <div id="decoder">
      <h2>Verify Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="message">Message</label>
          <textarea name="message"><?php echo h($message); ?></textarea>
        </div>
        <div>
          <label for="signature">Checksum</label>
          <textarea name="checksum"><?php echo h($checksum); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="Verify">
        </div>
      </form>

      <div class="result"><?php echo h($result_text); ?></div>
      <div style="clear:both;"></div>
    </div>
    
  </body>
</html>
