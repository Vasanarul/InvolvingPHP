<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Involve x PHP</title>
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css">'; ?>
  </head>
  <body>

    <form action='index.php' method='post'>
      Name: <input type='text' name='name'>
      Role: <input type='text' name='role'>
      <input type='submit' name='submit'>
    </form>

    <br>

    <?php
        if(isset($_POST['submit'])){
          echo "Welcome $_POST[name]! We appreciate all the work you do as a $_POST[role].";
        }
    ?>

  </body>
</html>