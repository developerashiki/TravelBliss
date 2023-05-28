@extends('layout.primary')
@section('page_body')
 <!-- About Section -->
 <section class="section-padding" id="section_2">
    <div class="container">
      <div class="row">
        <div class="text-center pt-3">
          <h3><strong>Student Visa</strong></h3>
        </div>
        <div class="col-lg-3 col-12 text-center pt-4 i">
          <div>
            <a href="{{ route('austrilia_student_visa') }}">
              <img
                src="{{ asset('assets/images/Austrilia.jpg') }}"
                class="img-fluid  w-100  text-center" id="height"
                alt=""
              />
              <h6 class="pt-2">Australia || Read More</h6>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-12 text-center pt-4" >
            <div>
              <a href="{{ route('canada_visa') }}">
                <img
                  src="{{ asset('assets/images/Canada.png') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">Canada || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('china_student_visa') }}">
                <img
                  src="{{ asset('assets/images/China.png') }}"
                  class="img-fluid w-100 text-center"
                  alt=""
                />
                <h6 class="pt-2">China || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('india_student_visa') }}">
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
              <a href="">
                <img
                  src="{{ asset('assets/images/Italy_(1946–2003).png') }}"
                  class="img-fluid w-100 text-center"
                  alt=""
                />
                <h6 class="pt-2">Italy || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="">
                <img
                  src="{{ asset('assets/images/Flag_of_Romania.png') }}"
                  class="img-fluid w-100 text-center"
                  alt=""
                />
                <h6 class="pt-2">Romania || Read More</h6>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-12 text-center pt-4">
            <div>
              <a href="{{ route('uk_student_visa') }}">
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
              <a href="{{ route('usa_student_visa') }}">
                <img
                  src="{{ asset('assets/images/United-States-of-America.jpg') }}"
                  class="img-fluid w-100 text-center" id="height"
                  alt=""
                />
                <h6 class="pt-2">USA || Read More</h6>
              </a>
            </div>
          </div>
    
    </div>
    </div>
  </section>
  <!-- About Section -->
@endsection