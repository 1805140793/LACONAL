
@extends('layout')
@section('content')

<div class="">

<div class="page-title">
  <div class="title_left">
    <h3>Cotización de Servicios de Laboratorio </h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Ir</button>
        </span>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>
<div class="row">

<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Solicitud de cotización</h2>
    
      <div class="clearfix"></div>
    </div>
    <div class="x_content">


      <!-- Smart Wizard -->
      <p>Cotice ahora y envienos su solicitud de una forma sencilla y segura</p>
      <div id="wizard" class="form_wizard wizard_horizontal">
        <ul class="wizard_steps">
          <li>
            <a href="#step-1">
              <span class="step_no">1</span>
              <span class="step_descr">
                                Cliente<br />
                                <small>Datos Personales</small>
                            </span>
            </a>
          </li>
          <li>
            <a href="#step-2">
              <span class="step_no">2</span>
              <span class="step_descr">
                                Servicio de Laboratorio<br />
                                <small>Datos de servicio</small>
                            </span>
            </a>
          </li>
          <li>
            <a href="#step-3">
              <span class="step_no">3</span>
              <span class="step_descr">
                                Adicional<br />
                                <small>Datos Adicionales</small>
                            </span>
            </a>
          </li>
         
        </ul>
        <div id="step-1">
          <form class="form-horizontal form-label-left">

            <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="first-name" required="required" class="form-control  ">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Apellido <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
              </div>
            </div>
            <div class="form-group row">
              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Teléfono/Celular</label>
              <div class="col-md-6 col-sm-6 ">
                <input id="middle-name" class="form-control col" type="text" name="middle-name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Género</label>
              <div class="col-md-6 col-sm-6 ">
                <div id="gender" class="btn-group" data-toggle="buttons">
                  <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                    <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Masculino &nbsp;
                  </label>
                  <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                    <input type="radio" name="gender" value="female" class="join-btn"> Femenino
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Ciudad <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input id="birthday" class="date-picker form-control" required="required" type="text">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Email <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input id="birthday" class="date-picker form-control" required="required" type="text">
              </div>
            </div>

          </form>

        </div>
        <div id="step-2">

        <div class="x_panel">
                <div class="x_title">
                  <small>Eliga uno de los siguiente servicios:</small>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="">
                    <ul class="to_do">
                    <li>
                        <p>
                          <input type="checkbox" class="flat">Biometría Hemática </p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat">Cariotipo (Estudio Cromosómico) </p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat">Gamma G.T. </p>
                      </li>
                                 
                      <li>
                        <p>
                          <input type="checkbox" class="flat">Audiometria </p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Espirometria</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat">Electrocardiograma</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Rayos X</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Exámenes de Laboratorio</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Historia Clinica</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Agudeza Visual</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Somatometria</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

        </div>

        <div id="step-3">
            <form class="form-horizontal form-label-left">
                <div class="form-group d-flex justify-content-center  ">
                          <div class="col-md-6">
                          <label for="cantidad">¿Aproximadamente cuantos exámenes se realizarán?</label>
                              <input type="number" class="form-control" id="cantidad">
                          </div>
                </div>
                <div class="form-group d-flex justify-content-center  ">
                          <div class="col-md-6">
                          <label for="fecha">¿Fecha estimada de inicio de exámenes?</label>
                              <input type="date" class="form-control" id="fecha" >
                          </div>
                </div>
                <div class="form-group d-flex justify-content-center  ">
                          <div class="col-md-6">
                          <label for="adicional">Información adicional</label>
                          <textarea class="form-control" rows="3" ></textarea>

                          </div>
                </div>
               
            
              

              </form>
              <div class=" d-flex justify-content-center  ">

              <a class="btn btn-secondary source" href="#" onclick="window.open('{{ asset('Docs/cotizacion.pdf')}}', '_blank', 'fullscreen=yes'); return false;">Cotizar</a>

             

          </div>
      

      </div>





 
    </div>
  </div>
</div>
</div>

</div>



@endsection