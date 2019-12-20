@extends('master/logintemplate')

@section('title','Daftar')

@section('app')
<div id="app">
    <section class="section">
      <div class="container mt-2">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="{{ asset('img/Pertamina.png') }}" alt="logo" width="275">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST">

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>

                  <div class="form-divider">
                    Fungsi & Bagian
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Fungsi</label>
                      <select class="form-control selectric">
                        <option>IT</option>
                        <option>HSE</option>
                        <option>Kilang</option>
                        <option>Keuangan</option>
                        <option>HC</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Bagian</label>
                      <select class="form-control selectric">
                        <option>Bagian 1</option>
                        <option>Bagian 2</option>
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection