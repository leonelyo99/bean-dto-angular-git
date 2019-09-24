<?php
class UnionBean{
    public $id_usuario;
    public $id_curso;
     
    public function __construct($id_usuario, $id_curso) {
        $this->id_usuario = $id_usuario;
        $this->id_curso = $id_curso;
    }
}
?>