@extends('layouts.base')
@section('main')
    <!-- Right Side Start -->
    <div class="col-12 col-lg-12 h-100 pt-0 p-lg-0">
        <div class="min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep">
            <div class="sw-lg-60 px-5 boxform m-t">
                <div class="sh-11 d-flex align-items-center justify-content-center">
                    <a href="https://wearepoint.net/" target="_blank">
                        <div class="logo-default"></div>
                    </a>
                </div>
                <div class="mb-5">
                    <p class="h6">Inserisci la tua email con cui ti sei iscritto.<br>
                        Ricordi la password?
                        <a href="{{ route('login') }}">Accedi</a>.
                    </p>
                </div>
                <div>
                    <form id="registerForm" class="tooltip-end-bottom" novalidate method="POST"
                        action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="email"></i>
                            <input class="form-control" placeholder="Email" name="registerEmail" required />
                        </div>
                        <x-jet-validation-errors class="mb-4" />
                        <button type="submit" class="btn btn-lg btn-primary">Recupera account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Side End -->
@endsection
