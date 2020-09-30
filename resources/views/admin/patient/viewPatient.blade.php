@extends('layouts.admin_master')
@section('title')
@endsection
@section('content')
    <style>
        th{
            width: 150px;
        }
    </style>
    <div style="border: 2px solid #222" class="card m-4 ">
    	<div class="card-header bg-secondary text-white">
    		Patient Profile
    	</div>
    	<div class="card-body">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-2">
    		           <img width="150px" src="/Admin_images/Patient_images/{{ $patient->prescription_image}}" alt="">
    				</div>
    				<div class="col-md-4">
    					<table   >
    						<thead>
    							<tr>
                                    <th>Patient Name:</th>
                                    <td>{{ $patient->patient_name }}</td>
    							</tr>
    							<tr>
                                    <th>Patient ID:</th>
                                    <td>{{ $patient->patient_id }}</td>
                                    
    							</tr>
    							<tr>
                                    <th>Gender:</th>
                                    <td>{{ $patient->patient_gender }}</td>
                                    
    							</tr>
                                     <th>Age:</th>
                                    <td>{{ $patient->patient_age }}</td>
                                     
     							</tr>
     							<tr>
                                     <th>Blood Group:</th>
                                    <td>{{ $patient->group }}</td>
                                     
								 </tr>
								 <tr>
										<th>Patient Type: </th>
										<td>{{ $patient->patient_type}}</td>
								</tr>
							    <tr>
										<th>Meeting Date: </th>
										<td>{{ $patient->appoint_time}}</td>
								</tr>
                            </thead>
    					</table>
    				</div>
    				<div class="col-md-4">
    						<table>
								<tbody>
									<tr>
     								<td><h5 class="text-success" ><b>Contact Details:</b></h5></td>
     							</tr>
     							<tr>
                                     <th>Phone</th>
                                    <td>{{ $patient->patient_phone }}</td> 
     							</tr>
     							<tr>
                                     <th>District</th>
                                    <td>{{ $patient->patient_district }}</td> 
     							</tr>
     							<tr>
                                     <th>Upazila</th>
                                    <td>{{ $patient->patient_upazila }}</td> 
     							</tr>
     							<tr>
                                     <th>Union</th>
                                    <td>{{ $patient->patient_union }}</td> 
     							</tr>
								</tbody>
						    </table>	
					</div>
					<div class="col-md-6">
						<div class="card mt-4">
							<div class="card-header bg-primary text-white">
									<th>Patient Problem: </th>
							</div>
						<div class="card-body">
							<p>{{ $patient->current_diseases}}</p>
						</div>
						</div>		
					</div>
					<div class="col-md-6">
						<div class="card mt-4">
							<div class="card-header bg-info text-white">
									<th>Current Medicine: </th>
							</div>
						<div class="card-body">
							<p>{{ $patient->current_medicine}}</p>
						</div>
						</div>		
					</div>
    			</div>
    		</div>
    	</div>
    </div>











@endsection
