<?php include('includes/funciones.php') ?>
<link rel="icon" type="image/x-icon" href="assets/img/cerebro.ico">
<?php include('includes/header.php') ?>
<?php include('includes/efecto_inicio.php') ?>
<?php include('pqrs.php') ?>

<div class="wave-container">
    <h3 class="text-center mb-5 mt-5 titulo text-white">¿Porque Nosotros?</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/Imagen7.jpg" class="img-fluid rounded" alt="bienvenido">
            </div>
            <div class="col-md-6">
                <p class="mb-4 text-center">
                    Nos enfocamos en que la naturaleza del ser humano es un compendio de múltiples componentes necesarios
                    para su normal funcionamiento y desarrollo, así como presenta características de recursividad en la medida que el proceso
                    que se brinda no sigue una secuencia, si no que por el contrario tiene la posibilidad de movilizarse en diferentes direcciones, trabajando según las necesidades que el paciente presente.
                </p>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#6DADF7" fill-opacity="1" d="M0,32L60,69.3C120,107,240,181,360,224C480,267,600,277,720,234.7C840,192,960,96,1080,64C1200,32,1320,64,1380,80L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
</svg>
<section class="container-fluid">
    <div class="container valores p-4">
        <h3 class="text-center mb-4 titulo">Los Valores que nos caracterizan</h3>
        <div class="row">
            <div class="col">
                <div id="v1" class="card mt-5" style="max-width: 20rem;">
                    <div class="card-header">Etica</div>
                    <div class="card-body">
                        <p class="card-text">Actuamos con moralidad y sentido, promovemos acciones justas y equivalentes en nuestra entidad</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="v2" class="card mt-4" style="max-width: 20rem;">
                    <div class="card-header">Honestidad</div>
                    <div class="card-body">
                        <p class="card-text">Nos caracterizamos por crear un ambiente trasparente y tranquilo con credibilidad y respeto</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="v3" class="card mt-5" style="max-width: 20rem;">
                    <div class="card-header">Trabajo en equipo</div>
                    <div class="card-body">
                        <p class="card-text">Nos encanta el aprendizaje mutuo en el cual además de ser un grupo de trabajo somos una gran familia</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="v4" class="card mt-4" style="max-width: 20rem;">
                    <div class="card-header">Compromiso</div>
                    <div class="card-body">
                        <p class="card-text">La entidad se identifica por su gran compromiso con los pacientes cumpliendo a cabalidad con cada una de sus expectativas</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="v5" class="card mt-5" style="max-width: 20rem;">
                    <div class="card-header">Responsabilidad</div>
                    <div class="card-body">
                        <p class="card-text">El valor más importante en nuestro día a día el cual nos permite dar una excelente experiencia a nuestros pacientes haciendolos sentir como en casa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6DADF7" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,74.7C480,96,600,160,720,202.7C840,245,960,267,1080,240C1200,213,1320,139,1380,101.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
<div class="wave-container">
    <div class="container mb-3">
        <h2 class="text-center mb-5 titulo text-white">Envianos tu perfil</h2>
        <div class="row">
            <form class="needs-validation" action="correos.php" method="POST" enctype="multipart/form-data" novalidate>
                <section class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown wow animate__fadeInDown" for="inputSmall">Nombre y Apellido</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig" name="nameandp" type="text" placeholder="ingresa tus nombres y apellidos" id="inputSmall" required>
                            <div class="invalid-feedback">
                                Porfavor ingresa tus nombres y apellidos
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Correo</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig" name="email" type="email" placeholder="ingresa tu correo" id="inputSmall" required>
                            <div class="invalid-feedback">
                                Porfavor ingresa tu correo
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Numero de celular</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig" name="celular" type="text" placeholder="ingresa tu numero de celular" id="inputSmall" required>
                            <div class="invalid-feedback">
                                Porfavor ingresa tu numero de celular
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Profesion</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig" name="profesion" type="text" placeholder="ingresa tu profesion" id="inputSmall" required>
                            <div class="invalid-feedback">
                                Porfavor ingresa tu profesion
                            </div>
                        </div>
                        <?php if (isset($_SESSION['alerta'])) { ?>
                            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                <strong>Muchas gracias! </strong><?= $_SESSION['alerta']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php session_unset();
                        } ?>
                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                                <strong>Advertencia! </strong><?= $_SESSION['error']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php session_unset();
                        } ?>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Ciudad de residencia</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig" name="ciudad" type="text" placeholder="ingresa tu ciudad" id="inputSmall" required>
                            <div class="invalid-feedback">
                                Porfavor ingresa tu ciudad
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Nivel Academico</label>
                            <select class="form-select form-select-sm wow animate__fadeInDown" aria-label="Default select example wow animate__fadeInLeftBig" name="academico" required>
                                <option selected disable value="">Selecciona un nivel</option>
                                <option value="Bachillerato">Bachillerato</option>
                                <option value="Tecnico/Tecnologo">Tecnico/Tecnologo</option>
                                <option value="Pregrado" name="pregrado">Pregrado</option>
                                <option value="Maestria" name="maestria">Maestria</option>
                            </select>
                            <div class="invalid-feedback">
                                Selecciona...!
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Tipo de Postulación</label>
                            <select class="form-select form-select-sm wow animate__fadeInDown" aria-label="Default select example wow animate__fadeInLeftBig" name="puesto" required>
                                <option selected disable value="">Selecciona</option>
                                <option value="Oferta Laboral">Oferta Laboral</option>
                                <option value="Practicante Universitario">Practicante Universitario</option>
                                <option value="Aprendiz Sena">Aprendiz Sena</option>
                            </select>
                            <div class="invalid-feedback">
                                Selecciona...!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formFile" class="form-label mt-4 col-form-label-sm wow animate__fadeInDown">Adjunta tu hoja de Vida PDF</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig" type="file" id="formFile" name="archivo" required>
                            <div class="invalid-feedback">
                                Porfavor Selecciona un archivo PDF
                            </div>
                            <div id="errorpdf"></div>
                        </div>
                        <button type="submit" class="btn btn-success mt-5 mb-5" name="btn-postulacion">Enviar</button>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>