import { TestBed } from '@angular/core/testing';

import { UsuariosDeCursosService } from './usuarios-de-cursos.service';

describe('UsuariosDeCursosService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: UsuariosDeCursosService = TestBed.get(UsuariosDeCursosService);
    expect(service).toBeTruthy();
  });
});
