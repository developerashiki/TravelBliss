@extends('layout.primary')
@section('page_body')
  <!-- Pay Section -->
  <section class="section-padding" id="section_2">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <h3><strong>Pay Us</strong></h3>
          <h6>For Bank Payment</h6>
        </div>
        <div class="col-lg-6 col-12 text-center">
          <div>
            <img
              src="{{ asset('assets/images/EBL_Registered_Corporate_Logo.svg.png') }}"
              class="custom-text-box-image img-fluid w-25 text-center"
              alt=""
            />
          </div>
          <div>
            <p class="pt-5"><strong>Estern Bank Ltd.</strong></p>
            <p>Account Name: Travelbliss International</p>
            <p>A/C No. 1071070000801</p>
            <p>Routing No. 095262987</p>
            <p>Mirpur Branch</p>
          </div>
        </div>
        <div class="col-lg-6 col-12 text-center">
          <div>
            <img
              src="{{ asset('assets/images/uc united-commercial-bank-limited.jpg') }}"
              class="custom-text-box-image img-fluid w-50 text-center"
              alt=""
            />
          </div>
          <div>
            <p class="pt-4"><strong>United Commercial Bank PLC</strong></p>
            <p>Account Name: Travelbliss International</p>
            <p>A/C No. 1071070000801</p>
            <p>Routing No. 095262987</p>
            <p>Mirpur Branch</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-padding" id="section_2">
    <div class="container">
      <div class="row">
        <div class="text-center pt-5">
          <h3><strong>Mobile Banking:</strong></h3>
        </div>
        <div class="col-lg-4 col-12 text-center">
          <div>
            <img
              src="{{ asset('assets/images/Nagad-Logo.wine.png') }}"
              class="custom-text-box-image img-fluid w- text-center"
              alt=""
            />
          </div>
        </div>
        <div class="col-lg-4 col-12 text-center">
          <div>
            <img
              src="{{ asset('assets/images/BKash-bKash2-Logo.wine.svg') }}"
              class="custom-text-box-image img-fluid w-100 text-center"
              alt=""
            />
          </div>
        </div>
        <div class="col-lg-4 col-12 text-center pt-4">
          <div>
            <img
              src="{{ asset('assets/images/dutch-bangla-rocket-logo-B4D1CC458D-seeklogo.com (1).png') }}"
              class="custom-text-box-image img-fluid w-75 text-center"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Pay Section -->
@endsection