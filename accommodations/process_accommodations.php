<?php


	$xml = simplexml_load_file("accommodations/accommodations.xml");


	if($xml){


 	$row = 	$xml->accommodation;

	echo'<p style="font-size:25px;font-weight: bold">Accommodations:</p>';
		
	echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">Code</th>
			        <th scope="col">name</th>
				    <th scope="col">country</th>
				    <th scope="col">region</th>
				    <th scope="col">place</th>
				    <th scope="col">zip</th>
				    <th scope="col">type</th>
				    <th scope="col">quality</th>
				    <th scope="col">details</th>
				    <th scope="col">brand</th>
				    <th scope="col">pax</th>
				    <th scope="col">sqm</th>
				    <th scope="col">floor</th>
				    <th scope="col">rooms</th>
				    <th scope="col">bedrooms</th>
				    <th scope="col">toilets</th>
				    <th scope="col">bathrooms</th>
	    		</tr>
	  		</thead>
	  		<tbody>
	    		<tr>
			    	<td>'.$row->code.'</td>
			        <td>'.$row->name.'</td>
			        <td>'.$row->country.'</td>
			        <td>'.$row->region.'</td>
			        <td>'.$row->place.'</td>
			        <td>'.$row->zip.'</td>
			        <td>'.$row->type.'</td>
			        <td>'.$row->quality.'</td>
			        <td>'.$row->details.'</td>
			        <td>'.$row->brand.'</td>
			        <td>'.$row->pax.'</td>
			        <td>'.$row->sqm.'</td>
			        <td>'.$row->floor.'</td>
			        <td>'.$row->rooms.'</td>
			        <td>'.$row->bedrooms.'</td>
			        <td>'.$row->toilets.'</td>
			        <td>'.$row->bathrooms.'</td>
	    		</tr>
	   
	  		</tbody>
	    </table>';


		////////////////////////////////////////////////////

		//geodata

		echo'<p style="font-size:25px;font-weight: bold">geodata:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">lat</th>
			        <th scope="col">lng</th>
				    <th scope="col">accommodation code</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->accommodation->geodata as $row)
				{
					echo'<tr>	
						<td>'.$row->lat.'</td>
						<td>'.$row->lng.'</td>
						<td>'.$xml->accommodation->code.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';

	////////////////////////////////////////////////////

	//attributes

		echo'<p style="font-size:25px;font-weight: bold">attributes:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">attribute</th>
				    <th scope="col">accommodation code</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->accommodation->attributes->attribute as $row)
				{
					echo'<tr>	
						<td>'.$row.'</td>
						<td>'.$xml->accommodation->code.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';

	//////////////////////////////////////////////////////////////////////	


	 //distances

		echo'<p style="font-size:25px;font-weight: bold">distances:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">type</th>
				    <th scope="col">value</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->accommodation->distances->distance as $row)
				{
					echo'<tr>	
						<td>'.$row->type.'</td>
						<td>'.$row->value.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';

	//////////////////////////////////////////////////////////////////////	

	 //themes

		echo'<p style="font-size:25px;font-weight: bold">themes:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">theme</th>
				    
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->accommodation->themes->theme as $row)
				{
					echo'<tr>	
						<td>'.$row.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';

	//////////////////////////////////////////////////////////////////////		
		
	
	 //pictures

		echo'<p style="font-size:25px;font-weight: bold">pictures:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">type</th>
				    <th scope="col">season</th>
				    <th scope="col">url</th>
				    <th scope="col">datetime</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->accommodation->pictures->picture as $row)
				{
					echo'<tr>	
						<td>'.$row->type.'</td>
						<td>'.$row->season.'</td>
						<td>'.$row->url.'</td>
						<td>'.$row->datetime.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';

	//////////////////////////////////////////////////////////////////////	


	 //rating

		echo'<p style="font-size:25px;font-weight: bold">rating:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">numberofreviews</th>
				    <th scope="col">numberofreviews</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->accommodation->rating as $row)
				{
					echo'<tr>	
						<td>'.$row->overallrating.'</td>
						<td>'.$row->numberofreviews.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';	

		
	}
?>