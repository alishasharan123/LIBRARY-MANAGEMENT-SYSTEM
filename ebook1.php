<?php
    include("includes/db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        upload_ebooks
    </title>
</head>
<body>
    <!--ebook uploading-->
    <div>
        <form method="post" enctype="multipart/form-data">
            <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
                <tr> 
                    <td width="246">
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                        <input name="userfile" type="file" id="userfile"> 
                    </td>
                    <td width="80">
                        <input name="upload" type="submit" class="box" id="upload" value=" Upload ">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        
        if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
        {
            $fileName = $_FILES['userfile']['name'];
            $tmpName  = $_FILES['userfile']['tmp_name'];
            $fileSize = $_FILES['userfile']['size'];
            $fileType = $_FILES['userfile']['type'];
            
            $fp      = fopen($tmpName, 'r');
            $content = fread($fp, filesize($tmpName));
            $content = addslashes($content);
            fclose($fp);

            if(!get_magic_quotes_gpc())
            {
                $fileName = addslashes($fileName);
            }
            $query = "INSERT INTO ebook (eb_name, size, eb_type, eb_file ) ".
                "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

            mysql_query($query) or die('Error, query failed'); 

            echo "<br>File $fileName uploaded<br>";
        } 
        ?>
    </div>
</body>
</html>