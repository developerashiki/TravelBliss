@extends('layout.primary')
@section('page_body')
<!-- ======= Contact Section ======= -->
<section class="section-padding section-bg" id="section_2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-12">
        <div>
          <h3 class="mb-2 text-center">Contact Us</h3>
          <div class="pt-3">
            <h6 class="text-center"><u>OFFICE ADDRESS</u></h6>
            <p class="text-center">
              TravelBliss International, M M Complex(4th Floor), Mirpur Saree Egaro Bus Stand,
              1216
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-padding section-bg">
  <div class="row">
    <div class="col-lg-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d98197.96699970095!2d90.28727927372636!3d23.84334420652709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.8329839!2d90.37849539999999!4m5!1s0x3755c1d2a51db0d9%3A0x14315fed5cdf86d3!2stravel%20bliss%20international%20map!3m2!1d23.8241704!2d90.36406389999999!5e0!3m2!1sbn!2sbd!4v1683386063368!5m2!1sbn!2sbd" class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</section>

<section class="contact-section section-padding" id="section_6">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
        <div class="contact-info-wrap">
          <h2>Get in touch</h2>

          <div class="contact-image-wrap d-flex flex-wrap">
            <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid avatar-image" alt="" />

            <div class="d-flex flex-column justify-content-center ms-3">
              <p class="mb-0">Clara Barton</p>
              <p class="mb-0"><strong>HR & Office Manager</strong></p>
            </div>
          </div>

          <div class="contact-info">
            <h5 class="mb-3">Contact Infomation</h5>

            <p class="d-flex mb-2">
              <i class="bi-geo-alt me-2"></i>
              TravelBliss International, M M Complex(4th Floor), Mirpur Saree Egaro Bus Stand,
              1216
            </p>

            <p class="d-flex mb-2">
              <i class="bi-telephone me-2"></i>
              <a href="tel: 120-240-9600"> +8801617220000 </a>
            </p>

            <p class="d-flex">
              <i class="bi-envelope me-2"></i>
              <a href="mailto:info@yourgmail.com"> donate@charity.org </a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-12 mx-auto">

        <form method="post" action="{{ route('contact-form') }}" role="form" class="custom-form contact-form">
          @csrf
          <h2 class="text-center">Contact Us</h2>
          <label for="">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Name" />
          <label for="">E-Mail</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail" />
          <label for="">Phone</label>
          <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" />

          <textarea name="message" rows="2" class="form-control" id="message" placeholder="What can we help you?"></textarea>
          <button type="submit" class="form-control">Send Message</button>
        </form>

      </div>
    </div>
  </div>
</section>
<!-- ======= Contact Section ======= -->
@endsection