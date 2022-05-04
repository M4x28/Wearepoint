@extends('layouts.base')
@section('main')
    <!-- Right Side Start -->
    <div class="col-12 col-lg-12 h-100 pt-0 p-lg-0">
        <div class="min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep">
            <div class="sw-lg-60 px-5 boxform">
                <div class="sh-11 d-flex align-items-center justify-content-center">
                    <a href="https://wearepoint.net/" target="_blank">
                        <div class="logo-default"></div>
                    </a>
                </div>
                <div class="mb-5">
                    <p class="h6">Crea il tuo account e accedi a numerosi servizi.<br>
                        Sei già iscritto?
                        <a href="{{ route('login') }}">clicca qui</a>.
                    </p>
                </div>
                <div>
                    <form class="tooltip-end-bottom" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="user"></i>
                            <x-jet-input id="name" class="form-control" type="text" placeholder="Nome e Cognome"
                                name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="email"></i>
                            <x-jet-input id="email" class="form-control" type="email" placeholder="Email" name="email"
                                :value="old('email')" required />
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="lock-off"></i>
                            <x-jet-input id="password" class="form-control" type="password" placeholder="Password"
                                name="password" required autocomplete="new-password" />
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="lock-off"></i>
                            <x-jet-input id="password_confirmation" class="form-control" type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Ripeti Password" />
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="registerCheck" name="registerCheck"
                                    autocomplete="off" required />
                                <label class="form-check-label" for="registerCheck">
                                    Dichiaro di avere almeno 18 anni e di accettare i
                                    <a href="#">termini e condizioni</a> e l'<a href="#">informativa sulla privacy</a>.
                                </label>
                            </div>
                        </div>

                        <x-jet-validation-errors class="mb-4" />
                        <button type="submit" class="btn btn-lg btn-primary">Crea account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Side End -->
@endsection
