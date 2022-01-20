@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">{{ $data->name_business }} Aanpassen</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                <div class="row">
                  <div class="col">
                      <form novalidate="" method="POST" action="">
                       @csrf
                       <div class="row">
                          <div class="col-12">	
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Naam Zaak <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name_business" value="{{ $data->name_business }}" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <h5>Naam Zaakvoerder / Gerant <span class="text-danger">*</span></h5>
                                           <div class="controls">
                                               <input type="text" name="name_zaakvoerder" value="{{ $data->name_zaakvoerder }}" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                       </div>
                                   </div>{{-- End col6 --}}
                               </div><!--end row--> 
                               
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <h5>Email <span class="text-danger">*</span></h5>
                                           <div class="controls">
                                               <input type="email" name="email" value="{{ $data->email }}" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                       </div>
                                   </div>{{-- End col6 --}}
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Website</h5>
                                        <div class="controls">
                                            <input type="text" name="website" value="{{ $data->website }}" class="form-control" ><div class="help-block"></div></div>
                                    </div>
                                </div>{{-- End col6 --}}
                               </div><!--end row--> 
                               
                               <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">                  
                                        <h5>Straat <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="street_id" id="street_id" required="" class="form-control">
                                                <option value="" selected="" disabled=""></option>
                                                @foreach ($straten as $straat)
                                                    <option value="{{ $straat->id }}"{{ ($data->id  == $straat->id) ? "selected":""}}>{{ $straat->name }}</option>
                                                @endforeach    
                                            </select>
                                        <div class="help-block"></div></div>
                                    </div>
                                </div>{{-- End col6 --}}
                                <div class="col-md-6">
                                 <div class="form-group">
                                     <h5>Nummer</h5>
                                     <div class="controls">
                                         <input type="text" name="street_number" value="{{ $data->street_number }}" class="form-control" ><div class="help-block"></div></div>
                                 </div>
                             </div>{{-- End col6 --}}
                            </div><!--end row-->
                            
                            <div class="row">
                                <div class="col-12">	
                                         <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <h5>Openingsuren</h5>
                                                  <div class="controls">
                                                      <input type="text" name="hours" value="{{ $data->hours }}" class="form-control"> <div class="help-block"></div></div>
                                              </div>
                                          </div>{{-- End col6 --}}
                                         <div class="col-md-6">
                                            <div class="form-group">                  
                                                <h5>Sluitingsdag</h5>
                                                <div class="controls">
                                                    <select name="dagens" id="dagens" required="" class="form-control">
                                                        <option value="" selected="" disabled=""></option>
                                                        @foreach ($dagen as $dag)
                                                            <option value="{{ $dag->id }}{{ ($data->id  == $dag->id) ? "selected":""}}">{{ $dag->dag }}</option>
                                                        @endforeach    
                                                    </select>
                                                <div class="help-block"></div></div>
                                            </div>
                                         </div>{{-- End col6 --}}
                                     </div><!--end row-->
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">                  
                                                <h5>Label <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="label" id="label" required="" class="form-control">
                                                        <option value="" selected="" disabled=""></option>
                                                        @foreach ($labels as $label)
                                                            <option value="{{ $label->id }} {{ ($data->id  == $label->id) ? "selected":""}}">{{ $label->name }}</option>
                                                        @endforeach    
                                                    </select>
                                                <div class="help-block"></div></div>
                                            </div>
                                       
                                             </div><!--end row-->  
                              
                                                             
                          <div class="text-xs-right float-right">
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