@extends('layouts.backend')

@section('title', 'Register Member')

@section('content')

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Input Group</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
					<div class="btn-group">
                        <div class="ms-auto"><a href="{{route('members.index')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-arrow"></i>Go Back</a></div>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Basic example</h6>
						<hr/>
						<div class="card">
                        <div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">User Registration</h5>
								</div>
								<hr>
								<form class="row g-3" action="{{ route('members.store')}}" method="POST" enctype="multipart/form-data">
								@method('POST')
								@csrf
									<div class="col-md-8">
										<label for="inputLastName1" class="form-label">Full Name</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastName1" name="fullname" placeholder="Full_Name" required/>
										</div>
									</div>
									
								
                                    <div class="col-md-4">
										<label for="inputLastName2" class="form-label">Date of Birth</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-calendar'></i></span>
                                        <input type="text" name="dob" placeholder="2000-04-08
"  class="form-control border-start-0"  required/>
										</div>
									</div>

                                    <div class="col-md-4">
										<label for="inputLastName1" class="form-label">City</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastName1" name="city" placeholder="city" required/>
										</div>
									</div>
									<div class="col-md-4">
										<label for="inputLastName2" class="form-label">State</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastName2" name="state" placeholder="state" required/>
										</div>
									</div>
                                    <div class="col-md-4">
										<label for="inputLastName2" class="form-label">Country</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-calendar'></i></span>
                                        <input type="text" name="country" class="form-control border-start-0" id="inputLastName2" placeholder="country" required/>
										</div>
									</div>

                                    <div class="col-md-4">
										<label for="inputLastName1" class="form-label">Phone</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone'></i></span>
											<input type="tel" name="phone" class="form-control border-start-0" id="inputLastName1" placeholder="08065273564" required/>
										</div>
									</div>
									<div class="col-md-4">
										<label for="inputLastName2" class="form-label">Email Address</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastName2" name="email" placeholder="Email" required/>
										</div>
									</div>
                                    <div class="col-md-4">
										<label for="inputLastName2" class="form-label">Member since</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-calendar'></i></span>
                                        <input type="text" name="member_since" class="form-control border-start-0" id="inputLastName2" placeholder="2000" required/>
										</div>
									</div>
                                    <div class="col-md-4">
										<label for="inputLastName1" class="form-label">Occupation</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastName1" name="occupation" placeholder="occupation" required/>
										</div>
									</div>
									
                                
                                    




                                    <div class="col-md-6">
										<label for="inputLastName1" class="form-label">Photo</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone'></i></span>
                                        <input class="form-control" name="image" type="file" id="formFile">
										</div>
									</div>
								
                                    
                                    <div class="col-6">
                                    <label for="inputLastName2" class="form-label">Sex</label>
										<div class="form-check">
                                        <input class="form-check-input" value="Male" type="radio" name="sex" id="flexRadioDefault1" required>
							
											<label class="form-check-label" for="gridCheck2">Male</label>
                                            <br>
                                            <input class="form-check-input" value="Female" type="radio" name="sex" id="flexRadioDefault1" required>
						
											<label class="form-check-label" for="gridCheck2">Female</label>
										</div>
									</div>
                                    <div class="col-6">
                                    <label for="inputLastName2" class="form-label">Marital Status</label>
										<div class="form-check">
                                        <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio1" value="Single" required>
											<label class="form-check-label" for="gridCheck2">Single</label>
                                            <br>
                                            <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio1" value="Married" required>
											<label class="form-check-label" for="gridCheck2">Married</label>
										</div>
									</div>


							
									<div class="col-6">
										<label for="inputAddress3" class="form-label">Address1</label>
										<textarea class="form-control" name="address1" id="inputAddress3" placeholder="Enter Address" rows="3"></textarea>
									</div>
                                    <div class="col-6">
										<label for="inputAddress3" class="form-label">Address 2</label>
										<textarea class="form-control" name="address2" id="inputAddress3" placeholder="Enter Address 2" rows="3"></textarea>
									</div>
									<!-- <div class="col-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck2">
											<label class="form-check-label" for="gridCheck2">Check me out</label>
										</div>
									</div> -->
                                  
									
									<div class="col-6">
										<button type="submit" class="btn btn-success px-5">Register</button>
									</div>
								</form>
							</div>
						</div>
					
					
					</div>
				</div>
				<!--end row-->
			</div>
		</div>




@endsection