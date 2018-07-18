@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Ar tikrai norite ištrinti šią paskaitą?</span>
                    <h4>Paskaita: {{ $lecture->name . "\n"}}</h4>
                    <button onclick='location.href="{{ url('/home') }}"'
                        type="button"
                        class="btn btn-info float-right btn-space">
                        Pradinis
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
                        <form method ="post" action = "{{ url('/groups', $group->id) . '/' . 'lectures/' . $lecture->id }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Eil.Nr.</th>
                                    <th scope="col">Grupė</th>
                                    <th scope="col">Paskaitos data</th>
                                    <th scope="col">Paskaitos pavadinimas</th>
                                    <th scope="col">Aprašymas</th>
                                    <th scope="col">ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1 ?>
                                <tr>
                                    <th scope="row">{{ $counter++ }}</th>
                                    <td>{{ $lecture->group->name }}</td>
                                    <td>{{ $lecture->date }}</td>
                                    <td>{{ $lecture->name }}</td>
                                    <td>{{ $lecture->description }}</td>
                                    <td>{{ $lecture->id }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-info">Ištrinti</button>
                        <button onclick='location.href="{{ url('/groups', $group->id) . '/lectures' }}"'
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
