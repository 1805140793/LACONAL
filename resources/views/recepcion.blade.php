
@extends('layout')
@section('content')

<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Recepción de comprobante de pago </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
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
                  <small>

                  Cargue su comporbante de pago 

                  </small>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Pedido</th>
                          <th>Servicio</th>
                          <th>Costo</th>
                          <th>Comprobante</th>
                         
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>00025</td>
                          <td>Análisis de Equipos</td>
                          <td>$230,750</td>
                          <td> 
                          <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-list-alt"></i> </button>
                          </td>
                     
                        </tr>
                        <tr>
                          <td>00036</td>
                          <td>Dulces y Mermeladas</td>
                          <td>$170,750</td>
                          <td>
                          <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" ><i class="fa fa-list-alt"></i> </button>

                          
                          </td>
                          
                        </tr>
                       
                        <tr>
                          <td>00085</td>
                          <td>Coombs Indirecto</td>
                          <td>$58,75</td>
                          <td>

                          <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-list-alt"></i> </button>



                          </td>
                          
                        </tr>
                       
  
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

           
              <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Comprobante de Pago</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="form_upload.html" class="dropzone"></form>
                        </div>
                        <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-secondary source" onclick="new PNotify({
                                  title: 'Mensaje',
                                  text: 'Comprobante cargado correctamente',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });">Subir</button>
                        </div>

                      </div>
                    </div>
                  </div>
              

              

            
            
            </div>
          </div>
@endsection