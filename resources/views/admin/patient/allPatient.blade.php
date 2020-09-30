@extends('layouts.admin_master')
@section('title')
@endsection
@section('content')

<div class="container">
    <!-- Button trigger modal -->
    <div class="row">
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li class="active">All Patient</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-head">
                        <h3>All Patient</h3>
                        <!-- --------error message------------ -->
                            <div class="col-md-6">
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
                        <!-- --------error message------------ -->
                        {{--  --------NOTIFICATION------  --}}
                        @if(Session::has('message'))
                            <p class="alert alert-info mt-2">{{ Session::get('message') }}</p>
                        @endif

                    </div>
                    <br>
                {{--  if want to use Datatable id="mydatatable"  --}}
                <table  class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        {{-- <th>Category ID</th> --}}
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Patient Phone</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
 
                <tbody>
                    @foreach ($patient as $row)
                    <tr>
                        <td></td>
                        <td>{{ $row->patient_name }}</td>
                        <td>{{ $row->patient_phone }}</td>
                        <td>{{ $row->patient_gender }}</td>
                        <td>
                           <a class="btn btn-warning btn-sm" href="{{ url('/singlePatient/'.$row->id) }}">View</a>
                            <button class="btn btn-info btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm" >Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
