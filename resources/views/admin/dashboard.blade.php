@extends('layouts.admin.layouts')
@section('content')
@include('layouts.admin.includes.sidebar')

<!-- Header -->
@include('layouts.admin.includes.header')

<!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{$subscriptionCount}}</h3>

                                    <p>Subscriptions</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-comment-dollar"></i>
                                </div>
                                <a href="{{route('admin.all.subscription')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{$purchasedsubscriptionCount}}</h3>

                                    <p>Active Subscriptions</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-comment-dollar"></i>
                                </div>
                                <a href="{{route('admin.active.subscription')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3 class="text-white">{{$agentsCount}}</h3>

                                    <p class="text-white">Agent Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                 <a href="{{route('admin.agents')}}" class="small-box-footer"><span class="text-white"> More info</span> <i
                                        class="fas fa-arrow-circle-right text-white"></i></a>
                               
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{$requestCount}}</h3>

                                    <p>Agent Requests</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-reply"></i>
                                </div>
                                <a href="{{route('admin.agent.request')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                
                </div>
                <!-- /.container-fluid -->
            </section>
{{-- <div id="demos4"><script type="text/javascript" async data-short="demos4" width="100%" height="500px" src="https://app.cloudpano.com/public/shareScript.js"></script></div> --}}
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection
