@extends('layout.primary')
@section('page_body')

<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/images/travelling-concept-with-group-travelers-miniature.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="display-1 text-primary mb-5 animated slideInDown"> <b>Visa Processing in India</b></h4>
                                <p class="text-black">Click Here To Get PDF File.</p>
                                <a href="{{ asset('assets/pdf/India-1.pdf') }}" class="btn btn-primary py-sm-2 px-sm-4">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> --}}
    </div>
</div>
<!-- Carousel End -->
    <div class="col-lg-12 mx-auto pt-5">
      <div class="container">
        <div class="row">
          <div class="card-deck mb-3 ">
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Intake's in Indian University</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-title  mt-3 mb-4">Basic Documents:-</h6>
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Intake: September</span> 
                      </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Features For India</h4>
                </div>
                <div class="card-body">
                
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Without IELTS</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Very low tuition Fee</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Long gap allowed</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   100% confirm visa
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Scholarship upto 100%
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   Easy communication
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Low living cost
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> No sponsor needed
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   No service Charge
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Partial tuition fee payment
                    </span> 
                    </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Documents Needed</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Passport Copy</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Digital Photo</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Birth Certificate</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Scan copy of all certificate
                      </span> 
                      </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Tuition Fee and University list:</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Tuition fee may vary from subject to subject 20000 Rupe to 1 lac rupee per semester 6 month Semester</span> 
                      </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">University List:</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Brainwave University, Barasat, Kolkata</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> JIS University, Agarpara, Kolkata, West Bengal.</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   Chandigarh University, Chandigarh, Madhyamgram, Kolkata</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  RIMT University, MandiGobindgarh, Punjab.
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   Parul University, Vadodara, Gujarat.
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">  Ganpat University, Highway, Kherva, Gujarat.
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">   CT University, Ludhiana, Punjab.

                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">  Geeta University, Kanipla, Kurukshetra (Haryana)
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">  Guru Khashi University,Talwandi Sabo, Punjab.
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">   Lovely professional Institute, Jaipur, Rajasthan
                    </span> 
                    </li>
                </ul>
                </div>
              </div>
          </div>
      </div>
      </div>
    </div>
@endsection