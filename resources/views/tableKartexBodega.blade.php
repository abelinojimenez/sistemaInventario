<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Registro de todos los productos en bodega</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      @foreach($headerDataTable2 as $col)
                          <th>{{$col}}</th>
                      @endforeach
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      @foreach($headerDataTable as $col)
                          <th>{{$col}}</th>
                      @endforeach
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($bodegas as $row)
                          <tr>
                              @foreach($row as $col)      
                                  <td>{{$col}}</td>
                              @endforeach
                          </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>