<?php
      $servername = "localhost";
      $database = "covid_analytics";
      $username = "alicia";
      $password = "password";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database);

      // Check connection
      if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
      }

      echo "Connected successfully";
      
      $query = "SELECT * FROM datas";
      //mysql_select_db ("datas"); Comprobar si es lo mismo
	
	$result = mysqli_query($conn, $query);
     
	
	 if($result){
		while($row = mysqli_fetch_array($result)){
                
                  $query1 = "SELECT id FROM countries WHERE countriesAndTerritories = '".$row['countriesAndTerritories']."';";
                  $resul1t = mysqli_query($conn, $query1);
                  $coungtry_id = mysqli_fetch_array($resul1t)['id'];
                  $query1= "INSERT INTO entries(country_id,dateRep,day,month,year,cases,deaths,acumulative_number_for_14_days_of_COVID) VALUES (".$coungtry_id.",'".$row['dateRep']."',".$row['day']." , ".$row['month'].", ".$row['year'].", ".$row['cases'].",".$row['deaths'].",".$row['acumulative_number_for_14_days_of_COVID'].");";                        
                           
                  mysqli_query($conn,$query1);
            }
	} 	
                  mysqli_close($conn);
?>
