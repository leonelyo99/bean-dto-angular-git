import { Component, OnInit } from '@angular/core';
import { UsuariosCursosDto } from 'src/app/models/usuariosCursos';
import { UsuariosCursosService } from 'src/app/services/usuariosCursos/usuarios-cursos.service';

@Component({
  selector: 'app-usuarios-cursos',
  templateUrl: './usuarios-cursos.component.html',
  styleUrls: ['./usuarios-cursos.component.css']
})
export class UsuariosCursosComponent implements OnInit {

  public usuarios_cursos: UsuariosCursosDto[];

  constructor( private _usuarioService: UsuariosCursosService) {
    this._usuarioService.getUsuariosCursos().subscribe((res: any)=>{
      this.usuarios_cursos = res.data; 
      console.log("UsuariosCursos ",this.usuarios_cursos);  
    });
   }

  ngOnInit() {
  }

}
