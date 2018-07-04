@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Ar tikrai norite ištrinti šį kursą?</span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        @include('layouts.errors')
                        <form method ="post" action = "{{ url('/courses', $course->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        <table class="table table-sm table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">Eil.Nr.</th>
                                    <th scope="col">Pavadinimas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter = 1 ?>
                                    <tr>
                                        <th scope="row">{{ $counter++ }}</th>
                                        <td nowrap>{{ $course->name }}</td>
                                    </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-info">Ištrinti</button>
                        <button onclick='location.href="{{ url('/courses') }}"'
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
