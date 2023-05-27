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
                                <h4 class="display-1 text-primary mb-5 animated slideInDown"> <b>Visa Processing in Canada</b></h4>
                                <p class="text-black">Click Here To Get PDF File.</p>
                                <a href="{{ asset('assets/pdf/CANADA-tourist-vica.pdf') }}" class="btn btn-primary py-sm-2 px-sm-4">Download</a>
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
                  <h4 class="my-0 font-weight-normal text-center">Canada Visa Requirements:</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-title  mt-3 mb-4">Basic Documents:-</h6>
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Passport with at least two blank pages, valid for at least 6 months.</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> All previous passports.</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Personal Bank Statement / Company Bank Statement of Last Six (06) Months.</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Bank Solvency Certificate.
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Recent two (02) copy color photographs. (35 mm X 45 mm, White background), not older than 03 months
                      </span> 
                      </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">For Business Person:</h4>
                </div>
                <div class="card-body">
                
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Renewal Trade License Copy.</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Certificate of Incorporation and Memorandum of your Company (only pages, where the director’s names are mentioned). (If you are an owner- director of a company)</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Office pad / Company Letter Head Pad</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Import & Export Certificate – if any
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> TIN / Income Tax Certificate – if any
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Application:Summer Intake:1 Dec to 15 Jan
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Acceptance letter: February/March
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Rejection letter: March/April
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Class Start: March/April
                      </span> 
                      </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">For Job Holder:</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> No Objection Certificate (NOC)</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Salary Certificate.</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Payslips – if any</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  O (Government Order) for Official Passport
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  BMDC certificate for Doctor
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  BAR council Certificate for Advocate
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