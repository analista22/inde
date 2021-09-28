<div class="modal fade" id="Modalpqrs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Dejanos tus comentarios</h5>
                <button id="abrir" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body fondo">
                <form class="needs-validation" action="correos.php" method="POST" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="inputSmall">Nombres*</label>
                                <input class="form-control form-control-sm" name="nombres" type="text" data-validation="alphanumeric" placeholder="ingresa tus nombres" id="inputSmall" required>
                                <div class="invalid-feedback">
                                    Porfavor ingresa tus nombres
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="inputSmall">Apellidos*</label>
                                <input class="form-control form-control-sm" name="apellidos" type="text" data-validation="alphanumeric" placeholder="ingresa tus apellidos" id="inputSmall" required>
                                <div class="invalid-feedback">
                                    Porfavor ingresa tus apellidos
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="inputSmall">Telefono*</label>
                                <input class="form-control form-control-sm" name="telefono" type="text" data-validation="alphanumeric" placeholder="ingresa tu telefono" id="inputSmall" required>
                                <div class="invalid-feedback">
                                    Porfavor ingresa tu telefono
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="inputSmall">Correo*</label>
                                <input class="form-control form-control-sm" name="correo" type="email" data-validation="alphanumeric" placeholder="ingresa tu correo" id="inputSmall" required>
                                <div class="invalid-feedback">
                                    Porfavor ingresa tu correo
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-sm" for="inputSmall">Tipo de Peticion</label>
                                <select class="form-select form-select-sm" aria-label="Default select example" name="tipop" required>
                                    <option selected disable value="">Selecciona...</option>
                                    <option value="Peticion">Peticion</option>
                                    <option value="Queja">Queja</option>
                                    <option value="Reclamo">Reclamo</option>
                                    <option value="Sugerencia">Sugerencias</option>
                                    <option value="Felicitacion">Felicitación</option>
                                </select>
                                <div class="invalid-feedback">
                                    Seleciona!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea" class="col-form-label-sm">¿Peticiones, quejas o reclamos?</label>
                                <textarea class="form-control form-control-sm mb-3" name="textareapeticion" id="exampleTextarea" placeholder="Ingresa tu solicitud de manera clara..." rows="5" required></textarea>
                            </div>
                            <div class="invalid-feedback">
                                Porfavor ingresa tu solicitud
                            </div>
                            <button type="submit" id="btn_peticion" class="btn btn-success" name="btn_peticion">Enviar</button>
                            
                        </div>  
                    </div>
                </form>      
            </div>
        </div>
    </div>
</div>