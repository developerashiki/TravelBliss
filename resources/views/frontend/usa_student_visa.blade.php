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
                                <h4 class="display-1 text-primary mb-5 animated slideInDown"> <b>Visa Processing in USA</b></h4>
                                <p class="text-black">Click Here To Get PDF File.</p>
                                <a href="{{ asset('assets/pdf/USA.pdf') }}" class="btn btn-primary py-sm-2 px-sm-4">Download</a>
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
                  <h4 class="my-0 font-weight-normal text-center">Intake's Deadlines For USA University</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Fall (September) intake: Application start from April</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Spring (January) intake: Application start from August
                    </span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Summer (June) intake: Usually starts around May</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Deadlines varies university to university N.B: Fall intake is main and Summer for language (ESL) course only
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">F1 Visa = Student
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">F2 Visa = Dependent
                    </span> 
                    </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">For Features For USA</h4>
                </div>
                <div class="card-body">
                
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Easy way for Permanent Residence</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Credit Transfer facility
                    </span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Spouse can applyPad</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> After visa tuition fee payment
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> 2/4 Years visa together
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Visa mostly depends on embassy interview
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Refused can apply multiple times
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Apply more than one university together.
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Low GPA or CGPA allowed
                      </span> 
                      </li>
                      <li class="list-group-item text-danger text-center">N.B: 1 st year on campus work allowed
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
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Passport Copy</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Digital Photo (2/2)</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Birth Certificate/NID</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Scan copy of all certificate
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Recommendation letter (if need)
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Motivational letter (if need) Language: IELTS/TOEFL: (depends on university)
                      </span> 
                      </li>
                      <li>Overall 6.0 (No band less than 5.5) for Hons</li>
                      <li>Overall 6.5 each bandnot less than 6.0 (Masters)</li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> GMAT for MBA
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">SAT for BSc mathematical
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">GRE for MSc mathematical subject
                    </span> 
                    </li>
                    <li>Sponsor: 1 year tuition Fee + Living cost= Minimum 25 lac 12,000 USD more for dependent = Minimum 10 lac</li>
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Tuition Fee: Yearly minimum 8 lac to 20 lac.(Depend on university & subject)
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> Scholarship: Depends on IELTS, TOFEL,GRE, GMAT score& research publication
                    </span> 
                </ul>
                </div>
              </div>
          </div>
      </div>
      </div>
    </div>
@endsection