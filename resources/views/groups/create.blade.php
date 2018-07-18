@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Įveskite informaciją apie Grupę</span>
                    <button onclick='location.href="{{ url('/home') }}"'
                        type="button"
                        class="btn btn-info float-right">
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
                        <form class="needs-validation"
                            novalidate
                            action="{{ url('/groups') }}"
                            method="post">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer01">
                                        Grupės pavadinimas:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="text"
                                        class="form-control"
                                        value="{{ old('name') }}"
                                        name="name"
                                        id="validationServer01"
                                        placeholder="Įveskite grupės pavadinimą"
                                        required>
                                    <div class="invalid-feedback">
                                        * Įveskite grupės pavadinimą!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer02">Kursas:</label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <select class="form-control"
                                        value="{{ old('course->name') }}"
                                        name="course_id"
                                        id="validationServer02"
                                        required>
                                        <option value="">Pasirinkite kursą</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">
                                                {{ $course->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        * Pasirinkite kursą!
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer02">Dėstytojas:</label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <select class="form-control"
                                        value="{{ old('user->name') }}"
                                        name="lector_id"
                                        id="validationServer02"
                                        required>
                                        <option value="">Pasirinkite dėstytoją</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        * Pasirinkite dėstytoją!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer01">
                                        Grupė startuoja:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="date"
                                        class="form-control"
                                        value="{{ old('start_date') }}"
                                        name="start_date"
                                        id="validationServer01"
                                        placeholder="Įveskite pradžios datą"
                                        required>
                                    <div class="invalid-feedback">
                                        * Įveskite pradžios datą!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer01">
                                        Pabaigos data:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="date"
                                        class="form-control"
                                        value="{{ old('end_date') }}"
                                        name="end_date"
                                        id="validationServer01"
                                        placeholder="Įveskite pabaigos datą"
                                        required>
                                    <div class="invalid-feedback">
                                        * Įveskite pabaigos datą!
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Patvirtinti</button>
                            <button onclick='location.href="{{ url('/groups') }}"'
                                type="button"
                                class="btn btn-info btn-space">
                                Atsisakyti
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection
