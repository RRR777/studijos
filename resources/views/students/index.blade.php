@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Studentai</span>
                    <button onclick='location.href="{{ url('/home') }}"'
                        type="button"
                        class="btn btn-info float-right btn-space">
                        Pradinis
                    </button>
                    <button onclick='location.href="{{ url('/students/create') }}"'
                        type="button"
                        class="btn btn-info float-right btn-space">
                        Naujas studentas
                    </button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        @include('layouts.errors')
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Eil.Nr.</th>
                                    <th scope="col">Vardas</th>
                                    <th scope="col">Pavardė</th>
                                    <th scope="col">El.Telefonas</th>
                                    <th scope="col">El.paštas</th>
                                    <th scope="col">Grupė</th>
                                    <th scope="col">Paskaitos</th>
                                    <th scope="col">Redaguoti</th>
                                    <th scope="col">Trinti</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1 ?>
                                @foreach ($students as $student)
                                    <tr>
                                        <th scope="row">{{ $counter++ }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->lastName }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ 'ID ' . $student->id }}</td>
                                        <td></td>
                                        <td nowrap><a href = "{{ url('students', $student->id) . '/edit' }}">{{ __('Redaguoti') }}</a></td>
                                        <td nowrap><a href = "{{ url('students', $student->id) .'/delete' }}">{{ __('Ištrinti') }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
