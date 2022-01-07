@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Gebruiker {{ $editData->name }} Aanpassen</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate="" method="POST" action="{{route('user.update', $editData->id)}}">
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
                                                    <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected": "") }}>Admin</option>
                                                    <option value="Gebruiker" {{ ($editData->usertype == "Gebruiker" ? "selected": "") }} >Gebruiker</option>
                                                </select>
                                            <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Naam Gebruiker <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" value="{{ $editData->name }}" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                </div><!--end row--> 
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Email Gebruiker <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" value="{{ $editData->email }}" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
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