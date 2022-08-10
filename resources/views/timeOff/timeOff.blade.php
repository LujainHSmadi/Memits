@extends('layouts.adminMaster')

@section('content')
<!--End topbar header-->
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Create Admin</div>
                        <hr>
                        @if (session('status'))
                        <div class="alert alert-success">
                        
                            {{ session('status') }}<i class="fa fa-check" aria-hidden="true"></i>
                        
                        </div>
                        @endif
                        <form action="{{route('timeoff.store')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="input-1">Start Date</label>
                                <input required type="date" class="form-control" id="input-1" "
                                    name="startDate">
                            </div>
                           
                            <div class="form-group">
                                <label for="input-2">Reason</label>
                                <textarea required type="textarea" class="form-control" name="reason" id="input-2"
                                    placeholder="describe your reason"></textarea>
                            </div>
                            <div class="form-group">
                               <select class="form-control" aria-label="Default select example" name="type">
                                
                                <option value="sick">sick</option>
                                <option value="vacation">vacation</option>
                                <option value="other">other</option>
                            </select>

                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-light px-5 icon-lock" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>






            @endsection