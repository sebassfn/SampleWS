<?php
    //require_once "PeopleAPI.php";    
    //$peopleAPI = new PeopleAPI();
    //$peopleAPI->API();
    $LOCALHOST = 'OPENSHIFT_MYSQL_DB_HOST:OPENSHIFT_MYSQL_DB_PORT';
	   $USER = 'adminiB1tdCP';
	   $PASSWORD = 'JzX6VPX4nfgr';
	   $DATABASE = 'listaalumnos';


    try{
        //conexión a base de datos
        $mysqli = new mysqli($LOCALHOST, $USER, $PASSWORD, $DATABASE);
    }catch (mysqli_sql_exception $e){
        //Si no se puede realizar la conexión
        http_response_code(500);
        exit;
    }     
    
    $result = $mysqli->query("SELECT * FROM people;");
    $people = $result->fetch_all(MYSQLI_ASSOC);
    $result->close(); 
    var_dump($people);
?>

<!DOCTYPE html>
<html>
	<body>
		<?php
		echo "$LOCALHOST";

		?>
	</body>
</html>
        
