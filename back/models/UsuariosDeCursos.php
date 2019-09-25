<?php
class UsuariosDeCursosDto{
    public $id_usuario;
    public $usuario;
    public $id_curso;
    public $curso;
     
    public function __construct($id_usuario, $usuario, $id_curso, $curso) {
        $this->id_usuario = $id_usuario;
        $this->usuario = $usuario;
        $this->id_curso = $id_curso;
        $this->curso = $curso;
    }
}
?>