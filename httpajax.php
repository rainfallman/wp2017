<html>
    <?php
      /*$httpfile=fopen("httpajax","a+");
      $txt=$_REQUEST['name'];
      fwrite($httpfile,$txt);
      fwrite($httpfile,'\n');

      while(!feof($httpfile))
      {
        echo fgets($httpfile). "<br/>";
      }
      fclose($httpfile);*/
      $word=$_REQUEST['word'];
      echo "$word";
    ?>
</html>
