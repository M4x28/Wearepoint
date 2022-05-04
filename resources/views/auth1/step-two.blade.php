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
                    <p class="h6">Completa il tuo profilo per procedere all'apertura del tuo account.
                    </p>
                </div>
                <div>
                    <form id="registerForm" class="tooltip-end-bottom" novalidate method="POST"
                        action="{{ route('step-two.store') }}">
                        @csrf

                        <label class="form-label">Data di nascita</label>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="calendar"></i>
                            <x-jet-input id="dateMask" class="form-control" type="text" name="birthday" :value="old('birthday')"
                                required autofocus autocomplete="birthday" required />
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="content"></i>
                            <x-jet-input id="CF" class="form-control" type="text" placeholder="Codice Fiscale" name="CF"
                                :value="old('CF')" oninput="this.value = this.value.toUpperCase()" required autofocus
                                autocomplete="CF" required />
                        </div>
                        <label class="form-label">Recapito telefonico</label>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <i data-cs-icon="mobile"></i>
                            <x-jet-input id="hourInternationalMask" class="form-control" type="text" name="phone"
                                :value="old('phone')" required autofocus autocomplete="phone" required />
                        </div>
                        <x-jet-validation-errors class="mb-2" />
                        <button type="submit" class="btn btn-lg btn-primary">Prosegui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Right Side End -->
@endsection
