@extends('layouts.adminDashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <h3><span class="profile-text">Welcome back, {{ Auth::user()->name }}</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
