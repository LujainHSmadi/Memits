@extends('layouts.adminMaster')

@section('content')



<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <!--Start Dashboard Content-->

        <div class="card mt-3">
            <div class="card-content">
                <div class="row row-group m-0">
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">{{$timeOffs->vacation_num}} <span class="float-right"><i
                                        class="fa fa-envira"></i></span></h5>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Vacation <i
                                    class="zmdi zmdi-long-arrow-up"></i></span></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">{{$timeOffs->sickLeave_num}} <span class="float-right"><i class="fa fa-envira"></i></span>
                            </h5>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Sick day <i class="fa fa-envira"></i></span></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">{{$timeOffs->workHome_num}} <span class="float-right"><i class="fa fa-envira"></i></i></span>
                            </h5>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Other <i
                                    class="zmdi zmdi-long-arrow-up"></i></span></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3 border-light">
                        <div class="card-body">
                            <h5 class="text-white mb-0">34 <span class="float-right"><i
                                        class="fa fa-envira"></i></span></h5>
                            <div class="progress my-3" style="height:3px;">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                            <p class="mb-0 text-white small-font">Total of Allowed Off-days <i class="zmdi zmdi-long-arrow-up"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header">User Data
                        <div class="card-action">
                            <div class="dropdown">
                                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                    data-toggle="dropdown">
                                    <i class="icon-options"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void();">Action</a>
                                    <a class="dropdown-item" href="javascript:void();">Another action</a>
                                    <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-borderless">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>email</th>
                                    <th>Birthday</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($birth as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>{{$user->date_of_birth}}</td>
                                </tr>
                                @endforeach

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->

        <!--End Dashboard Content-->

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>
    <!-- End container-fluid-->

</div>
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>



@endsection