@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Manage Profiel</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate="" method="POST" action="{{route('profile.store', $editData->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">	    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Naam Gebruiker <span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                         <input type="text" name="name" value="{{ $editData->name }}" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Email Gebruiker <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" value="{{ $editData->email }}" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                </div><!--end row--> 
                            <div class="row">
                                    <div class="col-12">	
                                             <div class="row">
                                             <div class="col-md-6">
                                                 <div class="form-group">                  
                                                    <h5>Telefoonnummer Gebruiker</h5>
                                                    <div class="controls">
                                                        <input type="text" name="telefoon" value="{{ $editData->telefoon }}" class="form-control"> <div class="help-block"></div></div>
                                                 </div>
                                             </div>{{-- End col6 --}}
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                    <h5>Adres Gebruiker</h5>
                                                    <div class="controls">
                                                        <input type="text" name="adres" value="{{ $editData->adres }}" class="form-control"> <div class="help-block"></div></div>
                                                 </div>
                                             </div>{{-- End col6 --}}
                                         </div><!--end row-->
                                         <div class="row">
                                            <div class="col-12">	    
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Gender</h5>
                                                                <div class="controls">
                                                                    <select name="gender" id="gender" class="form-control">
                                                                        <option value="" selected="" disabled="">Kies Gender</option>
                                                                        <option value="Man" {{ ($editData->gender == "Man" ? "selected": "") }}>Man</option>
                                                                        <option value="Vrouw" {{ ($editData->gender == "Vrouw" ? "selected": "") }} >Vrouw</option>
                                                                    </select>
                                                                <div class="help-block"></div></div>
                                                        </div>
                                                    </div>{{-- End col6 --}}
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5>Profiel Foto</h5>
                                                            <div class="controls">
                                                                <input type="file" id="image" name="afbeelding" class="form-control"> <div class="help-block"></div></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <img id="showImage" 
                                                                src="{{ (!empty($user->afbeelding)) ? url('upload/user_images/'.$user->afbeelding) : url('upload/no_image.jpg') }}"
                                                                alt="User Avatar" style="width: 100px; height: 100px; border: 1px solid #000000;">
                                                        </div>
                                                    </div>{{-- End col6 --}}
                                                </div><!--end row--> 
                                                </div>
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
{{-- afbeelding aanpassen --}}
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>
@endsection