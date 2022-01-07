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
                 <span class="close-jq-toast-single">×</span><h2 class="jq-toast-heading">District A Bericht</h2>{{session('success')}}</div>
            </div>
              @endif
          <div class="col-12">
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="center center;">
                    <a href="{{route('profile.edit',$user->id)}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Gebruiker Wijzigen</a>
                  <h3 class="widget-user-username">{{$user->name}}</h3>
                  <h6 class="widget-user-desc"><strong>Type: </strong>{{$user->usertype}}</h6>
                  <h6 class="widget-user-desc"><strong>Email: </strong>{{$user->email}}</h6>
                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" 
                    src="{{ (!empty($user->afbeelding)) ? url('upload/user_images/'.$user->afbeelding) : url('upload/no_image.jpg') }}"
                    alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Telefoonnummer</h5>
                        <span class="description-text">{{$user->telefoon}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">Adres</h5>
                        <span class="description-text">{{$user->adres}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Gender</h5>
                        <span class="description-text">{{$user->gender}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
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