<?php
            $folder_name=$_POST['createfolder'];
            if (!file_exists($output_dir . $folder_name))/* Check folder exists or not */
			{
				@mkdir($output_dir . $folder_name, 0777);/* Create folder by using mkdir function */
	            echo "Folder Created";/* Success Message */
			}
			?>
            <!DOCTYPE html>
 <html>
 <body>
<form action="CreateFolder.php" method="post">
    <h2>
        Create New Folder
    </h2>
    <input name="createfolder" type="text">
    <input type="submit" value="Create Folder">
</form>
</body>
</html>