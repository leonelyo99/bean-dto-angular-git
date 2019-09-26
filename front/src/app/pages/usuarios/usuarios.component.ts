import { Component, OnInit } from '@angular/core';
import { UsuarioService } from './../../services/usuario/usuario.service';
import { UsuarioBean } from '../../models/usuario';

@Component({
  selector: 'app-usuarios',
  templateUrl: './usuarios.component.html',
  styleUrls: ['./usuarios.component.css']
})
export class UsuariosComponent implements OnInit {

  public usuarios: UsuarioBean[];

  constructor( private _usuarioService: UsuarioService) {
    this._usuarioService.getUsuarios().subscribe((res: any)=>{
      this.usuarios = res.data; 
      console.log("Usuarios ",this.usuarios);  
    });
   }

  ngOnInit() {
  }

}
