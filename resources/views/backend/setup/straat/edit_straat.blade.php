@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">{{ $editData->name }} Aanpassen Straat</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate="" method="POST" action="{{route('leden.straten.update', $editData->id)}}">
                        @csrf
                        <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Naam Straat <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" value="{{ $editData->name }}" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
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