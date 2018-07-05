@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Grupės</span>
                    <button onclick='location.href="{{ url('/home') }}"'
                        type="button"
                        class="btn btn-info float-right btn-space">
                        Pradinis
                    </button>
                    <button onclick='location.href="{{ url('/groups/create') }}"'
                        type="button"
                        class="btn btn-info float-right btn-space">
                        Nauja grupė
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
                                    <th scope="col">Grupės pavadinimas</th>
                                    <th scope="col">Kursas</th>
                                    <th scope="col">Dėstytojas</th>
                                    <th scope="col">Pradžia</th>
                                    <th scope="col">Pabaiga</th>
                                    <th scope="col">Paskaitos</th>
                                    <th scope="col">Redaguoti</th>
                                    <th scope="col">Trinti</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1 ?>
                                @foreach ($groups as $group)
                                    <tr>
                                        <th scope="row">{{ $counter++ }}</th>
                                        <td>{{ $group->name }}</td>
                                        <td>{{ $group->course->name }}</td>
                                        <td>{{ $group->user->name }}</td>
                                        <td>{{ $group->start_date }}</td>
                                        <td>{{ $group->end_date }}</td>
                                        <td nowrap><a href = "{{ url('lectures', $group->id) }}">{{ __('Paskaitos') }}</a></td>
                                        <td nowrap><a href = "{{ url('groups', $group->id) . '/edit' }}">{{ __('Redaguoti') }}</a></td>
                                        <td nowrap><a href = "{{ url('groups', $group->id) .'/delete' }}">{{ __('Ištrinti') }}</a></td>
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
