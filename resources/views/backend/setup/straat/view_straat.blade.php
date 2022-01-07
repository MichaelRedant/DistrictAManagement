@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="row">
            @if (session('success'))
            <div class="jq-toast-wrap top-right"><div class="jq-toast-single jq-has-icon jq-icon-info" style="text-align: left; display: none;">
                <span class="jq-toast-loader jq-toast-loaded" style="-webkit-transition: width 2.6s ease-in;
                 -o-transition: width 2.6s ease-in; transition: width 2.6s ease-in; background-color: #ff6849;"></span>
                 <span class="close-jq-toast-single">×</span><h2 class="jq-toast-heading">District A Bericht</h2>{{session('success')}}</div></div>
              @endif
           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Lijst met Straten</h3>
                <a href="{{route('leden.straten.add')}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Straat Toevoegen</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">Nr.</th>        
                              <th>Naam</th>                         
                              <th width="20%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($allData as $key => $straat )
                            <tr>
                              <td>{{ $key+1 }}</td>
                              <td>{{ $straat->name }}</td>
                              <td>
                                  <a href="{{route('leden.straten.edit',$straat->id)}}" class="btn btn-light mb-5 mr-3">Edit</a>
                                  <a href="{{route('leden.straten.delete',$straat->id)}}" class="btn btn-danger mb-5" id="delete">Delete</a>
                              </td>
                          </tr>
                          @endforeach           
                      </tbody>
                      <tfoot>

                      </tfoot>
                    </table>
                  </div>
              </div>
            </div>       
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
@endsection