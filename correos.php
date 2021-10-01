<?php

include('includes/funciones.php');

// Envio de correo de la seccion contacto
if (isset($_POST['form_contact'])) {
    $tipo_user = validar($_POST['usuario']);
    $nombre = validar($_POST['namep']);
    $apellido = validar($_POST['lastnamep']);
    $tipoid = validar($_POST['tipoid']);
    $n_identificacion = validar($_POST['cedula']);

    //datos del paciente en caso de ser enviados
    $nombrepa = validar($_POST['namepa']);
    $apellidopa = validar($_POST['apellidopa']);
    $tipoidpa = validar($_POST['tipoidpa']);
    $n_identificacionpa = validar($_POST['cedulapaciente']);


    $email = validar($_POST['email']);
    $telefono = validar($_POST['phone']);
    $eps = validar($_POST['eps']);
    $mensaje = $_POST['textarea'];

    if (empty($tipo_user) || empty($nombre) || empty($apellido) || empty($tipoid) || empty($n_identificacion) || empty($email) || empty($telefono) || empty($eps) || empty($mensaje)) {
        $_SESSION['error'] = ' Porfavor rellenar todos los campos';
        header('Location:contacto.php#telefono');
    } else {
        $asunto = 'MI SOLICITUD';
        $correo = 'peticionescontacto@demenciasemanuel.com';
        $alerta = 'Nos estaremos comunicando a tu numero de contacto';
        $ruta = 'contacto.php#aviso';
        $body = 'Hola se ha notificado una nueva solicitud: ' . '<br>' .
            '<strong>' . 'Datos' . '</strong>' . '<br>' .
            'Tipo Usuario: ' . $tipo_user . '<br>' .
            'Nombres: ' . $nombre . '<br>' .
            'Apellidos: ' . $apellido . '<br>' .
            'Tipo de Identificaci&oacute;n: ' . $tipoid . '<br>' .
            'Numero de Identificaci&oacute;n: ' . $n_identificacion . '<br>' .
            '<hr>' .
            'Nombres paciente: ' . $nombrepa . '<br>' .
            'Apellidos paciente: ' . $apellidopa . '<br>' .
            'Tipo de Identificaci&oacute;n paciente: ' . $tipoidpa . '<br>' .
            'Numero de Identificaci&oacute;n paciente: ' . $n_identificacionpa . '<br>' .
            '<hr>' .
            'Correo: ' . $email . '<br>' .
            'Celular: ' . $telefono . '<br>' .
            'Eps: ' . $eps . '<br>' .
            'Mensaje: ' . $mensaje . '<br>';
        enviar($body, $correo, $alerta, $ruta, $asunto);
    }
}

//envio de correo en la seccion de trabaja con nosotros
if (isset($_POST['btn-postulacion'])) {

    $nombres = $_POST['nameandp'];
    $correoc = $_POST['email'];
    $celular = $_POST['celular'];
    $profesion = $_POST['profesion'];
    $ciudad = $_POST['ciudad'];
    $academico = $_POST['academico'];
    $puesto = $_POST['puesto'];
    $archivo = $_FILES['archivo'];

    $asunto = 'HOLA, ME ENTUSIASMA TRABAJAR CON USTEDES';
    $correo = 'hojasdevida@demenciasemanuel.com';
    $alerta = 'tus datos para trabajar con nosotros se enviaron exitosamente';
    $ruta = 'tnosotros.php#formFile';

    $body = 'Hola se ha notificado una persona para trabajar con nosotros: ' . '<br>' .
        '<strong>' . 'Datos' . '</strong>' . '<br>' .
        'Nombres: ' . $nombres . '<br>' .
        'Correo: ' . $correoc . '<br>' .
        'Celular: ' . $celular . '<br>' .
        'profesion: ' . $profesion . '<br>' .
        'Ciudad: ' . $ciudad . '<br>' .
        'Academico: ' . $academico . '<br>' .
        'Vacante: ' . $puesto . '<br>';


    if ($_FILES['archivo']['type'] != 'application/pdf') {

        $_SESSION['error'] = ' Selecciona un pdf';
        header('Location:tnosotros.php#formFile');
    } else {

        if (empty($nombres) || empty($correo) || empty($celular) || empty($profesion) || empty($ciudad) || empty($academico) || empty($puesto)) {
            $_SESSION['error'] = ' Porfavor rellena todos los campos';
            header('Location:tnosotros.php#formFile');
        } else {
            enviar($body, $correo, $alerta, $ruta, $asunto, $archivo);
            $_SESSION['alerta'] = $alerta;
            header('Location:tnosotros.php#formFile');
        }
    }
}

//envio de correo en la seccion de PQRSF
if (isset($_POST['btn_peticion'])) {
    $nombres = validar($_POST['nombres']);
    $apellidos = validar($_POST['apellidos']);
    $celular = validar($_POST['telefono']);
    $email = validar($_POST['correo']);
    $peticion = validar($_POST['tipop']);
    $textarea = $_POST['textareapeticion'];

    if (empty($nombres) || empty($apellidos) || empty($celular) || empty($email) || empty($peticion) || empty($textarea)) {
        $_SESSION['errorpeticion'] = ' Porfavor rellenar todos los campos';
        header('Location:contacto.php#inicio');
    } else {
        $asunto = 'PETICIONES, QUEJAS O RECLAMOS';
        $correo = 'pqrsf@demenciasemanuel.com';
        $alerta = $peticion . ' enviada con exito';
        $ruta = 'contacto.php#inicio';

        $body = 'Hola se ha notificado una nueva ' . '<strong>' . $peticion . '</strong>' . '<br>' .
            'Datos del usuario: ' .
            $nombres . ' ' . $apellidos . '<br>'
            . 'Numero de celular ' . $celular . '<br>' .
            'Correo: ' . $email . '<br>' .
            $peticion . ' del usuario: ' . $textarea;

        enviar($body, $correo, $alerta, $ruta, $asunto);

        $_SESSION['alertapeticion'] = $alerta;
    }
}
