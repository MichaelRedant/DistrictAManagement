@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Wachtwoord Aanpassen</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate="" method="POST" action="{{route('password.update')}}">
                        @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Huidig Wachtwoord <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="oldpassword" id="current_password" class="form-control" required="" data-validation-required-message="This field is required">
                                                @error('oldpassword')
                                                <span class="text-danger">
                                                    {{$message}}
                                                </span>
                                                @enderror
                                                <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col12 --}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Nieuw Wachtwoord<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="password" id="password" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false">
                                                @error('password')
                                                    <span class="text-danger">
                                                        {{$message}}
                                                    </span>
                                                @enderror
                                                <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col12 --}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>Bevestig Wachtwoord<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false">
                                                @error('password_confirmation')
                                                    <span class="text-danger">
                                                        {{$message}}
                                                    </span>
                                                    @enderror
                                                <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col12 --}}
                                </div><!--end row-->                   
                               
                                                              
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
                           </div>
                       </form>
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
      
    
    </div>
</div>
@endsection