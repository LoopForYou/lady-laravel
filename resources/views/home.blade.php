@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/" target="_blank">Client Check-in</a> <br><br>
                    <a href="/clients" target="_blank">Client List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
