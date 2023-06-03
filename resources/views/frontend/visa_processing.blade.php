@extends('layout.primary')
@section('page_body')
 <!-- About Section -->
 <section class="section-padding" id="section_2">
    <div class="container">
      <div class="row">
        <div class="text-center pt-3">
          <h3><strong>Tourist Visa</strong></h3>
        </div>
        <div class="col-lg-3 col-12 text-center pt-4 i">
          <div>
            <a href="{{ route('cambodia_visa') }}">
              <img
                src="{{ asset('assets/images/Flag_of_Cambodia.svg') }}"
                class="img-fluid  w-100  text-center" id="height"
                alt=""
              />
              <h6 class="pt-2">Cambodia || Read More</h6>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-12 text-center pt-4" >
            <div>
              <a href="{{ route('china_visa') }}">
                <img
                  src="{{ asset('assets/images/China.png') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">China || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('dubai_visa') }}">
                <img
                  src="{{ asset('assets/images/dubai.jpg') }}"
                  class="img-fluid w-100 text-center"  id="height"
                  alt=""
                />
                <h6 class="pt-2">Dubai || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('indian_visa') }}">
                <img
                  src="{{ asset('assets/images/India.png') }}"
                  class="img-fluid w-100 text-center"
                  alt=""
                />
                <h6 class="pt-2">India || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('italy_visa') }}">
                <img
                  src="{{ asset('assets/images/italy.png') }}"
                  class="img-fluid w-100 text-center"
                  alt=""
                />
                <h6 class="pt-2">Italy || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('malaysia_visa') }}">
                <img
                  src="{{ asset('assets/images/Flag_of_Malaysia.svg.webp') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">Malaysia || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('philipine_visa') }}">
                <img
                  src="{{ asset('assets/images/Flag-Philippines.webp') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">Philipine || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('uk_visa') }}">
                <img
                  src="{{ asset('assets/images/United_Kingdom.png') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">UK || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('saudi_visa') }}">
                <img
                  src="{{ asset('assets/images/Flag-Saudi-Arabia.webp') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">Saudi-Arabia || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('singapure_visa') }}">
                <img
                  src="{{ asset('assets/images/download (1).png') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">Singapure || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('sirilanka_visa') }}">
                <img
                  src="{{ asset('assets/images/sirilanka.png') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">Srilanka || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('thiland_Visa') }}">
                <img
                  src="{{ asset('assets/images/thailand (2).jpg') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">Thailand || Read More</h6>
              </a>
            </div>
          </div>
    </div>
    </div>
  </section>
  <!-- About Section -->
@endsection