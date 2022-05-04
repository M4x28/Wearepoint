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
                    <p class="h6">Inserisci le tue credenziali per accedere.<br>
                        Non sei ancora sei ancora iscritto?
                        <a href="{{ route('register') }}">clicca qui</a>.
                    </p>
                </div>
                <div>
                    <form class="tooltip-end-bottom" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="email"></i>
                            <input class="form-control" placeholder="Email" name="email" autocomplete="off" required />
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="lock-off"></i>
                            <input class="form-control pe-7" name="password" type="password" placeholder="Password"
                                autocomplete="off" required />
                            <a class="text-small dim position-absolute t-3 e-3"
                                href="{{ route('password.request') }}">Dimenticata?</a>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="form-check">
                                <x-jet-checkbox id="remember_me" name="remember" class="form-check-input" />
                                <label class="form-check-label" for="loginCheck">
                                    Resta connesso su questo dispositivo (Non dovrai effettuare nuovamente il login da
                                    questo dispositivo).
                                </label>
                            </div>
                        </div>
                        <x-jet-validation-errors class="mb-4" />
                        <button type="submit" class="btn btn-lg btn-primary">Accedi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Side End -->
@endsection
