@extends('admin.layouts.layout')

@section('content')


<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Footer Information</h1>
   
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Update Footer Information</h4>
          </div>
          <div class="card-body">

          	<form action="{{route('admin.footer-info.update',1)}}"
          		method="post" 
          		enctype="multipart/form-data" 
          	>
          		@csrf
          		@method('put')

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Information</label>
                <div class="col-sm-12 col-md-7">
                  <textarea  id="" class="form-control" 
                    style="height: 100px;"
                    name="info" 
                  >{{$footerInfo->info}}</textarea>
                </div>
              </div>

	            <div class="form-group row mb-4">
	              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Copyright</label>
	              <div class="col-sm-12 col-md-7">
	                <input type="text" class="form-control"
	                	name="copy_right" 
	                	value="{{$footerInfo->copy_right}}" 
	                >
	              </div>
	            </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Powered by</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control"
                    name="powered_by" 
                    value="{{$footerInfo->powered_by}}" 
                  >
                </div>
              </div>

	            <div class="form-group row mb-4">
	            	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
	            	<div class="col-sm-12 col-md-7">
	            		<button class="btn btn-primary">Update</button>
	            	</div>
	            </div>

          	</form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection