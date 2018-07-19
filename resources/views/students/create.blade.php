@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Įveskite informaciją apie Studentą</span>
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
                            action="{{ url('/students') }}"
                            method="post">
                            {{ csrf_field() }}

                            {{-- <input name="type" type="hidden" value="2"> --}}

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer01">
                                        Studento vardas:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="text"
                                        class="form-control"
                                        value="{{ old('name') }}"
                                        name="name"
                                        id="validationServer01"
                                        placeholder="Įveskite studento vardą"
                                        required>
                                    <div class="invalid-feedback">
                                        * Įveskite studento vardą!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer02">
                                        Studento pavardė:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="text"
                                        class="form-control"
                                        value="{{ old('lastName') }}"
                                        name="lastName"
                                        id="validationServer02"
                                        placeholder="Įveskite studento pavardę"
                                        required>
                                    <div class="invalid-feedback">
                                        * Įveskite studento pavardę!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer03">
                                        Studento el.paštas:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="email"
                                        class="form-control"
                                        value="{{ old('email') }}"
                                        name="email"
                                        id="validationServer03"
                                        placeholder="Įveskite studento el.pašto adresą"
                                        required>
                                    <div class="invalid-feedback">
                                        * Įveskite studento el.pašto adresą!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer04">
                                        Studento telefonas:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="tel"
                                        class="form-control"
                                        value="{{ old('phone') }}"
                                        name="phone"
                                        id="validationServer04"
                                        placeholder="Įveskite studento telefono numerį"
                                        >
                                    <div class="invalid-feedback">
                                        * Įveskite studento telefono numerį!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer05">
                                        Studento slaptažodis:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="password"
                                        class="form-control"
                                        name="password"
                                        id="validationServer05"
                                        placeholder="Įveskite studento slaptažodis"
                                        >
                                    <div class="invalid-feedback">
                                        * Įveskite studento slaptažodis!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer06">
                                        Pakartokite slaptažodį:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="password"
                                        class="form-control"
                                        name="password_confirmation"
                                        id="validationServer06"
                                        placeholder="Pakartokite slaptažodį"
                                        >
                                    <div class="invalid-feedback">
                                        * Pakartokite slaptažodį!
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info">Patvirtinti</button>
                            <button onclick='location.href="{{ url('/students') }}"'
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
