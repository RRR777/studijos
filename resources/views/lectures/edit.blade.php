@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="h2">Paskaitos informacijos koregavimas</span>
                    <h4>{{ $lecture->name }}</h4>
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
                            action="{{ url('groups/' . $group->id, 'lectures') . '/' . $lecture->id }}"
                            method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer01">
                                        Paskaitos pavadinimas:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="text"
                                        class="form-control"
                                        value="{{ $lecture->name }}"
                                        name="name"
                                        id="validationServer01"
                                        placeholder="Įveskite Paskaitos pavadinimą"
                                        required>
                                    <div class="invalid-feedback">
                                        * Įveskite Paskaitos pavadinimą!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer01">
                                        Paskaitos data:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="date"
                                        class="form-control"
                                        value="{{ $lecture->date }}"
                                        name="date"
                                        id="validationServer01"
                                        placeholder="Įveskite paskaitos datą"
                                        required>
                                    <div class="invalid-feedback">
                                        * Įveskite paskaitos datą!
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationServer01">
                                        Aprašymas:
                                    </label>
                                </div>
                                <div class="col-md-9 mb-9">
                                    <input type="text"
                                        class="form-control"
                                        value="{{ $lecture->description }}"
                                        name="description"
                                        id="validationServer01"
                                        placeholder="Paskaitos aprašymas"
                                        required>
                                    <div class="invalid-feedback">
                                        * Paskaitos aprašymas!
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Patvirtinti</button>
                            <button onclick='location.href="{{ url('/groups', $group->id) . '/lectures' }}"'
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
