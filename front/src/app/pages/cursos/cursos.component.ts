import { Component, OnInit } from '@angular/core';
import { CursoService } from './../../services/curso/curso.service';
import { CursoBean } from '../../models/curso';

@Component({
  selector: 'app-cursos',
  templateUrl: './cursos.component.html',
  styleUrls: ['./cursos.component.css']
})
export class CursosComponent implements OnInit {
  
  public cursos: CursoBean[];

  constructor( private _cursoService: CursoService) {
    this._cursoService.getCursos().subscribe((res: any)=>{
      this.cursos = res.data; 
      console.log("Cursos ",this.cursos);  
    });
   }

  ngOnInit() {
  }

}
