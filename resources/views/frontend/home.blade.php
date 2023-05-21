@extends('layout.primary')
@section('page_body')
<main>
  <section class="news-detail-header-section text-center">
    <div class="section-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12"></div>
      </div>
    </div>
  </section>
  <!-- our services -->
  <div id="cards_landscape_wrap-2">
    <div class="container">
      <div class="row">
        <h2 class="mb-2">Our Servics</h2>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img
                    src="{{ asset('assets/images/airticket.jpg') }}"
                    alt=""
                  />
                </div>
                <div class="text-container">
                  <h6>Air Ticket</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img
                    src="{{ asset('assets/images/tourist-vis.jpg') }}"
                    alt=""
                  />
                </div>
                <div class="text-container">
                  <h6>Visa Processing</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img
                    src="{{ asset('assets/images/student-visa (1).jpg') }}"
                    alt=""
                  />
                </div>
                <div class="text-container">
                  <h6>Student Visa</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img
                    src="{{ asset('assets/images/makkah.jpg') }}"
                    alt=""
                  />
                </div>

                <div class="text-container">
                  <h6>Hajj & Umrah Visa</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img
                    src="{{ asset('assets/images/package-tour.jpg') }}"
                    alt=""
                  />
                </div>
                <div class="text-container">
                  <h6>Package Tour</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img
                    src="{{ asset('assets/images/schooiing.webp') }}"
                    alt=""
                  />
                </div>
                <div class="text-container">
                  <h6>Schooling Visa</h6>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- our services -->
  <section class="section-padding" id="section_3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12 text-center mb-4">
          <h4>OUR DESTINATIONS</h4>
          <h6>CHOOSE YOUR NEXT DESTINATION</h6>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 ">
          <div class="custom-block-wrap">
            <img src="{{ asset('assets/images/Thailand-Travel-Guide-Hero-1-951x512.jpg') }}" class="custom-block-image img-fluid" alt="" />
            <div class="custom-block">
              <div class="custom-block-body">
                <h5>Thailand || 37000 BDT</h5>
                <h6 class="text-success">4 Days Bangkok Saver</h6>
                <p>Included: Air ticket, Hotel, Breakfast, Tours, Airport transfers</p>
              </div>
              <a href="donate.html" class="custom-btn btn">MORE INFO</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
          <div class="custom-block-wrap">
            <img src="{{ asset('assets/images/cat-ba-to-hanoi-via-lan-ha-bay-1024x640.jpg') }}" class="custom-block-image img-fluid" alt="" />
            <div class="custom-block">
              <div class="custom-block-body">
                <h5>Veatnam || 37000 BDT</h5>
                <h6 class="text-success">4 Days Bangkok Saver</h6>
                <p>Included: Air ticket, Hotel, Breakfast, Tours, Airport transfers</p>
              </div>
              <a href="donate.html" class="custom-btn btn">MORE INFO</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
          <div class="custom-block-wrap">
            <img src="{{ asset('assets/images/A-journey-through-Singapore.webp') }}"class="custom-block-image img-fluid" alt="" />
            <div class="custom-block">
              <div class="custom-block-body">
                <h5>Singapur || 37000 BDT</h5>
                <h6 class="text-success">4 Days Bangkok Saver</h6>
                <p>Included: Air ticket, Hotel, Breakfast, Tours, Airport transfers</p>
              </div>
              <a href="donate.html" class="custom-btn btn">MORE INFO</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
</main>
<div class="counter">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="employees">
          <p class="counter-count">879</p>
          <p class="employee-p">Employee</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="customer">
          <p class="counter-count">954</p>
          <p class="customer-p">Customer</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="design">
          <p class="counter-count">1050</p>
          <p class="design-p">Design</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="order">
          <p class="counter-count">652</p>
          <p class="order-p">Orders</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection