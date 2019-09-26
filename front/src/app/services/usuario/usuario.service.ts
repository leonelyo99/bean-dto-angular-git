import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class UsuarioService {

  constructor( private http: HttpClient ) { }

  getUsuarios(){
    let url = `${environment.apiUrl}/alumnos`;
    return this.http.get(url);
  }

}
