<?php
$pageTitle = 'Home';
?>



<?php include 'header.php';?>

<div class="hero">
	<div class="row">
	<h1>Hello <?php echo $userName; ?>, nice to see you again.</h1>
	<?php if(empty($userName)) : ?>
    <h1>Who are you? Login <a href="/login.php">here</a></h1>

 	 <?php else : ?>
    <h1><?php echo $userName; ?></h1>
    <?php endif; ?>
	</div>

</div>

<div class="row">
	<div class="column one-half">
		<h3> column heading</h3>
		<p> Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		</div>

		<div class="column one-half">
    <h3>Column Heading</h3>
    <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
  </div>
</div>

<?php include 'footer.php';?>