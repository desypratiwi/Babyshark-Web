<div class="inner-block">
<!--KONTEN-->
<html>
	<head>
		<title>Upload Form</title>
	</head>
		<body>

			<?php echo $error;?>

			<?php echo form_open_multipart('upload/do_upload');?>

			<input type="file" name="input_banner" size="20" />

			<br /><br />

			<input type="submit" value="upload" />

			</form>

		</body>
</html>
<div class="clearfix"> </div>
</div>
<!--climate start here-->
<!--climate end here-->

