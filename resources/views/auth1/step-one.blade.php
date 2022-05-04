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
                    <p class="h6">Completa il tuo profilo per procedere all'apertura del tuo account. I nostri
                        servizi, sono attualmente disponibili solo in Italia.
                    </p>
                </div>
                <div>
                    <form id="registerForm" class="tooltip-end-bottom" novalidate method="POST"
                        action="{{ route('step-one.store') }}">
                        @csrf

                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="pin"></i>
                            <x-jet-input id="città" class="form-control" type="text"
                                placeholder="Città o paese di residenza" name="city" :value="old('city')" required autofocus
                                autocomplete="city" required />
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="home-garage"></i>
                            <x-jet-input id="CAP" class="form-control" type="text" placeholder="CAP di residenza"
                                name="CAP" :value="old('CAP')" required autofocus autocomplete="CAP" required />
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="home"></i>
                            <x-jet-input id="address" class="form-control" type="text"
                                placeholder="Indirizzo di residenza" name="address" :value="old('address')" required autofocus
                                autocomplete="address" required />
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Prosegui</button>
                        <x-jet-validation-errors class="mb-2" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Side End -->
@endsection
