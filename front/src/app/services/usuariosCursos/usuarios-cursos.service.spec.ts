import { TestBed } from '@angular/core/testing';

import { UsuariosCursosService } from './usuarios-cursos.service';

describe('UsuariosDeCursosService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: UsuariosCursosService = TestBed.get(UsuariosCursosService);
    expect(service).toBeTruthy();
  });
});
