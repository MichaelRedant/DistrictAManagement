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
                <h3 class="box-title">Lijst met Leden District A</h3>
                <a href="{{route('members.add')}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Lid Toevoegen</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="2%">Nr.</th>
                              <th>Zaak</th>
                              <th>Naam</th>
                              <th>Email</th>
                              <th>Straat</th>
                              <th>Nummer</th>
                              <th>Website</th>
                              <th>Openingsuren</th>
                              <th>Sluitingsdag</th>
                              <th>Label</th>
                              <th width="25%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($allData as $key => $member )
                            <tr>
                              <td>{{ $key+1 }}</td>
                              <td>{{ $member->name_business }} </td>
                              <td>{{ $member->name_zaakvoerder }}</td>
                              <td>{{ $member->email }}</td>
                              <td>{{ $member['member_straat']['name'] }}</td>
                              <td>{{ $member->street_number }}</td>
                              <td>{{ $member->website }}</td>
                              <td>{{ $member->hours }}</td>
                              <td>{{ $member['member_sluit']['dag'] }}</td>
                              <td>{{ $member['member_label']['name'] }}</td>
                              <td>
                                  <a href="{{route('members.edit',$member->id)}}" class="btn btn-light mb-5 mr-3">Edit</a>
                                  <a href="{{route('user.delete',$member->id)}}" class="btn btn-danger mb-5" id="delete">Delete</a>
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