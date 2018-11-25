<?php
     
  require 'database.php';
    if ( !empty($_POST)) {

        $titleError = null;
        $bodyError = null;
     
        $title = $_POST['title'];
        $body = $_POST['body'];
       
        $valid = true;
        if (empty($title)) {
            $nameError = 'Please enter title';
            $valid = false;
        }
         
        if (empty($body)) {
            $emailError = 'Please enter body';
            $valid = false;
        }
         
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO posts (title,body) values(?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($title,$body));
            Database::disconnect();
            header("Location: index.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
 <body>
  <div class="container">     
    <div class="span10 offset1">
      <div class="row">
        <h3>Create </h3>
      </div>           
      <form class="form-horizontal" action="create.php" method="post">
        <div class="control-group <?php echo !empty($titleError)?'error':'';?>">
          <label class="control-label">Title</label>
            <div class="controls">
              <input name="title" type="text"  placeholder="title" value="<?php echo !empty($title)?$title:'';?>">
                <?php if (!empty($titleError)): ?>
                  <span class="help-inline"><?php echo $titleError;?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="control-group <?php echo !empty($bodyError)?'error':'';?>">
          <label class="control-label">Body</label>
            <div class="controls">
              <input name="body" type="text" placeholder="body" value="<?php echo !empty($body)?$body:'';?>">
                <?php if (!empty($bodyError)): ?>
                  <span class="help-inline"><?php echo $bodyError;?></span>
                <?php endif;?>
            </div>
        </div>
        <br>
        <div class="form-actions">
          <button type="submit" class="btn btn-success">Create</button>
            <a class="btn" href="index2.php">Back</a>
        </div>
      </form>
    </div>                
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
  </body>
</html>

