<?php



	$xml = simplexml_load_file("salesoffices/salesoffices.xml");


	if($xml){

	echo'<p style="font-size:25px;font-weight: bold">SalesOffice:</p>';
		
	echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">Code</th>
			        <th scope="col">name</th>
				    <th scope="col">address1</th>
				    <th scope="col">address2</th>
				    <th scope="col">street</th>
				    <th scope="col">zip</th>
				    <th scope="col">place</th>
				    <th scope="col">country</th>
				    <th scope="col">phone</th>
				    <th scope="col">fax</th>
				    <th scope="col">email</th>
				    <th scope="col">termsandconditions</th>
	    		</tr>
	  		</thead>
	  		<tbody>
	    		<tr>
			    	<td>'.$xml->code.'</td>
			        <td>'.$xml->name.'</td>
			        <td>'.$xml->address1.'</td>
			        <td>'.$xml->address2.'</td>
			        <td>'.$xml->street.'</td>
			        <td>'.$xml->zip.'</td>
			        <td>'.$xml->place.'</td>
			        <td>'.$xml->country.'</td>
			        <td>'.$xml->phone.'</td>
			        <td>'.$xml->fax.'</td>
			        <td>'.$xml->email.'</td>
			        <td>'.$xml->termsandconditions.'</td>
	    		</tr>
	   
	  		</tbody>
	    </table>';


		////////////////////////////////////////////////////

		//payments

		echo'<p style="font-size:25px;font-weight: bold">payments:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">mode</th>
			        <th scope="col">type</th>
				    <th scope="col">daysbefore</th>
				    <th scope="col">officeCode</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->payments->payment as $row)
				{
					echo'<tr>	
						<td>'.$row->mode.'</td>
						<td>'.$row->type.'</td>
						<td>'.$row->daysbefore.'</td>
						<td>'.$xml->code.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';

		////////////////////////////////////////////////////

		//bank

		echo'<p style="font-size:25px;font-weight: bold">bank:</p>';

		$row = $xml->bank;

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">name</th>
			        <th scope="col">BankCode</th>
				    <th scope="col">accountnumber</th>
				    <th scope="col">swift</th>
				    <th scope="col">iban</th>
				    <th scope="col">officeCode</th>
	    		</tr>
	  		</thead>
	  		<tbody>
	    		<tr>
			    	<td>'.$row->name.'</td>
			        <td>'.$row->bankcode.'</td>
			        <td>'.$row->accountnumber.'</td>
			        <td>'.$row->swift.'</td>
			        <td>'.$row->iban.'</td>
			        <td>'.$xml->code.'</td>
	    		</tr>
	   
	  		</tbody>
	    </table>';

	
	


		///////////////////////////////////////////////////

		//cancellationconditions

		echo'<p style="font-size:25px;font-weight: bold">cancellationconditions:</p>';

		echo'<table class="table table-bordered">
	 		<thead>
	    		<tr>
			        <th scope="col">daysbefore</th>
			        <th scope="col">percent</th>
				    <th scope="col">officeCode</th>
	    		</tr>
	  		</thead>
	  		<tbody>';
	    		

				foreach($xml->cancellationconditions->cancellationcondition as $row)
				{
					echo'<tr>	
						<td>'.$row->daysbefore.'</td>
						<td>'.$row->percent.'</td>
						<td>'.$xml->code.'</td>
                    </tr>';
				}
		   
	   
	  	    echo'</tbody>
	    </table>';

		

		
	}
?>

