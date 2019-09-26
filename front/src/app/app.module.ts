import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule,HttpClientJsonpModule } from '@angular/common/http';

import { AppComponent } from './app.component';

//componentes
import { UsuariosComponent } from './pages/usuarios/usuarios.component';
import { CursosComponent } from './pages/cursos/cursos.component';
import { UsuariosCursosComponent } from './pages/usuarios-cursos/usuarios-cursos.component';

//servicios
import { CursoService } from './services/curso/curso.service';
import { UsuariosCursosService } from './services/usuariosCursos/usuarios-cursos.service';
import { UsuarioService } from './services/usuario/usuario.service';

@NgModule({
  declarations: [
    AppComponent,
    UsuariosComponent,
    CursosComponent,
    UsuariosCursosComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    HttpClientJsonpModule
  ],
  providers: [
    CursoService,
    UsuariosCursosService,
    UsuarioService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
