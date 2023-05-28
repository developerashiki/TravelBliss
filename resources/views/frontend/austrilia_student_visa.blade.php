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
                                <h4 class="display-1 text-primary mb-5 animated slideInDown"> <b>Visa Processing in Australia</b></h4>
                                <p class="text-black">Click Here To Get PDF File.</p>
                                <a href="{{ asset('assets/pdf/Australia.pdf') }}" class="btn btn-primary py-sm-2 px-sm-4">Download</a>
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
                  <h4 class="my-0 font-weight-normal text-center">OUR SERVICE:</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Full visa application processing</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Interview/Appointment date provide
                    </span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Personal documentation assessment
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Individual counselling & advice session at our air conditioned office with free refreshments
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Interview/appointment brief by our visa expert
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Free Home delivery / collection ( 2 Pax min, subject to availability)
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Processing time 7 working days (Not including submission day)
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Price: 7,000 BDT + Embassy Fee 13,500 Per applicant
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">You provide us with embassy submitble documents
                      </span> 
                      </li>
                  </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">CONTACT</h4>
                </div>
                <div class="card-body">
                
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Call: +8801873 17 17 17 ( 11am to 7pm, Fridays Off)</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Email: travelblissinternational@gmail.com
                       </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Facebook: www.Facebook.com/travelblissinternational
                      </span> 
                     </li>  
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Documents Needed for Application</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Passport 12 months Validity</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Photo: 3 pcs, 35mm X 45mm, Bio-metric</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">All Marksheets and Certificates</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Translation &; G. Embassy Attestation
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Recommendation letters
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Motivation letterIntake:1 Dec to 15 Jan
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Euro pass CV
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Language Certificate (IELTS 6.5/Language A2)
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Experience Certificate (2 Years for DAAD scholarship)
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