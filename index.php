<?php
//configuracion de cors
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-API-KEY,Origin,X-Request-With,Content-type,Accept,Access-Control-Request-Method');
header('Access-Control-Allow-Methods: GET,POST');
header('Allow:GET,POST');

require 'vendor/autoload.php';
require 'models/Usuario.php';
require 'models/Curso.php';
require 'models/Union.php';
require 'models/AlumnosDeCursos.php';

$app = new Slim\App();

$dbhost = 'localhost';
$dbuser   = 'root';
$dbpassword = '';
$database = "final"; 

$db = new mysqli($dbhost,$dbuser,$dbpassword,$database);

//================================
//alumno por id
//================================
$app->get('/alumno/{id}', function($request, $response, $args) use($db) {

    //peticion sql
    $sql="select * from usuarios where id = $args[id]";
    $query = $db->query($sql);

    //guardado de datos
    $alumnos = array();
    while ($datos = $query->fetch_assoc()) {
        $alumnos[] =  new UsuarioModelBean($datos["id"], $datos["nombre"]);
    }

    // return ;
    $result = array('status'=>'success','code'=>200,'data'=>$alumnos);	
	echo json_encode($result);    
});

//================================
//alumnos
//================================
$app->get('/alumnos', function($request, $response, $args) use($db) {

    //peticion sql
    $sql="select * from usuarios";
    $query = $db->query($sql);

    //guardado de datos
    $alumnos = array();
    while ($datos = $query->fetch_assoc()) {
        $alumnos[] =  new UsuarioModelBean($datos["id"], $datos["nombre"]);
    }

    // return ;
    $result = array('status'=>'success','code'=>200,'data'=>$alumnos);	
	echo json_encode($result);    
});

//================================
//curso por id
//================================
$app->get('/curso/{id}', function($request, $response, $args) use($db) {

    //peticion sql
    $sql="select * from cursos where id = $args[id]";
    $query = $db->query($sql);

    //guardado de datos
    $cursos = array();
    while ($datos = $query->fetch_assoc()) {
        $cursos[] =  new CursoModelBean($datos["id"], $datos["nombre"]);
    }

    // return ;
    $result = array('status'=>'success','code'=>200,'data'=>$cursos);	
	echo json_encode($result);    
});

//================================
//cursos
//================================
$app->get('/cursos', function($request, $response, $args) use($db) {

    //peticion sql
    $sql="select * from cursos";
    $query = $db->query($sql);

    //guardado de datos
    $cursos = array();
    while ($datos = $query->fetch_assoc()) {
        $cursos[] =  new CursoModelBean($datos["id"], $datos["nombre"]);
    }

    // return ;
    $result = array('status'=>'success','code'=>200,'data'=>$cursos);	
	echo json_encode($result);    
});

//================================
//alumnos de cada cursos
//================================
$app->get('/cursos/alumnos', function($request, $response, $args) use($db) {

    //peticion sql
    // $sql  = "SELECT  usuarios.id as usuario_id,usuarios.nombre as usuario, cursos.nombre as curso, cursos.id as curso_id from usuarios ";
    // $sql .= "LEFT JOIN usuariosdecursos on usuarios.id = usuariosdecursos.id_usuario ";
    // $sql .= "LEFT JOIN  cursos on cursos.id = usuariosdecursos.id_curso; ";
    
    $sqlUsuarios = "select * from usuarios";
    $sqlCursos = "select * from cursos";
    $sqlUnion = "select * from usuariosdecursos";
    
    $queryUsuarios = $db->query($sqlUsuarios);
    $queryCursos = $db->query($sqlCursos);
    $queryUnion = $db->query($sqlUnion);

    //guardado de datos
    $cursos = array();
    $usuarios = array();
    $uniones = array();
    $alumnosCursos = array();
    
    while ($usuario = $queryUsuarios->fetch_assoc()) {
        $usuarios[] =  new UsuarioModelBean($usuario["id"], $usuario["nombre"]);
    }
    while ($curso = $queryCursos->fetch_assoc()) {
        $cursos[] =  new CursoModelBean($curso["id"], $curso["nombre"]);
    }
    while ($dato = $queryUnion->fetch_assoc()) {
        $uniones[] =  new UnionBean($dato["id_usuario"], $dato["id_curso"]);;
    }

    //armando el DTO apartir de los bean
    foreach($usuarios as $usuario){
        foreach ($uniones as $union) {
            if($usuario->id === $union->id_usuario){
                $alumnosCursos[] = new UsuariosDeCursosModelDto($usuario->id, $usuario->nombre, $union->id_curso, $cursos[$union->id_curso - 1]->nombre);
            }
        }
    }
    foreach($usuarios as $usuario){
        if($alumnosCursos[$usuario->id - 1]->usuario != $usuario->nombre){
            $alumnosCursos[] = new UsuariosDeCursosModelDto($usuario->id, $usuario->nombre, null, null);
        }
    }
    
    // respuesta
    $result = array('status'=>'success','code'=>200,'data'=>$alumnosCursos);	
    echo json_encode($result);    
});
$app->run();
?>