<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electrónico"
      aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico a terceros</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="recordar">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordar</label>
  </div>
  <div class="ingresar">
    <button type="submit" class="btn btn-success">Ingresar</button>
    <a href="<?php echo base_url('principal') ?>" class="btn btn-danger">Cancelar</a>
  </div>
  <div class="linkregistro">
    <span>¿Aun no se registró? <a href="<?php echo base_url('Registrarse') ?>">Registrarse aquí</a></span>
  </div>
</form>