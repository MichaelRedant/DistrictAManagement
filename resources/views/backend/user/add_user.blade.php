@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Gebruiker Toevoegen</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate="" method="POST" action="{{route('user.store')}}">
                        @csrf
                        <div class="row">
                           <div class="col-12">	
                               	 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">                  
                                            <h5>Gebruikers Rol <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="usertype" id="select" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Kies Rol</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Gebruiker">Gebruiker</option>
                                                </select>
                                            <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Naam Gebruiker <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                </div><!--end row--> 
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Email Gebruiker <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Wachtwoord Gebruiker<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required" aria-invalid="false"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                </div><!--end row-->                   
                               
                                                              
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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