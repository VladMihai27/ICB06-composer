
<?php
  /*  include('dbConn.php');
    $conn = openConn("icb0006_uf4_pr01");
    require_once 'vendor/autoload.php';

    $faker = Faker\Factory::create();

    for ($i=0; $i < 1001 ; $i++) { 
        $date = $faker -> dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null);
        $date =  $date -> format('Y-m-d');
        echo $date;
        
        echo "----->";

        $company = $faker -> Company;
        echo $company, "\n";
        echo "----->";
        
        $Qty = $faker -> biasedNumberBetween($min = 1000, $max = 100000, $function = 'sqrt');
        echo $Qty, "\n";
        echo "//+";

        $sql = "INSERT INTO orders (date, company, qty) VALUES ('$date','$company','$Qty')";
        if ($conn->query($sql)) {
            echo "Data correctly inserted";
        }else {
            echo "Something went wrong";
        }
    }
    


*/
    

?>


<a href="apiData.php">Api Data</a>




























