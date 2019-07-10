<!DOCTYPE html>
<html>
  <body>
    <form action="/save.php" method="POST">
    <?php

    $collection=[];
        $file =file_get_contents("data.txt");
        $collection = unserialize($file);
        $size=sizeof($collection);

      echo "<div>";
        echo "Name :<input type='text' name='name' value=".$collection[$size-1]['name'].">";
      echo "</div>";
      echo "<div>";
        echo "Age :<input type='number' name='age' value=".$collection[$size-1]['age'].">";
      echo "</div>";
      echo "<div>";
        echo "Email :<input type='email' name='email' value=".$collection[$size-1]['email'].">";
      echo "</div>";
      echo "<div>";
        echo "<input type='submit' value='Submit' />";
      echo "</div>";
      ?>
    </form>

  

  </body>
</html>
