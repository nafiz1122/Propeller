@extends('layouts.admin_master')
@section('title')
@endsection
@section('content')
<div class="container">
    <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{URL::to('/storeTeam') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Team Team member Name</label>
                        <input type="text" class="form-control" name="team_name" placeholder="Enter Member Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Member Position</label>
                         <input type="text" class="form-control" name="team_position" placeholder="Enter Member Position">
                    </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Member Short Details</label>
                        <textarea name="team_details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Member Image</label><br>
                        
                        {{-- <canvas style="width:80px;" id="myImageCanvus"></canvas> --}}
                        <input type="file" name="team_image" accept="/myImageCanvus" onchange="readURL(this);" >
                        <canvas id="myImageCanvus" alt="dd" src="#" class="img pull-right" style="height:80px;border:1px solid #fefefe">
                        </canvas>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
            </div>
        </div>
        </div>
{{-- model end --}}
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
                                        <li class="active">Add Team Member</li>
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
                        <h3>Team Member</h3>
                        <div class="button m-2" style="float: right;" >
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Add Member
                            </button>
                        </div>
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
                        <div class="col-md-6">
                        @if(Session::has('message'))
                            <p class="alert alert-info mt-2">{{ Session::get('message') }}</p>
                        @endif
                        </div>

                    </div>
                    <br>
                {{--  if want to use Datatable id="mydatatable"  --}}
                <table  class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        {{-- <th>Category ID</th> --}}
                        <th>Member Name</th>
                        <th>Member position</th>
                        <th>Member Details</th>
                        <th>Member Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($teams as $team)
                <tbody>
                    <tr>
                        <td>{!! $team->team_name !!}</td>
                        <td>{!! $team->team_position !!}</td>
                        <td>{{ $team->team_details }}</td>
                        <td>
                            <img style="width:120px;" src="Admin_images/Team_images/{{ $team->team_image}}" alt="">
                        </td>
                        <td>
                            <button class="btn btn-info btn-sm" >Edit</button>
                            <button class="btn btn-danger btn-sm" >Delete</button>
                        </td>
                    </tr>

                </tbody>
                @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
