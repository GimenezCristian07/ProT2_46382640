<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<body>
    <div class="container d-flex justify-content-center">
        <form>
            <div>
                <div class="row">
                    <div class="col">
                        <label for="exampleName1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="exampleLastName1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
                    </div>
                </div>
            </div>
            <div>
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" placeholder="Correo electrónico" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con terceros</div>
            </div>
            <div>
                <label for="exampleUser1" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="exampleUser1">
            </div>
            <div>
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="ingresar">
                <button type="submit" class="btn btn-success">Registrarse</button>
                <a href="<?php echo base_url('Ingresar') ?>" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </div>
</body>