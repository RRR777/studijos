@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Ar tikrai norite ištrinti šią grupę?</span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        @include('layouts.errors')
                        <form method ="post" action = "{{ url('/groups', $group->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        <table class="table table-sm table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">Eil.Nr.</th>
                                    <th scope="col">Pavadinimas</th>
                                    <th scope="col">Kursas</th>
                                    <th scope="col">Dėstytojas</th>
                                    <th scope="col">Pradžia</th>
                                    <th scope="col">Pabaiga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1 ?>
                                    <tr>
                                        <th scope="row">{{ $counter++ }}</th>
                                        <td nowrap>{{ $group->name }}</td>
                                        <td>{{ $group->course->name }}</td>
                                        <td>{{ $group->user->name }}</td>
                                        <td>{{ $group->start_date }}</td>
                                        <td>{{ $group->end_date }}</td>
                                    </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-info">Ištrinti</button>
                        <button onclick='location.href="{{ url('/groups') }}"'
                            type="button"
                            class="btn btn-info">
                            Atsisakyti
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
