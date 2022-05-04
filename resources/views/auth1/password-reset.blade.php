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
                  <p class="h6">Inserisci una nuova password per poter riaccedere al tuo account.
                  </p>
                </div>
                <div>
                  <form id="registerForm" class="tooltip-end-bottom" novalidate>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-cs-icon="lock-off"></i>
                        <input class="form-control" name="registerPassword" type="password" placeholder="Nuova password" autocomplete="off" required/>
                    </div>
                    <div class="mb-3 filled form-group tooltip-end-top">
                        <i data-cs-icon="lock-off"></i>
                        <input class="form-control" name="registerPassword" type="password" placeholder="Conferma nuova password" autocomplete="off" required/>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Salva password</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Right Side End -->
@endsection