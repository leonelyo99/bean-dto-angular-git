export class UsuariosDeCursosDto {

    id_usuario: number;
    usuario: string;
    id_curso: number;
    curso: string;

    constructor(id_usuario: number, usuario: string, id_curso: number, curso: string ) {
        this.id_usuario = id_usuario;
        this.usuario = usuario;
        this.id_curso = id_curso;
        this.curso = curso;
    }
}