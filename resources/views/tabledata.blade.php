<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">{{$nombreaccion}}s registradas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-  " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      @foreach($headerDataTable as $col)
                          <th>{{$col}}</th>
                      @endforeach
                          <th>ACCION</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      @foreach($headerDataTable as $col)
                          <th>{{$col}}</th>
                      @endforeach
                          <th>ACCION</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($results as $row)
                      <tr>
                        @php
                        $ij=0;
                        $datR="";
                        @endphp
                      @foreach($row as $col)
                          <td id="l{{$row->$idName.$ij}}">{{$col}}</td>
                          @php
                            if($ij==0)
                              $datR=$col;
                            else
                              $datR=$datR.",".$col;
                            $ij++

                          @endphp
                          
                      @endforeach
                           <td>  
                               <form action="data/delete" method="POST">
                                 @method('DELETE')
                                 @csrf
                                  <input type="hidden" name="path" value="{{$path}}"/>
                                  <input type="hidden"  name="tableName" value="{{$tablaName}}"/>
                                  <input type="hidden"  name="idname" value="{{$idName}}">
                                  <input type="hidden" class="d-inline p-2 " name="{{$idName}}" value="{{$row->$idName}}"/>
                                  <input type="submit" value="X" class="d-inline p-2  btn btn-danger btn-circle " ></input>
                               </form>

              
                               <a href="#" class="btn btn-info btn-circle"  id="btnActualizar" onClick="changeElement('{{$path}}' , '{{$tablaName}}' , '{{$idName}}' , '{{$row->$idName}}' ,'{{$datR}}')">
                                <i class="fas fa-info-circle"></i>
                              </a>
                               @if($path=="ingresoSalidaProducto")
                                 <form action="data/actualizarLugar" method="POST">
                                 @method('PUT')
                                 @csrf
                                  <input type="hidden" name="path" value="{{$path}}"/>
                                  <input type="hidden" name="tableName" value="{{$tablaName}}"/>
                                  <input type="hidden" name="idname" value="{{$idName}}">
                                  <input type="hidden" name="estado" value="{{$row->estado}}"/>
                                  <input type="hidden" name="{{$idName}}" value="{{$row->$idName}}"/>
                                  <input type="submit" value="cambiar ubicacion" class="btn btn-light btn-icon-split" ></input>
                               </form>
                               @endif
                              
                          </td>
                      </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>