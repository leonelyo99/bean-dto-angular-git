<?php
class UsuariosDeCursosDto{
    public $usuario;
    public $curso;
     
    public function __construct( $usuario, $curso) {
        $this->usuario = $usuario;
        $this->curso = $curso;
    }
}
?>