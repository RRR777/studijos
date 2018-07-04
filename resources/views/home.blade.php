@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jūs sėkmingai prisijungėte!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="{{ url('/courses') }}">Kursai</a></li>
                        <li>Grupės</li>
                        <li>Paskaitos</li>
                        <li>Studentai</li>
                        <li>Žinutės</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
