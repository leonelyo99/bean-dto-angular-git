import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UsuariosCursosComponent } from './usuarios-cursos.component';

describe('UsuariosCursosComponent', () => {
  let component: UsuariosCursosComponent;
  let fixture: ComponentFixture<UsuariosCursosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UsuariosCursosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UsuariosCursosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
