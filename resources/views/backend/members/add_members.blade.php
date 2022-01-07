@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Lid Toevoegen</h4>
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
                                            <h5>Naam Zaak <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name_business" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>                  
                                    </div>{{-- End col6 --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Naam Zaakvoerder / Gerant</h5>
                                            <div class="controls">
                                                <input type="text" name="name_zaakvoerder" class="form-control"> <div class="help-block"></div></div>
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
                                            <h5>Website</h5>
                                            <div class="controls">
                                                <input type="text" name="website" class="form-control"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                </div><!--end row--> 
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">                  
                                            <h5>Straat <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="street_id" id="street_id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Kies de Straat</option>
                                                    @foreach ($straten as $straat)
                                                        <option value="{{ $straat->id }}">{{ $straat->name }}</option>
                                                    @endforeach    
                                                </select>
                                            <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nummer <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="street_number" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                </div><!--end row--> 

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Dekenij</h5>
                                            <div class="controls">
                                                <input type="checkbox" id="dekenij" name="dekenij" class="form-control"> 
                                                <label for="dekenij">Lid</label>
                                                <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Openingsuren</h5>
                                            <div class="controls">
                                                <input type="text" name="hours" class="form-control"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                </div><!--end row--> 

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">                  
                                            <h5>Sluitingsdag</h5>
                                            <div class="controls">
                                                <select name="dagens" id="dagens[]" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Kies Dag</option>
                                                    @foreach ($dagen as $dag)
                                                        <option value="{{ $dag->id }}">{{ $dag->dag }}</option>
                                                    @endforeach    
                                                </select>
                                            <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col5 --}}
                                    <div class="col-md-5">
                                        <div class="form-group">                  
                                            <h5>Label <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="label" id="label" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Kies het Label</option>
                                                    @foreach ($labels as $label)
                                                        <option value="{{ $label->id }}">{{ $label->name }}</option>
                                                    @endforeach    
                                                </select>
                                            <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col5 --}}
                                    <div class="col-md-2 pt-3">
                                        <h3></h3>
                                        <span>
                                            <div class="btn btn-success addeventmore">
                                                <i class="fa fa-plus-circle"></i>
                                            </div>
                                        </span>
                                    </div>{{-- End col2 --}}
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