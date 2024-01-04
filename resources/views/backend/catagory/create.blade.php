
@extends ('backend.layouts.app')
@section('content')

<!--start stepper one--> 
<main class="page-content">
<h6 class="text-uppercase">Non Linear</h6>
			    <hr>
				<div id="stepper1" class="bs-stepper">
				  <div class="card">
					
					
				    <div class="card-body">
					
					  <div class="bs-stepper-content">
						<form action="{{route('catagory.store')}}" method="POST">
                            @csrf
						  

							<div class="row g-3">
								<div class="col-12 col-lg-6">
									<label for="Name" class="form-label">Name</label>
									<input type="text" class="form-control" id="Name" placeholder="Name" name="name" value="{{old('name')}}">
								</div>
								
								</div>
								<div class="col-12 col-lg-6">
									<button class="btn btn-primary px-4" type="submit">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
								</div>
							</div>
                            </main>
                            <!---end row-->
                        @endsection