@extends('layout.backend.main-containt')
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{-- <div class="content-header">
      <div class="container-fluid bg-primary">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">xyz</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
        <!-- /.content-header -->

        <!-- Main content -->
        {{-- <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section> --}}
        <!-- /.content -->
        {{-- profile Update form --}}
        <!-- Main content -->
        <section class="content pt-3">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">View All Schools</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/no</th>
                                            <th>Name</th>
                                            <th>level</th>
                                            <th>Address</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                            <th>Add Jobs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schools as $school )
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $school->school_title }}</td>
                                            <td>{{ $school->address }}</td>
                                            <td>{{ $school->level }}</td>
                                            <td>{{ $school->details }}</td>
                                            <td>
                                                <a class="btn btn-light" href="">View</a>
                                                <a  class="btn btn-success" href="">Edit</a>
                                                <a  class="btn btn-danger" href="">Delete</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="{{ route('jobs.create',['id'=>$school->id]) }}">Add Jobs</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    {{-- profile Update end --}}

                </div>
            </div>
            <!-- /.row -->
    </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
@endsection
