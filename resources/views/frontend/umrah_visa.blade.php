@extends('layout.primary')
@section('page_body')
 <!-- About Section -->
 <section class="section-padding" id="section_2">
    <div class="container">
      <div class="row">
        <div class="text-center pt-3">
          <h3><strong>Hajj & Umrah</strong></h3>
        </div>
        <div class="col-lg-6 col-12 text-center pt-4">
          <div>
            <a href="">
              <img
                src="{{ asset('assets/images/umra_1.jpg') }}"
                class="img-fluid w-100 text-center"
                alt=""
              />
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-12 text-center pt-4">
            <div>
              <a href="">
                <img
                  src="{{ asset('assets/images/umrah_2.jpg') }}"
                  class="img-fluid w-100 text-center"
                  alt=""
                />
              </a>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- About Section -->
@endsection