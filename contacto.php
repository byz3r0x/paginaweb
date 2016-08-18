<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A contact form using the Bootstrap 3 framework.">
    <meta name="author" content="">
  <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <title>Preinscripcion</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
    <style type="text/css">
    .container #contact_form .col-md-12 h2 {
	text-align: center;
}
    </style>
    <!-- EXTRACT ADDITIONAL STYLING HERE =======> -->
    
    <!-- <======= UP TO HERE -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/vender/bootstrap/assets/js/html5shiv.js"></script>
      <script src="assets/vender/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- EXTRACT FORM HERE =======> -->
    <div class="container">
      <div id="contact_form" class="row">
        <div class="col-md-12">
          <h2>Contáctenos</h2>
          <form role="form" id="feedbackForm">
            <div class="form-group">
              <label class="control-label" for="name">Nombres *</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Introduzca su nombre" />
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor, escriba su nombre.</span>
            </div>
            
            <div class="form-group">
              <label class="control-label" for="email">Motivo de Contacto*</label>
              <select name="reason" class="form-control">
                <option value="Preinscripcion">Prematricula</option>
                <option value="Consulta General">Consulta General</option>
                <option value="Informe un problema">Informe un problema</option>
              </select>
              <span class="help-block" style="display: none;">Por favor, introduce una dirección de correo electrónico válida.</span>
            </div>
            <div class="form-group">
              <label class="control-label" for="email">Dirección de Correo Electrónico *</label>
              <div class="input-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Introduzca su correo electrónico" />
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor, introduzca una dirección de correo electrónico válida.</span>
            </div>
            <div class="form-group">
              <label class="control-label" for="email">Telefono de contacto *</label>
              <div class="input-group">
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Introduzca su numero telefonico" />
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor, introduzca telefono valido.</span>
            </div>
            <div class="form-group">
              <label class="control-label" for="message">Mensaje *</label>
              <div class="input-group">
                <textarea rows="5" cols="30" class="form-control" id="message" name="message" placeholder="Introduzca su mensaje" ></textarea>
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor, introduzca un mensaje.</span>
            </div>
            <img id="captcha" src="library/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <a href="#" onclick="document.getElementById('captcha').src = 'library/vender/securimage/securimage_show.php?' + Math.random(); return false" class="btn btn-info btn-sm">Mostrar una imagen diferente</a><br/>
            <div class="form-group" style="margin-top: 10px;">
              <label class="control-label" for="captcha_code">Texto dentro de la Imagen *</label>
              <div class="input-group">
                <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Por razones de seguridad, por favor ingrese el código que aparece en el cuadro." />
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor introduce el código que aparece en la imagen.</span>
            </div>
            <span class="help-block" style="display: none;">Por favor ingrese el código de la seguridad.</span>
            <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" data-loading-text="Enviando..." style="display: block; margin-top: 10px;">Enviar comentarios</button>
          </form>
        </div><!--/span-->
      </div><!--/row-->
      <hr>
    </div><!--/.container-->
    <!-- <======= UP TO HERE -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
  </body>
</html>
