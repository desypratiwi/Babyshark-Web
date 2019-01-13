<html>
	<head>
		<title>Upload Banner</title>
	</head>
		<body>
			<?php echo form_open_multipart('upload/aksi_upload');?>
		 
			<input type="file" name="userfile" size="20" />
		 
			<br /><br />
		 
			<input type="submit" value="upload" />
		 
		</form>
		 
		</body>
</html>