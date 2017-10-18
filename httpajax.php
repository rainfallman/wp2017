<html>
    <?php
    
      /*$file_name = "total_count.txt"; //檔案名稱
        $file = @file("$file_name"); //讀取檔案
          $open = @fopen("$file_name","w+"); //開啟檔案，要是沒有檔案將建立一份

            @fwrite($open,$file[0]+1); //寫入人數
              fclose($open); //關閉檔案
                echo "累計了：";
                  echo @$file[0]+1; //顯示檔案目前內容
      */
      //echo "ffffffffffffffffffffffffffffffffffffffffffffuckkkkkkkkkkkkkkkkkkkkkkk"

      $httpfile=fopen("httpajax.txt","a+");
      $txt=htmlspecialchars($_REQUEST['word']);
      $showday=htmlspecialchars($_REQUEST['showday']);
      $showhour=htmlspecialchars($_REQUEST['showhour']);
      $showmin=htmlspecialchars($_REQUEST['showmin']);
      fwrite($httpfile,$txt);
      fwrite($httpfile,"\n留言時間：");
      fwrite($httpfile,$showday);
      fwrite($httpfile,"  "); 
      fwrite($httpfile,$showhour);
      fwrite($httpfile," 時 ");
      fwrite($httpfile,$showmin);
      fwrite($httpfile," 分 "); 
      fwrite($httpfile,"\n"); 
      fclose($httpfile);
      $httpfile1=fopen("httpajax.txt","r");
      while(!feof($httpfile1))
      {
        echo fgets($httpfile1). "<br/>";
      } 
      fclose($httpfile1);
      
    ?>
</html>
