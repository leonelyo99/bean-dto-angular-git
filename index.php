<?php
//configuracion de cors
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-API-KEY,Origin,X-Request-With,Content-type,Accept,Access-Control-Request-Method');
header('Access-Control-Allow-Methods: GET,POST');
header('Allow:GET,POST');

require 'vendor/autoload.php';
include 'models/Alumno.php';

$app = new Slim\App();

$dbhost = 'localhost';
$dbuser   = 'root';
$dbpassword = '';
$database = "clase12"; 

$db = new mysqli($dbhost,$dbuser,$dbpassword,$database);

$app->get('/alumno/{id}', function($request, $response, $args) use($db) {

    $sql="select * from alumnos where id = 1";
    $query = $db->query($sql);

    // var_dump($query->fetch_assoc());
    $misdatos = array();
    while ($datos = $query->fetch_assoc()) {
        $misdatos[] =  new AlumnoModel($datos["id"], $datos["nombre"]);
    }

    
    // return $args['id'];
    $result = array('status'=>'success','code'=>200,'data'=>$misdatos);
	
	echo json_encode($result);    

});
$app->run();
?>