<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Time Display</title>
	<style>
	.container{
		width: 500px;
		height: 130px;
		border: 3px solid darkgray;
		margin: 0 auto;
	}
	h1{
		font-family: 'helvetica';
		/* border: 3px solid darkgray; */
		text-align: center;
		width: 500px;

	}
	h3{
		font-family: 'helvetica';
		border: 3px solid darkgray;
		text-align: center;
		width: 500px;
		margin: auto;
		margin-bottom: 20px;
		padding-bottom: 10px;
	}
	span{
		display: block;
	}


	</style>
	
</head>
<body>
		<h3>The current time and date:</h3>
		<div class="container">
			<h1><?= mdate($dateFormat); ?></h1>
			<h1><?= mdate($timeFormat); ?></h1>
		</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>