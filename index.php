

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script type="text/javascript">

		function salesoffices()
		{
	    	document.getElementById('salesoffices').style.display='block';
	    	document.getElementById('countries').style.display='none';
	    	document.getElementById('accommodations').style.display='none';
		}
		function countries()
		{
	    	document.getElementById('countries').style.display='block';
	     	document.getElementById('salesoffices').style.display='none';
	     	document.getElementById('accommodations').style.display='none';
		}

			function accommodations()
		{
	    	document.getElementById('countries').style.display='none';
	     	document.getElementById('salesoffices').style.display='none';
	     	document.getElementById('accommodations').style.display='block';
		}
	</script>
</head>
<body style="margin: 20px">


	<div id = "salesoffices" style = "display:none" >
	   <?php
			include_once('salesoffices/process_salesoffices.php');
		?>
	</div>

	<div id = "countries" style = "display:none" >
	   <?php
			include_once('countries/process_countries.php');
		?>
	</div>

	<div id = "accommodations" style = "display:none" >
	   <?php
			include_once('accommodations/process_accommodations.php');
		?>
	</div>

	<input type="button" value="Salesoffices" style="margin-right:30px" onclick="salesoffices()" />	

	<input type="button" value="Countries" style="margin-right:30px" onclick="countries()" />

	<input type="button" value="Accommodations" style="margin-right:30px" onclick="accommodations()" />	

</body>
</html>