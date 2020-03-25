@extends('layouts.app')

@section('content')
<div class="container-fluid">


    <!-- Content Row -->
    <div class="row">
        <!-- Pending Requests Card Example -->
    </div>

    <!-- Content Row -->


    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">

            <div class="card shadow mb-4">

                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>  <a href="{{ route('catebook.create') }}" class="d-none d-sm-inline-block btn  btn-primary "><i
                        class="fa fa-plus fa-sm text-white-50"></i> เพิ่มข้อมูล</a>


                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="">
                        <table class="table table-bordered " id="dataTable" width="100%" cellspacing="2">
                            <thead class="thead-light">
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสหนังสือ</th>
                                    <th>ชือหมวดหมู่</th>
                                    <th>ตัวเลือก</th>

                                </tr>
                            </thead>
                            <tfoot class="thead-light">
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสหนังสือ</th>
                                    <th>ชือหมวดหมู่</th>
                                    <th>ตัวเลือก</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($data as $cate)
                                <tr>
                                    <td>000{{ $cate->id_typecate}} </td>
                                    <td>{{ $cate->code_book}}</td>
                                    <td>{{ $cate->name_catebook}}</td>
                                    <td>
                                        <a href="" data-id="" data-toggle="modal" data-target="#info"
                                            class="btn btn-info btn-circle btn-sm">
                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" > info </button> -->
                                            {{-- <i class="fas fa-info-circle"></i> --}}
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="" class="btn btn-warning btn-circle btn-sm">
                                            {{-- <i class="fas fa-exclamation-triangle"></i> --}}
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-circle btn-sm" data-id="" data-toggle="modal"
                                            data-target="#delete">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">

                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
        </div>


        <div class="container-fluid">

            <!-- Page Heading -->
            {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <a href="{{ route('catebook.create') }}" class="d-none d-sm-inline-block btn  btn-primary "><i
                        class="fa fa-plus fa-sm text-white-50"></i> เพิ่มข้อมูล</a>

            </div> --}}

            <!-- DataTales Example -->
            {{-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> --}}


                {{-- <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped " id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>

                                </tr>
                            </thead>
                            <tfoot class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($data as $cate)
                                <tr>
                                    <td>000{{ $cate->id}} </td>
                                    <td>{{ $cate->code_book}}</td>
                                    <td>{{ $cate->name_catebook}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div> --}}
            {{-- </div> --}}


        </div>
        <!-- /.container-fluid -->
    </div>



    @endsection

