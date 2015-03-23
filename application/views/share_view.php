<!DOCTYPE HTML>
<HTML>
	<head>
		<link rel='stylesheet' href='<?php echo base_url(); ?>assets/stylesheets/navbar.css' type='text/css' />
		<link rel='stylesheet' href='<?php echo base_url(); ?>assets/stylesheets/homeBackground.css' type='text/css' />
		<script type="../views/text/javascript" src="js/jquery-2.1.3.js"></script>
		<title>Share</title>

	</head>
	
	<header>
		<!-- Include the header -->
		<?php $this->load->view('menubar'); ?>
	</header>

	
	<body>
		<div>
			<form action="model.php" method="post">
				<p>Title
					<input type="text" name="title" /> 
				</p>

				<p>Market
					<input type="radio" name="market" value="health" checked="checked"/> health
					<input type="radio" name="market" value="technology" /> technology  
					<input type="radio" name="market" value="education" /> education
					<input type="radio" name="market" value="finance" /> finance
					<input type="radio" name="market" value="travel" /> travel
				</p>

				<p>Description</p>
				<p>
					<textarea name="description" rows="6" cols="40"></textarea>	
				</p>	
				
				<p>
					<input type="submit" />
				</p>		

				
			</form>	
			
		</div>
		
				
				
	</body>
</HTML>