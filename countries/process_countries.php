<?php



	$xml = simplexml_load_file("countries/countries.xml");


	if($xml){

	echo'<p style="font-size:25px;font-weight: bold">Country:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">Code</th>
			        <th scope="col">Name</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->country as $row)
				{
					echo'<tr>	
						<td>'.$row->code.'</td>
						<td>'.$row->name.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';


	// 	////////////////////////////////////////////////////

	//regions

	echo'<p style="font-size:25px;font-weight: bold">Regions:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">Code</th>
			        <th scope="col">Name</th>
			        <th scope="col">Country Code</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->country->regions->region as $row)
				{
					echo'<tr>	
						<td>'.$row->code.'</td>
						<td>'.$row->name.'</td>
						<td>'.$xml->country->code.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';


	// 	////////////////////////////////////////////////////

	//places

	echo'<p style="font-size:25px;font-weight: bold">Places:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">Code</th>
			        <th scope="col">Name</th>
			        <th scope="col">Region Code</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->country->regions->region->places->place as $row)
				{
					echo'<tr>	
						<td>'.$row->code.'</td>
						<td>'.$row->name.'</td>
						<td>'.$xml->country->regions->region->code.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';

	
	


	// 	///////////////////////////////////////////////////

	//sub places

	echo'<p style="font-size:25px;font-weight: bold">Sub Places:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">Code</th>
			        <th scope="col">Name</th>
			        <th scope="col">Place Code</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->country->regions->region->places->place->places->place as $row)
				{
					echo'<tr>	
						<td>'.$row->code.'</td>
						<td>'.$row->name.'</td>
						<td>'.$xml->country->regions->region->places->place->code.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';
/////////////////////////////////////////////////////////////
    // sub regions

	echo'<p style="font-size:25px;font-weight: bold">Sub Regions:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">Code</th>
			        <th scope="col">Name</th>
			        <th scope="col">Region Code</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		
				foreach($xml->country->regions->region->regions->region as $row)
				{
					echo'<tr>	
						<td>'.$row->code.'</td>
						<td>'.$row->name.'</td>
						<td>'.$xml->country->regions->region->code.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';


	// 	////////////////////////////////////////////////////
		

		
	}
?>

