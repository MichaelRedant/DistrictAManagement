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
                <h3 class="box-title">Berichten Contact</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Contact Naam</th>
                              <th scope="col">Contact Email</th>
                              <th scope="col">Contact Telefoon</th>
                              <th scope="col">Contact Bericht</th>
                              <th scope="col">Datum Bericht</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @php($i = 1)
                              @foreach ($messages as $msg)
                                 <tr>
                              <th scope="row">{{ $i++ }}</th>
                              <td>{{ $msg->name }}</td>
                              <td>{{ $msg->email }}</td>
                              <td>{{ $msg->phone }}</td>
                              <td>{{ $msg->message }}</td>
                              <td>{{ $msg->created_at }}</td>
                              <td>
                                 
                              </td>
                          </tr>   
                              @endforeach     
                          </tbody>
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