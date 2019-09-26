import { UsuarioBean } from './usuario';
import { CursoBean } from './curso';

export class UsuariosCursosDto {

    usuario: UsuarioBean;
    curso: CursoBean;

    constructor( usuario: UsuarioBean, curso: CursoBean ) {
        this.usuario = usuario;
        this.curso = curso;
    }
}