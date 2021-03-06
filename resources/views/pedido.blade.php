
@extends('layout')
@section('content')

<div class="">

<div class="page-title">
  <div class="title_left">
    <h3>Pedido de Servicios de Laboratorio </h3>
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
      <h2>Solicitud de pedido</h2>
    
      <div class="clearfix"></div>
    </div>
    <div class="x_content">


      <!-- Smart Wizard -->
      <p>Realice su pedido y obtenga un turno</p>
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
                                <small>Información Adicional</small>
                            </span>
            </a>
          </li>

          <li>
            <a href="#step-4">
              <span class="step_no">4</span>
              <span class="step_descr">
                                Pago<br />
                                <small>Orden de Pago</small>
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
                <div class=" d-flex justify-content-center  ">
                  <div class="col-md-10">
                    <ul class="to_do">
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Alimentos </p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Aguas </p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Ambiente </p>
                      </li>
                                 
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Validacion de desinfectantes </p>
                      </li>
                      
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Analisis de Cereales</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Harinas de Pescado</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Carnes y Productos cárnicos</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Leche en polvo</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Balanceados</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Frutas, Pulpas, Mermeladas, Nectar</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Bebidas y Refrescos</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Vegetales y Conservas</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Especias</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Aceites y Grasas</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Miel, dulces y caramelos</p>
                      </li>
                      <li>
                        <p>
                          <input type="checkbox" class="flat"> Cacao y productos derivados</p>
                      </li>
                      
                    </ul>
                  </div>
                  </div>
                

                </div>
              </div>

        </div>

        <div id="step-3">
          <form class="form-horizontal form-label-left">
            <div class="form-group d-flex justify-content-center  ">
                      <div class="col-md-6">
                      <label for="cantidad">¿Cuántos muestras desea analizar?</label>
                          <input type="number" class="form-control" id="cantidad">
                      </div>
            </div>
            <div class="form-group d-flex justify-content-center  ">
                      <div class="col-md-6">
                      <label for="fecha">¿Fecha estimada para la toma de muestra/s?</label>
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
        </div>

        <div id="step-4">           
          <div class="row">
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <small>Orden de Pago</small>
                  
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <section class="content invoice">
                        <!-- title row -->
                        <div class="row">
                          <div class="  invoice-header">
                            <h3>
                                            <i class="fa fa-globe"></i> Factura .
                                            
                                            <p><small class="pull-right">Fecha: 09/04/2021</small></p>
                                        </h3>

                          </div>

                          <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <hr/>
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                            
                            <address>
                                            <strong>Laboratorio</strong>
                                            <br>Av. 1234 st y Nueva Generación
                                            <br>Teléfono: +593983425741
                                            <br>Email: laboratorio@corre.com
                                        </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            
                            <address>
                                            <strong>Jóse Adrian Lopez Rios</strong>
                                            <br>Av. 9 de Octubre
                                            <br>Celular: 0983448512
                                            <br>Email: jose@gmail.com
                                        </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            <b>Factura #007612</b>
                            <br>
                            <br>
                            <b>Pagar hasta:</b>21/04/2021
                            <br>
                            <b>Banco:</b> Banco de Pichincha
                            <br>
                            <b>Tipo de Cuenta:</b> Cuenta Corriente
                            <br>
                            <b>N# Cuenta:</b> 2021545211

                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                          <div class="  table">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Cantidad</th>
                                  <th>Servicio</th>
                                  <th style="width: 59%">Descripción</th>
                                  <th>Subtotal</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Formulación</td>
                                  <td>Formulación de Mermelada mora-Guanaba.
                                  </td>
                                  <td>$186.50</td>
                                </tr>
                                <tr>
                                  <td>1</td>
                                  <td>Dulces y Mermeladas</td>
                                  <td>Análisis de carbohidratos</td>
                                  <td>$54.80</td>
                                </tr>
                               
                              
                              </tbody>
                            </table>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                          <!-- accepted payments column -->
                          <div class="col-md-6">
                            <!--
                            <p class="lead">Métodos de Pago:</p>
                            <img src="{{ asset('custom/images/visa.png') }}" alt="Visa">
                            <img src="{{ asset('custom/images/mastercard.png') }}" alt="Mastercard">
                            <img src="{{ asset('custom/images/american-express.png') }}" alt="American Express">
                            <img src="{{ asset('custom/images/paypal.png') }}" alt="Paypal">
                            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Aceptamos las siguiente tarjetas de crédito
                            </p>-->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-6">
                            <p class="lead">Pagar hasta 21/04/2021</p>
                            <div class="table-responsive">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>$250.30</td>
                                  </tr>
                                  <tr>
                                    <th>IVA (12%%)</th>
                                    <td>$10.34</td>
                                  </tr>
                                
                                  <tr>
                                    <th>Total:</th>
                                    <td>$265.24</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="d-flex justify-content-center">
                          <div class="">
                            <button class="btn btn-primary" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
                
        

          </div>
  
         

    </div>
  </div>
</div>
</div>

</div>



@endsection