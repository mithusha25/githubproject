@extends('layouts.app')
   
@section('content')
<div class="container">
    <a href="/signout" style="position: absolute; right: 10px;"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection