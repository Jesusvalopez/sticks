@extends("admin.layouts.main")

@section('content')

    @include("admin.layouts.partials._breadcrumb",["title" => "Dashboard", "crumbs" => ["Dashboard"], "active"=>"Dashboard"])

    <div class="container-fluid">

        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div id="newSaleBtn" class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-flash"></i></h1>
                        <h6 class="text-white">Venta Rápida</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="saleContainer" style="display:none">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nueva venta</h5>
                        <div class="form-group row">
                            <label class="col-md-1 m-t-15">Dirección</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="Calle, Número" class="form-control">
                            </div>
                            <label class="col-md-1 m-t-15 text-center">Dpto</label>
                            <div class="col-md-2">
                                <input type="text" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-1 m-t-15">Producto</label>
                            <div class="col-md-8">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                    <option>Select</option>
                                        <option value="AK">Queso</option>
                                        <option value="HI">Queso Crema Tocino</option>
                                        <option value="CA">Chocolate Negro</option>
                                        <option value="NV">Chocolate Blanco</option>
                                        <option value="OR">Guayaba con Queso</option>
                                </select>
                            </div>
                            <label class="col-md-1 m-t-15 text-center">Cantidad</label>
                            <div class="col-md-2">
                                <input type="number" placeholder="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-1  m-t-15">Delivery</label>
                            <div class="col-md-2">
                                <input id="deliveryAmount" type="number" placeholder="" class="form-control" disabled>
                            </div>
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="deliveryCheckbox">
                                    <label class="custom-control-label" for="deliveryCheckbox">¿Delivery?</label>
                                </div>
                        </div>





                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Detalle venta</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>
                                            <label class="customcheckbox m-b-20">
                                                <input type="checkbox" id="mainCheckbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <th scope="col">Rendering engine</th>
                                        <th scope="col">Browser</th>
                                        <th scope="col">Platform(s)</th>
                                        <th scope="col">Engine version</th>
                                    </tr>
                                    </thead>
                                    <tbody class="customtable">
                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <label class="customcheckbox">
                                                <input type="checkbox" class="listCheckbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.0</td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                    </tr>
                                   <tr>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td>TOTAL</td>
                                       <td>100</td>
                                   </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>





                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Registrar Venta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ventas</h5>
                    <div class="table-responsive">
                        <table id="sales" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Factura</th>
                                <th>Fecha</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Monto</th>
                                <th>Delivery</th>
                                <th>Total</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#430</td>
                                <td>23/08/2018 21:56</td>
                                <td>Ración Queso</td>
                                <td>2</td>
                                <td>$5980</td>
                                <td>$1500</td>
                                <td>$7480</td>
                                <td>Ver - Editar - Eliminar</td>
                            </tr>

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
            </div>
        </div>





    </div>
@endsection

@section('bottom-js')

    <script src="{{asset('admin_template/js/admin.js')}}"></script>

@endsection