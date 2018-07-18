@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Paskaitos</span>
                    <h4>Grupė: {{ $group->name . "\n"}}</h4>
                    <button onclick='location.href="{{ url('/home') }}"'
                        type="button"
                        class="btn btn-info float-right btn-space">
                        Pradinis
                    </button>
                    <button onclick='location.href="{{ url('/groups', $group->id) . '/lectures/create' }}"'
                        type="button"
                        class="btn btn-info float-right btn-space">
                        Nauja Paskaita
                    </button>
                    <button onclick='location.href="{{ url('/groups') }}"'
                        type="button"
                        class="btn btn-info float-right btn-space">
                        Atgal
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
                                    <th scope="col">Grupė</th>
                                    <th scope="col">Paskaitos data</th>
                                    <th scope="col">Paskaitos pavadinimas</th>
                                    <th scope="col">Aprašymas</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Redaguoti</th>
                                    <th scope="col">Trinti</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1 ?>
                                @foreach ($lectures as $lecture)
                                    <tr>
                                        <th scope="row">{{ $counter++ }}</th>
                                        <td>{{ $lecture->group->name }}</td>
                                        <td>{{ $lecture->date }}</td>
                                        <td>{{ $lecture->name }}</td>
                                        <td>{{ $lecture->description }}</td>
                                        <td>{{ $lecture->id }}</td>
                                        <td nowrap><a href = "{{ url('groups/' . $group->id, 'lectures') . '/' . $lecture->id . '/edit' }}">{{ __('Redaguoti') }}</a></td>
                                        <td nowrap><a href = "{{ url('groups/'. $group->id, 'lectures') . '/' . $lecture->id .'/delete' }}">{{ __('Ištrinti') }}</a></td>
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
