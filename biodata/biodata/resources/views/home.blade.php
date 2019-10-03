@extends('layout/navbar')

@section('title', 'Home')

@section('content')

{{-- alert --}}
<div class="container mt-auto">
        <div class="row">
          <div class="col-md-12">
                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
          </div>
        </div>
      </div>
      {{-- akhir alert --}}
    
      <!-- jumbotron -->
      <div class="container mt-3">
        <div class="jumbotron">
          <div class="row">
            <div class="col-md-6">
              <h1 class="text-primary">Zepri Adi</h1>
              <p class="lead">
                  lorem ipsum sit amet consectetur
                <br />Necessitatibus <span class="web"> modi eum veniam</span> <br />
                Quo nobis !
                <br />
              </p>
              <form>
                <div class="form-row align-items-center">
                  <div class="col-auto">
                    <label class="sr-only" for="inlineFormInput">Name</label>
                    <input type="text" class="form-control mb-2 inputan" id="inlineFormInput"
                      placeholder="Cari Sesuatu Yang Anda Suka" />
                  </div>
    
    
                  <div class="col-auto">
                    <button type="button" class="btn btn-primary  mb-2 ml-3 inputan2">
                      Cari
                    </button>
                  </div>
                </div>
              </form>
    
              <div class="row">
                <div class="col-md-6">
                  <hr class="garis_jumbotron" />
                </div>
              </div>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo nobis
              quam facere eveniet qui ipsam quasi obcaecati excepturi nam maxime,
              eos voluptates aut hic a placeat necessitatibus modi eum veniam.
            </div>
    
            <div class="col-md-6 mb-3">
              <img src="img/bgjumbotron.png" alt="" class="gambar" srcset="" />
            </div>
          </div>
        </div>
      </div>
      {{-- akhir jumbotron --}}

      {{-- panel --}}
      <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-md-8 info-panel">
                <div class="row text-justify">
                  <div class="col-lg">
                    <img src="/img/employee.png" alt="employee" srcset="" />
                    <h4>placeat</h4>
                    <p>lorem ipsum</p>
                  </div>
                  <div class="col-lg">
                    <img src="img/hires.png" alt="high res" srcset="" />
                    <h4>voluptates</h4>
                    <p>lorem ipsum</p>
                  </div>
                  <div class="col-lg">
                    <img src="img/security.png" alt="security" srcset="" />
                    <h4>obcaecati</h4>
                    <p>lorem ipsum</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
       {{-- akhir info panel --}}
@endsection