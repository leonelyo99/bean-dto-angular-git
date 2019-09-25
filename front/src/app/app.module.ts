import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { UsuariosComponent } from './pages/usuarios/usuarios.component';
import { CursosComponent } from './pages/cursos/cursos.component';
import { UsuariosCursosComponent } from './pages/usuarios-cursos/usuarios-cursos.component';

@NgModule({
  declarations: [
    AppComponent,
    UsuariosComponent,
    CursosComponent,
    UsuariosCursosComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
