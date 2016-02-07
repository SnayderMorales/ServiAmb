@extends('layoutt')

@section('content')
<section id="slider"><!-- Slider -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/.../assets/img/sla2.jpg" alt="...">
        <div class="carousel-caption">
          <h1>Gestion de Residuos</h1>
          <p>Deshágase  de forma segura de sus residuos empresariales través de empresas encargada en el manejo de residuos.</p>
        </div>
      </div>
      <div class="item">
        <img src="assets/img/sla1.jpg" alt="...">
        <div class="carousel-caption">
          <h1>Compra Materiales</h1>
          <p>Compra maratiales de producción de forma barata esenciales para tu empresa.</p>
        </div>
      </div>
      <div class="item">
        <img src="assets/img/sla3.jpg" alt="...">
        <div class="carousel-caption">
          <h1>Vende tus Residuos</h1>
          <p>Vende los residuos derivado de empresa ganado más dinero.</p>
        </div>
      </div>
    </div>


    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section id="company"><!-- Servian (Mision y Vicion) -->
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">ServiAmb Ltda.</h1>
        <br>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8">
        <p class="text-right">Plataforma virtual y móvil, que permitirá la gestión integral de residuos sólidos de diferentes características, a través de la interacción de generadores de residuos (empresas, instituciones y zonas comerciales), gestores certificados y compradores de residuos, los cuales podrán establecer a través de una página web, un mercado virtual de dichos residuos, solicitando cualquiera de los servicios que necesite, entre los cuales está la gestión, compra y venta de los mismos.</p>
        <p class="text-right">ServiAmb, realizará acompañamiento de los servicios, a través de evaluación y seguimiento desde la solicitud del servicio, hasta el cumplimiento del mismo. Para lo anterior, ServiAmb contará con una interfaz móvil que le permitirá al cliente, ver en tiempo real, el progreso e historial de su servicio, sin descartar que lo anteriormente expuesto, lo pueda observar en la página web.</p>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-2">
        <img src="assets/img/logo.png" alt="" class="img-responsive center-block">
      </div>
    </div>
    <br><br>
    <div>
      <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation" class="active"><a href="#Mision" aria-controls="Mision" role="tab" data-toggle="tab">Mision</a></li>
        <li role="presentation"><a href="#Vicion" aria-controls="Vicion" role="tab" data-toggle="tab">Vicion</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="Mision">
          <br>
          <p>Proporcionarle a la comunidad empresarial, institucional y comercial, una solución ambientalmente moderna , a través de la interacción entre generadores, gestores y compradores de residuos sólidos legalmente constituidos, dentro de un mercado virtual, con el fin de minimizar los impactos ambientales y sociales que resultan de diversos procesos.</p>
        </div>
        <div role="tabpanel" class="tab-pane" id="Vicion">
          <br>
          <p>Constituir una plataforma que brinde de manera segura, la oportunidad de gestionar, vender y comprar residuos sólidos, garantizando la satisfacción de los clientes y colaboradores.</p>
        </div>
      </div>

    </div>
  </div>
  <br><br><br><br>
</section>

<section id="job"><!-- Explicasion a que dedica la empresa -->
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"><b>Que Acemos</b></h1>
        <br><br>
      </div>
    </div>
    <div class="row well">
      <div class="col-md-12">
        <div>
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active"><a href="#Comprar" aria-controls="Comprar" role="tab" data-toggle="tab">Compra De Reciduos</a></li>
            <li role="presentation"><a href="#Vender" aria-controls="Vender" role="tab" data-toggle="tab">Venta De Reciduos</a></li>
            <li role="presentation"><a href="#Gestionar" aria-controls="Gestionar" role="tab" data-toggle="tab">Gestion De Reciduos</a></li>
          </ul>

          <!-- Tab panes -->
          <br>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Comprar">
              <h3>COMPRA DE RESIDUOS:</h3>
              <p>Si usted piensa que reciclar, es un proceso exitoso, que ayuda al desarrollo sostenible del planeta, y utiliza tipos de residuos con características reciclables para sus procesos o actividades económicas. ServiAmb le da la oportunidad de ofertar sus residuos y recibir propuestas de vendedores potenciales y calificados.</p>
              <p>La publicación la podrá hacer de manera anónima o identificando el nombre de su razón social.</p>
              <p>Además, el servicio le permitirá observar:</p>
              <ul>
                <li>Respuestas de las solicitudes de terceros con alta reputación y confiabilidad en sus servicios.</li>
                <li>Visualizar compras realizadas.</li>
                <li>Progreso del servicio a través de la plataforma e interfaz móvil de ServiAmb.</li>
              </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="Vender">
              <h3>VENTA DE RESIDUOS:</h3>
              <p>Si piensa que sus residuos pueden ser aprovechados y/o valorizados, publique sus residuos y reciba ofertas por parte de potenciales compradores, de los cuales podrá elegir de acuerdo a las siguientes características:</p>
              <ul>
                <li>Mejor oferta, en cuanto al valor de los residuos.</li>
                <li> Fiabilidad y calificación del comprador.</li>
              </ul>
              <p>La publicación la podrá hacer de manera anónima o identificando el nombre de su razón social.</p>
              <p>Además, el servicio le permitirá observar:</p>
              <ul>
                <li>Respuestas de las solicitudes de terceros con alta reputación y confiabilidad en sus servicios.</li>
                <li>Visualizar ventas realizadas.</li>
                <li>Progreso del servicio a través de la plataforma e interfaz móvil de ServiAmb.</li>
              </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="Gestionar">
              <h3>ASESORÍA DE GESTIÓN DE RESIDUOS:</h3>
              <p>Si tiene dudas de cómo controlar los residuos generados sus procesos, publique a través de la plataforma la necesidad de servicio de gestión integral de residuos y reciba ofertas de servicio por parte de gestores calificados, de los cuales podrá elegir la mejor propuesta.</p>
              <p>La publicación la podrá hacer de manera anónima o identificando el nombre de su razón social.</p>
              <h4>Además, el servicio le permitirá observar:</h4>
              <ul>
                <li>Respuestas de las solicitudes de gestores con alta reputación y confiabilidad en sus servicios.</li>
                <li>Visualizar compras realizadas.</li>
                <li>Progreso del servicio a través de la plataforma e interfaz móvil de ServiAmb.</li>
              </ul>
              <h3>GESTORES CERTIFICADOS:</h3>
              <h4>PUBLICIDAD DE SERVICIOS Y ACCESO A SOLICITUDES</h4>
              <p>¿Es usted una empresa dedicada a la gestión de residuos?</p>
              <p>ServiAmb, le permitirá publicar sus servicios y recibir alarmas de servicios solicitadas por generadores.</p>
              <p>La plataforma le permitirá observar:</p>
              <ul>
                <li>Visualizar los servicios realizados.</li>
                <li>Progreso del servicio a través de la plataforma e interfaz móvil de ServiAmb.</li>
                <li>Cronograma de actividades de acuerdo a las solicitudes recibidas y aprobadas.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
</section>

<section id="team"><!-- Equipo de trabajo -->
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Nuestro Equipo</h1>
        <br><br>
        <p class="text-center">Nuestro equipo esta pesado para bríndale la mejores herramientas en el trato de sus residuos empresariales,</p>
        <p class="text-center">además de ayudar al ambiente le ayudamos a su bolsillo en la obtención de recursos derivados de su reciclaje.</p>
        <br><br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="well">
        <img  src="..\laravel\img\1.jpg" >
          <h3 class="text-center">Liliana Castillo </h3>
          <p class="text-center">Ingeniera Ambiental</p>
          <div class="text-center">
            <a href="https://www.facebook.com/"><img src="assets/img/icon-redes/1.png" alt=""></a>
            <a href="http://wwww.twitter.com"><img src="assets/img/icon-redes/2.png" alt=""></a>
            <a href="http://wwww.instagram.com"><img src="assets/img/icon-redes/3.png" alt=""></a>
            <a href="http://wwww.linkedin.com"><img src="assets/img/icon-redes/5.png" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well">
          <img class="center-block" src="assets/img/socios/2.jpg" alt="">
          <h3 class="text-center">Daniela Garcia</h3>
          <p class="text-center">Ingeniera Ambiental</p>
          <div class="text-center">
            <a href="https://www.facebook.com/"><img src="assets/img/icon-redes/1.png" alt=""></a>
            <a href="http://wwww.twitter.com"><img src="assets/img/icon-redes/2.png" alt=""></a>
            <a href="http://wwww.instagram.com"><img src="assets/img/icon-redes/3.png" alt=""></a>
            <a href="http://wwww.linkedin.com"><img src="assets/img/icon-redes/5.png" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well">
          <img class="center-block" src="assets/img/socios/3.jpg" alt="">
          <h3 class="text-center">Rafael Chamorro</h3>
          <p class="text-center">Ingeniero Industrial</p>
          <div class="text-center">
            <a href="https://www.facebook.com/"><img src="assets/img/icon-redes/1.png" alt=""></a>
            <a href="http://wwww.twitter.com"><img src="assets/img/icon-redes/2.png" alt=""></a>
            <a href="http://wwww.instagram.com"><img src="assets/img/icon-redes/3.png" alt=""></a>
            <a href="http://wwww.linkedin.com"><img src="assets/img/icon-redes/5.png" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well">
          <img class="center-block" src="assets\img\socios\4.jpg" alt="">
          <h3 class="text-center">Keiner Pajaro </h3>
          <p class="text-center">Ingeniero de Sistemas</p>
          <div class="text-center">
            <a href="https://www.facebook.com/"><img src="assets/img/icon-redes/1.png" alt=""></a>
            <a href="http://wwww.twitter.com"><img src="assets/img/icon-redes/2.png" alt=""></a>
            <a href="http://wwww.instagram.com"><img src="assets/img/icon-redes/3.png" alt=""></a>
            <a href="http://wwww.linkedin.com"><img src="assets/img/icon-redes/5.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="well">
          <img class="center-block" src="assets/img/socios/5.jpg" alt="">
          <h3 class="text-center">Geovanni Padilla</h3>
          <p class="text-center">Ingeniero de Sistemas</p>
          <div class="text-center">
            <a href="https://www.facebook.com/"><img src="assets/img/icon-redes/1.png" alt=""></a>
            <a href="http://wwww.twitter.com"><img src="assets/img/icon-redes/2.png" alt=""></a>
            <a href="http://wwww.instagram.com"><img src="assets/img/icon-redes/3.png" alt=""></a>
            <a href="http://wwww.linkedin.com"><img src="assets/img/icon-redes/5.png" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well">
          <img class="center-block" src="assets/img/socios/6.jpg" alt="">
          <h3 class="text-center">Luis Fernandez</h3>
          <p class="text-center">Ingeniero de Sistemas</p>
          <div class="text-center">
            <a href="https://www.facebook.com/"><img src="assets/img/icon-redes/1.png" alt=""></a>
            <a href="http://wwww.twitter.com"><img src="assets/img/icon-redes/2.png" alt=""></a>
            <a href="http://wwww.instagram.com"><img src="assets/img/icon-redes/3.png" alt=""></a>
            <a href="http://wwww.linkedin.com"><img src="assets/img/icon-redes/5.png" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well">
          <img class="center-block" src="assets/img/socios/7.jpg" alt="">
          <h3 class="text-center">Carlos Mendoza</h3>
          <p class="text-center">Ingeniero de Sistemas</p>
          <div class="text-center">
            <a href="https://www.facebook.com/"><img src="assets/img/icon-redes/1.png" alt=""></a>
            <a href="http://wwww.twitter.com"><img src="assets/img/icon-redes/2.png" alt=""></a>
            <a href="http://wwww.instagram.com"><img src="assets/img/icon-redes/3.png" alt=""></a>
            <a href="http://wwww.linkedin.com"><img src="assets/img/icon-redes/5.png" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well">
          <img class="center-block" src="assets/img/socios/8.jpg" alt="">
          <h3 class="text-center">Snayder Morales </h3>
          <p class="text-center">Ingeniero de Sistemas</p>
          <div class="text-center">
            <a href="https://www.facebook.com/"><img src="assets/img/icon-redes/1.png" alt=""></a>
            <a href="http://wwww.twitter.com"><img src="assets/img/icon-redes/2.png" alt=""></a>
            <a href="http://wwww.instagram.com"><img src="assets/img/icon-redes/3.png" alt=""></a>
            <a href="http://wwww.linkedin.com"><img src="assets/img/icon-redes/5.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
</section>

<section id="contact"><!-- formulario de contato -->
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"><b>Contatenos.</b></h1>
        <br>
      </div>
    </div>
    <br>
    <form>
      <div class="form-group">
        <label class="sr-only" for="exampleInputPassword1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
      </div>

      <div class="form-group">
        <label class="sr-only" for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>

      <div class="form-group">
        <label class="sr-only" for="exampleInputPassword1">Asunto</label>
        <textarea class="form-control" id="exampleInputPassword1" placeholder="Asunto" name="name" rows="8" cols="40"></textarea>
      </div>

      <div class="form-group">
        <label class="sr-only" for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block"></p>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  <br><br><br><br>
</section>

<footer class="panel-footer"><!-- Pie de pagina de pagina -->

  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-4 col-md-6">
        <h1>ServiAmb Ltda</h1>
        <p>Plataforma virtual y móvil, que permitirá la gestión integral de residuos sólidos de diferentes características, a través de la interacción de generadores de residuos (empresas, instituciones y zonas comerciales), gestores certificados y compradores de residuos, los cuales podrán establecer a través de una página web.</p>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <h3><b>Emcuetranos</b></h3>
        <p><span class="glyphicon glyphicon-home"> </span> <b>Direcion:</b> Manga calle #</p>
        <p><span class="glyphicon glyphicon-earphone"> </span> <b>Telefono:</b> 1234667</p>
        <p><span class="glyphicon glyphicon-envelope"> </span> <b>Correo:</b> ServiAmb@ServiAmb.com</p>
        <p><span class="glyphicon glyphicon-globe"> </span> <b>Web: </b> ServiAmb.co</p>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <h3><b>Link</b></h3>
        <p><a href=""><span class="glyphicon glyphicon-triangle-right"> </span>Link</a></p>
        <p><a href=""><span class="glyphicon glyphicon-triangle-right"> </span>Link</a></p>
        <p><a href=""><span class="glyphicon glyphicon-triangle-right"> </span>Link</a></p>
        <p><a href=""><span class="glyphicon glyphicon-triangle-right"> </span>Link</a></p>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <p class="text-center">
          <a href="" class="btn">Español</a>
          <a href="" class="btn">English(US)</a>
          <a href="" class="btn">Français(France)</a>
          <a href="" class="btn">Português(Brasil)</a>
          <a href="" class="btn">Italiano</a>
          <a href="" class="btn">Deutsch</a>
          <a href="" class="btn">العربية</a>
          <a href="" class="btn">हिन्दी</a>
          <a href="" class="btn">中文(简体)</a>
          <a href="" class="btn">日本語</a>
          <a href="" class="btn">...</a>
        </p>
      </div>

      <!--<div class="clearfix visible-xs-block"></div>-->
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <p>Copyright © 2015 Derchos Resevados | <a href="">ServiAmb Ltda.</a></p>
      </div>
    </div>
  </div>
</footer>

<section id="modales"><!-- vetanas modales  -->
  <div class="modal fade login" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Login</h4>
        </div>
        @include('partials/errors')
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
            <div class="form-group">
              <label class="sr-only">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label class="sr-only">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade check-in" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Registro</h4>
        </div>
        @include('partials/errors')
        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
            <div class="form-group">
              <label class="sr-only">Razón social</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Razón social">
            </div>
            <div class="form-group">
              <label class="sr-only">NIT</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="NIT">
            </div>
            <div class="form-group">
              <label class="sr-only">Ciudad</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ciudad">
            </div>
            <label>Tipo de empresa</label>
            <br>
            <div class="btn-group btn-group-justified" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="checkbox" autocomplete="off"> Gestor de residuos
              </label>
              <label class="btn btn-primary">
                <input type="checkbox" autocomplete="off"> Gestor de residuos
              </label>
              <label class="btn btn-primary">
                <input type="checkbox" autocomplete="off"> Comprador de residuos
              </label>
            </div>
            <br>
            <label>Tipo de residuo</label>
            <br>
            <div class="btn-group btn-group-justified" data-toggle="buttons">
              <label class="btn btn-primary active">
                <input type="checkbox" autocomplete="off"> Plasticos
              </label>
              <label class="btn btn-primary">
                <input type="checkbox" autocomplete="off"> Organicos
              </label>
              <label class="btn btn-primary">
                <input type="checkbox" autocomplete="off"> Papel
              </label>
              <label class="btn btn-primary">
                <input type="checkbox" autocomplete="off"> Quimico
              </label>
              <label class="btn btn-primary">
                <input type="checkbox" autocomplete="off"> Otos
              </label>
            </div>


          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</section>


@endsection
