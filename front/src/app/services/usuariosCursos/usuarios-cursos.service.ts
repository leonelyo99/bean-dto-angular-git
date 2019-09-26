import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class UsuariosCursosService {

  constructor( private http: HttpClient ) { }

  getUsuariosCursos(){
    let url = `${environment.apiUrl}/cursos/alumnos`;
    return this.http.get(url);
  }
}
