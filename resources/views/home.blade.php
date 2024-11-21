@extends('adminlte::page')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">{{$userCount}}</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="fas fa-map-marker-alt"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Areas</span>
                    <span class="info-box-number">{{$areaCount}}</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col">
            <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fas fa-hospital"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Hospitals</span>
                    <span class="info-box-number">{{$hospitalCount}}</span>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col">
            <div class="info-box bg-purple">
                <span class="info-box-icon"><i class="fas fa-user-tie"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Customers</span>
                    <span class="info-box-number">{{$customerCount}}</span>
                </div>
            </div>
        </div>
    
        <div class="col">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-user"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">PHSS</span>
                    <span class="info-box-number">{{$phssCount}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
