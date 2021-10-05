<?php include('includes/funciones.php') ?>
<link rel="icon" type="image/x-icon" href="assets/img/cerebro.ico">
<?php include('includes/header.php') ?>
<?php include('includes/efecto_inicio.php') ?>
<?php include('pqrs.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <?php if (isset($_SESSION['alertapeticion'])) { ?>
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                    <strong>Muchas Gracias! </strong><?php echo $_SESSION['alertapeticion']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();
            } ?>
            <?php if (isset($_SESSION['errorpeticion'])) { ?>
                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    <strong>Advertencia! </strong><?php echo $_SESSION['errorpeticion']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();
            } ?>
        </div>
    </div>
</div>
<section id="inicio" class="container mt-4">
    <h3 class="mb-5 titulo">Información General sedes</h3>
    <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#cedros" type="button" role="tab" aria-controls="home" aria-selected="true">Cedros</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#restrepo" type="button" role="tab" aria-controls="profile" aria-selected="false">Restrepo</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#consorcio" type="button" role="tab" aria-controls="contact" aria-selected="false">Consorcio</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#clinica" type="button" role="tab" aria-controls="contact" aria-selected="false">Clinica Emnauel</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="cedros" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-home"></i> Dirección
                    <p>Cra. 22 #142-63</p>

                    <i class="fas fa-envelope mt-5"></i> Correo
                    <p>inde.emanuel@gmail.com</p>

                    <button type="button" class="btn btn-primary mt-4 mb-5" data-bs-toggle="modal" data-bs-target="#Modaluno">
                        ¿Como llegar?
                    </button>
                </div>
                <div class="col-md-4 mb-5">
                    <i class="far fa-address-book"></i> Contactos
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> No Disponible</li>
                        <li><i class="fab fa-whatsapp"></i> 3173642189</li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.2553655785737!2d-74.05154480594399!3d4.725647591702875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8541dd9f711d%3A0x5744df0078adb633!2zQ3JhLiAyMiAjMTQyLTYzLCBVc2FxdcOpbiwgQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1627068198976!5m2!1ses!2sco" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" class="border border-dark border-2 mt-4 rounded-2"></iframe>
                </div>
                <div class="col-md-4">
                    <i class="far fa-clock"></i> Horarios
                    <p class="mt-2">Lunes ..................... 7am - 6pm</p>
                    <p>Martes .................... 7am - 6pm</p>
                    <p>Miercoles ................. 7am - 6pm</p>
                    <p>Jueves .................... 7am - 6pm</p>
                    <p>Viernes ................... 7am - 6pm</p>
                    <p>Sabado .................... Cerrado</p>
                    <p>Domingo ................... Cerrado</p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="restrepo" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
                <div class="col-md-4 ml-2">
                    <i class="fas fa-home"></i> Dirección
                    <p>Cra. 17 #16 -31 Sur</p>

                    <i class="fas fa-envelope mt-5"></i> Correo
                    <p>inde.emanuel@gmail.com</p>

                    <button type="button" class="btn btn-primary mt-4 mb-5" data-bs-toggle="modal" data-bs-target="#Modaldos">
                        ¿como llegar?
                    </button>
                </div>
                <div class="col-md-4 mb-5">
                    <i class="far fa-address-book"></i> Contactos
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> (601)7443584</li>
                        <li><i class="fab fa-whatsapp"></i> 3186085076</li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.048341935111!2d-74.1019773856865!3d4.585345393924863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99034d57cee7%3A0x1a34473cb8b99241!2sEmmanuel%20IPS%20-%20Consulta%20Externa!5e0!3m2!1ses!2sco!4v1627071144895!5m2!1ses!2sco" width="250" height="250" allowfullscreen="" loading="lazy" class="mt-4 border border-dark border-2 rounded-2"></iframe>
                </div>
                <div class="col-md-4">
                    <i class="far fa-clock"></i> Horarios
                    <p class="mt-2">Lunes ..................... 7am - 6pm</p>
                    <p>Martes .................... 7am - 6pm</p>
                    <p>Miercoles ................. 7am - 6pm</p>
                    <p>Jueves .................... 7am - 6pm</p>
                    <p>Viernes ................... 7am - 6pm</p>
                    <p>Sabado .................... Cerrado</p>
                    <p>Domingo ................... Cerrado</p>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="consorcio" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
                <div class="col-md-4 ml-2">
                    <i class="fas fa-home"></i> Dirección
                    <p>Cl.136 #52a - 46</p>

                    <i class="fas fa-envelope mt-5"></i> Correo
                    <p>inde.emanuel@gmail.com</p>

                    <button type="button" class="btn btn-primary mt-4 mb-5" data-bs-toggle="modal" data-bs-target="#Modaltres">
                        ¿Como llegar?
                    </button>
                </div>
                <div class="col-md-4 mb-5">
                    <i class="far fa-address-book"></i> Contactos
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> (601)4431850</li>
                        <li><i class="fab fa-whatsapp"></i> No disponible</li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.2677025385974!2d-74.05893688568632!3d4.723496642775782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f853efed8b501%3A0xde37b9c6092016bf!2zQ2wuIDEzNiAjIzUyYS00NiwgQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1627071580358!5m2!1ses!2sco" width="250" height="250" allowfullscreen="" loading="lazy" class="mt-4 border border-dark border-2 rounded-2"></iframe>
                </div>
                <div class="col-md-4">
                    <i class="far fa-clock"></i> Horarios
                    <p class="mt-2">Lunes ..................... 7am - 6pm</p>
                    <p>Martes .................... 7am - 6pm</p>
                    <p>Miercoles ................. 7am - 6pm</p>
                    <p>Jueves .................... 7am - 6pm</p>
                    <p>Viernes ................... 7am - 6pm</p>
                    <p>Sabado .................... Cerrado</p>
                    <p>Domingo ................... Cerrado</p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="clinica" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
                <div class="col-md-4 ml-2">
                    <i class="fas fa-home"></i> Dirección
                    <p>Calle 126A #7-49</p>

                    <i class="fas fa-envelope mt-5"></i> Correo
                    <p>inde.emanuel@gmail.com</p>

                    <button type="button" class="btn btn-primary mt-4 mb-5" data-bs-toggle="modal" data-bs-target="#Modalcuatro">
                        ¿Como llegar?
                    </button>
                </div>
                <div class="col-md-4 mb-5">
                    <i class="far fa-address-book"></i> Contactos
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> (601)4431850</li>
                        <li><i class="fab fa-whatsapp"></i> No Disponible</li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.391462485491!2d-74.0308773548322!3d4.701864773570417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f91a6414fbb39%3A0xe79cb9393e8b8759!2sCl%C3%ADnica%20Emmanuel!5e0!3m2!1ses!2sco!4v1628536101158!5m2!1ses!2sco" width="250" height="250" allowfullscreen="" loading="lazy" class="border border-dark border-2"></iframe>
                </div>
                <div class="col-md-4">
                    <i class="far fa-clock"></i> Horarios
                    <p class="mt-2">24 Horas / 7 Días </p>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<!--Modal cedros-->
<div class="modal fade" id="Modaluno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubicación tiempo real</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h5><i class="fas fa-street-view"></i> Street View y 360º</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1627061716608!6m8!1m7!1sy2j_w48s6s3JMzBPhm8ScQ!2m2!1d4.725537703382533!2d-74.04897380278268!3f279.5595974657044!4f-7.093092537869595!5f0.7820865974627469" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="mt-4"></iframe>
                    </div>
                    <div class="col-md-6 text-center">
                        <h5><i class="fas fa-map-marked"></i> Satelite</h5>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.2553655785737!2d-74.05154480594399!3d4.725647591702875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8541dd9f711d%3A0x5744df0078adb633!2zQ3JhLiAyMiAjMTQyLTYzLCBVc2FxdcOpbiwgQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1627068198976!5m2!1ses!2sco" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="mt-4"></iframe>
                    </div>
                    <a href="https://www.google.com/maps/dir//Cra.+22+%23142-63,+Usaquén,+Bogotá/@4.7255377,-74.0489738,15z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8e3f8541dd9f711d:0x5744df0078adb633!2m2!1d-74.0491753!2d4.7255376!3e0?hl=es" class="link-info mt-5" target="_blank">Encuentra tu ruta ideal para venir a conocernos,
                        Te esperamos!</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!--Modal Restrepo-->
<div class="modal fade" id="Modaldos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubicación tiempo real</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h5><i class="fas fa-street-view"></i> Street View y 360º</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1627071194775!6m8!1m7!1sxluDWBRiW3p6lO5VFyqvvg!2m2!1d4.58539089300486!2d-74.09972724211038!3f318.0345819021415!4f-1.3772981938457747!5f0.4000000000000002" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-6 text-center">
                        <h5><i class="fas fa-map-marked"></i> Satelite</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.048341935111!2d-74.1019773856865!3d4.585345393924863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99034d57cee7%3A0x1a34473cb8b99241!2sEmmanuel%20IPS%20-%20Consulta%20Externa!5e0!3m2!1ses!2sco!4v1627071144895!5m2!1ses!2sco" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <a href="https://www.google.com/maps/dir//Emmanuel+IPS+-+Consulta+Externa,+Cra.+17+%23%2316+-31+Sur,+Bogotá/@4.5853909,-74.0997272,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8e3f99034d57cee7:0x1a34473cb8b99241!2m2!1d-74.0997282!2d4.5853596!3e0?hl=es" class="link-info mt-5" target="_blank">Encuentra tu ruta ideal para venir a conocernos,
                        Te esperamos!</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal Consorcio-->
<div class="modal fade" id="Modaltres" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubicación tiempo real</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h5><i class="fas fa-map-marked"></i> Satelite</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.2677025385974!2d-74.05893688568632!3d4.723496642775782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f853efed8b501%3A0xde37b9c6092016bf!2zQ2wuIDEzNiAjIzUyYS00NiwgQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1627071580358!5m2!1ses!2sco" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-6 text-center">
                        <h5><i class="fas fa-street-view"></i> Street View y 360º</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1627071650666!6m8!1m7!1sujhLWlay87GaLKGQu7ff5g!2m2!1d4.723339650150806!2d-74.05677996686909!3f21.530012909343547!4f-10.034332504645334!5f0.4000000000000002" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <a href="https://www.google.com/maps/dir//Cl.+136+%23%2352a-46,+Bogotá/@4.7233397,-74.05678,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8e3f853efed8b501:0xde37b9c6092016bf!2m2!1d-74.0567482!2d4.7234913!3e0?hl=es" class="link-info mt-5" target="_blank">Encuentra tu ruta ideal para venir a
                        conocernos,
                        Te esperamos!</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal Clinica-->
<div class="modal fade" id="Modalcuatro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubicación tiempo real</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h5><i class="fas fa-map-marked"></i> Satelite</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.391462485491!2d-74.0308773548322!3d4.701864773570417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f91a6414fbb39%3A0xe79cb9393e8b8759!2sCl%C3%ADnica%20Emmanuel!5e0!3m2!1ses!2sco!4v1628536101158!5m2!1ses!2sco" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-6 text-center">
                        <h5><i class="fas fa-street-view"></i> Street View y 360º</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1628536037995!6m8!1m7!1szfii9ZPdm01VRcThZBAL_A!2m2!1d4.701511913373891!2d-74.02924657175116!3f214.9396942327706!4f20.29943835813272!5f0.7820865974627469" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <a href="https://www.google.com/maps/dir//Clínica+Emmanuel,+Cl.+126a+%23%237-49,+Bogotá/@4.7018648,-74.0308774,17z/data=!4m16!1m6!3m5!1s0x8e3f91a6414fbb39:0xe79cb9393e8b8759!2sClínica+Emmanuel!8m2!3d4.701343!4d-74.0292283!4m8!1m0!1m5!1m1!1s0x8e3f91a6414fbb39:0xe79cb9393e8b8759!2m2!1d-74.0292283!2d4.701343!3e3?hl=es" class="link-info mt-5" target="_blank">Encuentra tu ruta ideal para venir a
                        conocernos,
                        Te esperamos!</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5 mb-5 gris p-5 text-center">
    <h2>Llena el Formulario o llamanos a la linea de atención &nbsp;&nbsp;&nbsp;&nbsp; <i class=" fas fa-mobile-alt"></i> 7433693 - 4431890</h2>
</div>

<section class="mt-5">
    <div class="container">
        <h3 class="mb-3">Formulario de contacto</h3>
        <form class="needs-validation" id="formulario" action="correos.php" method="POST" enctype="multipart/form-data" novalidate>
            <div class="form-group mb-4">
                <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Tipo de usuario</label>
                <select class="form-select form-select-sm wow animate__fadeInDown border border-4" aria-label="Default select example wow animate__fadeInLeftBig" name="usuario" id="usuario" required>
                    <option selected disable value="">Selecciona</option>
                    <option value="paciente">Paciente </option>
                    <option value="acudiente">Acudiente</option>
                </select>
                <div class="invalid-feedback">
                    Selecciona un tipo de usuario...!
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h4>Datos de Solicitud</h4>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Nombres*</label>
                        <input class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" id="namep" name="namep" type="text" data-validation="alphanumeric" placeholder="ingresa los nombres" id="inputSmall" required>
                        <div class="invalid-feedback">
                            Porfavor ingresa los nombres
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Apellidos*</label>
                        <input class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" id="lastnamep" name="lastnamep" type="text" placeholder="ingresa los apellidos" id="inputSmall" required>
                        <div class="invalid-feedback">
                            Porfavor ingresa los apellidos
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Tipo de Identificación*</label>
                        <select class="form-select form-select-sm wow animate__fadeInDown border border-4" aria-label="Default select example wow animate__fadeInLeftBig" id="tipoid" name="tipoid" required>
                            <option selected disable value="">Selecciona</option>
                            <option value="tarjeta de identidad">Tarjeta de Identidad </option>
                            <option value="cedula">Cedula</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecciona...!
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">N.identificación*</label>
                        <input class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" id="cedula" name="cedula" type="text" placeholder="ingresa el numero de identificación" id="inputSmall" required>
                        <div class="invalid-feedback">
                            Porfavor ingresa el numero de identificacion
                        </div>
                    </div>
                    <div id="datos_paciente" class="mb-5">
                        <hr class="border-bottom border-3 border-4">
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Nombres del paciente*</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" id="namepa" name="namepa" type="text" data-validation="alphanumeric" placeholder="ingresa los nombres" id="inputSmall" required>
                            <div class="invalid-feedback">
                                Porfavor ingresa los nombres
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Apellidos del paciente*</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" id="apellidopa" name="apellidopa" type="text" data-validation="alphanumeric" placeholder="ingresa los nombres" id="inputSmall" required>
                            <div class="invalid-feedback">
                                Porfavor ingresa los apellidos
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Tipo de Identificación paciente*</label>
                            <select class="form-select form-select-sm wow animate__fadeInDown border border-4" aria-label="Default select example wow animate__fadeInLeftBig" id="tipoidpa" name="tipoidpa" required>
                                <option selected disable value="">Selecciona</option>
                                <option value="tarjeta de identidad">Tarjeta de Identidad </option>
                                <option value="cedula">Cedula</option>
                            </select>
                            <div class="invalid-feedback">
                                Selecciona...!
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">N.identificación paciente*</label>
                            <input class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" id="cedulapaciente" name="cedulapaciente" type="text" placeholder="ingresa el numero de identificación" id="inputSmall" required>
                            <div class="invalid-feedback">
                                Porfavor ingresa el numero de identificacion
                            </div>
                        </div>
                    </div>

                    <?php if (isset($_SESSION['alerta'])) { ?>
                        <div id="aviso" class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                            <strong>Muchas gracias! </strong><?= $_SESSION['alerta']; ?> .
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php session_unset();
                    } ?>
                    <?php if (isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                            <strong>Advertencia</strong><?= $_SESSION['error']; ?> .
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php session_unset();
                    } ?>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Correo*</label>
                        <input class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" name="email" type="email" placeholder="ingresa tu correo" id="inputSmall" required>
                        <div class="invalid-feedback">
                            Porfavor ingresa el correo
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Telefono*</label>
                        <input id="telefono" class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" name="phone" type="text" placeholder="ingresa tu numero de celular" id="inputSmall" required>
                        <div class="invalid-feedback">
                            Porfavor ingresa el numero de telefono
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-sm wow animate__fadeInDown" for="inputSmall">Eps*</label>
                        <input class="form-control form-control-sm wow animate__fadeInLeftBig border border-4" name="eps" type="text" placeholder="ingresa tu eps" id="inputSmall" required>
                        <div class="invalid-feedback">
                            Porfavor ingresa tu eps
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea" class="col-form-label-sm wow animate__fadeInDown">Solicitud*</label>
                        <textarea class="form-control form-control-sm mb-3 wow animate__fadeInLeftBig border border-4" name="textarea" id="exampleTextarea" placeholder="Ingresa tu solicitud de manera clara..." rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Porfavor ingresa tu solicitud
                        </div>
                    </div>
                    <button type="submit" id="enviar" class="btn btn-success mb-5 wow animate__wobble" name="form_contact">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</section>

<?php include('includes/footer.php') ?>