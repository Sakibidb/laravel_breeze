@extends ('backend.layouts.app')
@section('content')

<!--start stepper one-->
<main class="page-content">
	<h6 class="text-uppercase">Non Linear</h6>
	<hr>
	<div id="stepper1" class="bs-stepper">
		<div class="card">


			<div class="card-body">
				<div>
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
				</div>

				<div class="bs-stepper-content">

					<form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data" >
						@csrf


						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Name" class="form-label">Name</label>
								<input type="text" class="form-control" id="Name" placeholder="Name" name="name" value="{{old('name')}}">
							</div>
							<div class="col-12 col-lg-6">
								<label for="description" class="form-label">Description</label>
								<input type="text" class="form-control quill-editor-full" id="description" placeholder="description" name="description" value="{{old('description')}}">
							</div>

							<label class="form-check-label" for="flexCheckSuccess">Tags</label>
							<div class="form-check form-check-success">
								<label class="form-check-label" for="flexCheckSuccess">Full slave</label>
								<input class="form-check-input" type="checkbox" value="{{old('available')}}" id="flexCheckSuccess">

							</div>
							<div class="form-check form-check-success">
								<label class="form-check-label" for="flexCheckSuccess">Half Slave</label>
								<input class="form-check-input" type="checkbox" value="half" id="flexCheckSuccess">
							</div>
							<div class="col-12 col-lg-6">
								<label for="description" class="form-label">Uplode</label>
								<input type="file" class="form-control quill-editor-full" id="description" placeholder="description" name="image" value="{{old('image')}}">
							</div>
							<label class="form-check-label" for="flexCheckSuccess">Tags</label>
							
							<div class="form-check form-check-success">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioSuccess">
								<label class="form-check-label" for="flexRadioSuccess">
									Available
								</label>
							</div>

							<div class="form-check form-check-success">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioSuccess">
								<label class="form-check-label" for="flexRadioSuccess">
								Not Available
								</label>
							</div>

							<div class="col-12 col-lg-6">
								<label for="price" class="form-label">Price</label>
								<input type="text" class="form-control" id="price" placeholder="price" name="price" value="{{old('price')}}">
							</div>
							<div class="col-12 col-lg-6">
								<label for="InputLanguage" class="form-label">Catagory ID</label>
								<select class="form-select" id="InputLanguage" aria-label="Default select example" name="catid">
									<option selected>Select One</option>

									@foreach($cats as $cat)
									<option value="{{$cat->id}}" {{old('catagory')==$cat->id?'selected':''}}>{{$cat->name}}</option>
									@endforeach

								</select>
							</div>

						</div>
						<div class="col-12 col-lg-6">
							<button class="btn btn-primary px-4" type="submit">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
						</div>
				</div>
</main>
<!---end row-->
@endsection