<?php
$url_check = 'http://staging-vzcards-api.herokuapp.com/vzcard_details/?access_token=gWgLsmgEafve3TEUewVf26rh9tuq69';
$options_check = array(
  'http' => array(
    /*'header'  => array(
                  'LOGGED-IN: 1',
                ),*/
    'method'  => 'GET',
  ),
);
$context_check = stream_context_create($options_check);
$output_check = file_get_contents($url_check, false,$context_check);
/*echo $output_check;*/
$arr_check = json_decode($output_check,true);
/*echo $arr_check;*/

?>

<html>
<head>


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="shortcut icon" href="images/logo.ico" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:#5D89C9">

<div class="container">

	<div class="row" style="height:15%;text-align:center;margin-top:5%">
			<img id="" style="margin-left:16%" src="vz_title.png"></img>
	</div>

	<div class="row">
		<div class="col-xs-8">
			<h3>Users Registered</h3>
			<div class="row">
				<h1 id="user_count"><?php echo $arr_check[0]['valid_users_count']; ?></h1>
			</div>
		</div>

		<div class="col-xs-4">
			
			<div class="row" style="height:20%">
				<h3>Total Tickets</h3>
				<div class="row">
					<h1 id="ticket_count"><?php echo $arr_check[0]['number_of_posts']; ?></h1>
				</div>
			</div>

			<div class="row" style="height:20%">
				<h3>Total Connections</h3>
				<div class="row">
					<h1 id="conn_count"><?php echo $arr_check[0]['connections']; ?></h1>
				</div>
			</div>

			<div class="row" style="height:20%">
				<h3>Images Uploaded</h3>
				<div class="row">
					<h1 id="img_count"><?php echo $arr_check[0]['images_uploaded']; ?></h1>
				</div>
			</div>

		</div>
	</div>
</div>

</body>
</html>


<script>
setTimeout(function () { window.location.reload(); }, 1*60*1000);
// just show current time stamp to see time of last refresh.
/*document.write(new Date());*/
</script>

