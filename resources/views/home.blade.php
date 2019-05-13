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

                    <a href="/t" class="btn btn-primary">Translations</a>
                    <a href="/logs" class="btn btn-primary">Logs</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
