@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                       <form novalidate="" method="POST" action="{{route('members.store')}}" enctype="multipart/form-data">
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
                                            <h5>Openingsuren</h5>
                                            <div class="controls">
                                                <input type="text" name="hours" class="form-control"> <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}

                                    <div class="col-md-6">
                                        <div class="form-group">                  
                                            <h5>Sluitingsdag</h5>
                                            <div class="controls">
                                                <select name="dagens" id="dagens" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Kies Dag</option>
                                                    @foreach ($dagen as $dag)
                                                        <option value="{{ $dag->id }}">{{ $dag->dag }}</option>
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
                                                    <option value="" selected="" disabled="">Kies het Label</option>
                                                    @foreach ($labels as $label)
                                                        <option value="{{ $label->id }}">{{ $label->name }}</option>
                                                    @endforeach    
                                                </select>
                                            <div class="help-block"></div></div>
                                        </div>
                                    </div>{{-- End col6 --}}
                                    <div class="col-md-2 pt-3">
                                        {{-- <h3></h3>
                                        <span>
                                            <div class="btn btn-success addeventmore">
                                                <i class="fa fa-plus-circle"></i>
                                            </div>
                                        </span> --}}
                                    </div>{{-- End col2 --}}
                                 </div><!--end row--> 
                           <div class="text-xs-right float-right">
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

{{-- Extra veld sluitingsdag & label toevoegen --}}
<div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">
                <div class="col-md-5">
                    <div class="form-group">                  
                        <h5>Sluitingsdag</h5>
                        <div class="controls">
                            <select name="dagens[]" id="dagens" required="" class="form-control">
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
                        <h5>Label </h5>
                        <div class="controls">
                            <select name="label" id="label" class="form-control">
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
                    <span>
                        <div class="btn btn-danger removeeventmore">
                            <i class="fa fa-minus-circle"></i>
                        </div>
                    </span>
                </div>{{-- End col2 --}}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var counter = 0;
        $(document).on("click",".addeventmore",function(){
            var whole_extra_item_add = $('#whole_extra_item_add').html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });
        $(document).on("click",'.removeeventmore',function(event){
            $(this).closest(".delete_whole_extra_item_add").remove();
            counter -= 1
        });
    });
</script>
@endsection