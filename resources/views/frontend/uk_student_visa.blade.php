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
                                <h4 class="display-1 text-primary mb-5 animated slideInDown"> <b>Visa Processing in UK</b></h4>
                                <p class="text-black">Click Here To Get PDF File.</p>
                                <a href="{{ asset('assets/pdf/UK.pdf') }}" class="btn btn-primary py-sm-2 px-sm-4">Download</a>
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
                  <h4 class="my-0 font-weight-normal text-center">Intake's</h4>
                </div>
                <div class="card-body">
                  <h6 class="card-title  mt-3 mb-4">Basic Documents:-</h6>
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> January</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  May</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  September</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> November
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Honours: 3 years
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Honours: 4 Years includes one year’s foundation.
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> Masters: 2 years includes 6 month pre-masters
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> # No application fee
                    </span> 
                    </li>
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> # With IELTS or without IELTS
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> # No service Charge
                    </span> 
                    </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">For Documents Needed for Application</h4>
                </div>
                <div class="card-body">
                
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">All Mark sheets and Certificates</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> CV</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> SOP (Statement of Purpose)</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Bank Statement 28 days
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Medical Report
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  # Result Minimum: SSC & HSC: 3.00 and Hons 2.75
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> # 5 years gap allowed for (Masters)
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> # Scholarship upto 5000 pound
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> # Foundation course & Pre-masters course available
                      </span> 
                      </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Costing In UK</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Embassy fee: 39,000 tk (non-refunable)
                    </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Salary Certificate.</span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Medical fee: 7,250 tk (non-refunable)</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   Health Insurance: 300 pound
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Half Yearly Tuition fee: 4000-8000 Pound
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   Air Ticket: 50 to 70 k
                      </span> 
                      </li>  <li class="list-group-item"><span class="bi bi-arrow-right-short">   No service charge (But should have guarantee paper that student will continue) For Student
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">  Sponsor In London Out of London
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">  For Student 11385 P. 9135 Pound + 1 Year tuition

                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">   For Dependent 7605 Pound 6120 Pound
                    </span> 
                    </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Language Test Honours Masters</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Academic IELTS 5.5/6 5.5/6
                    </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  UKVIIELTS 4/5 5.5/6
                    </span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Medical fee: 7,250 tk (non-refunable)</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   Duo-lingo 95 95 # Without IELTS (Student will face online language test)
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Foundation course (after HSC) with 1 year tuition fee.
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">    Pre-masters for 6 month (After Hons) tuition fee 8,000 pound.
                      </span> 
                      </li>  <li class="list-group-item"><span class="bi bi-arrow-right-short">    International Year one. Tuition fee
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">  (Language training charge 15,000/- non-refundable)
                    </span> 
                    </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Document Check List for Medical</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"># Fee 7,250 Tk
                    </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> # UK Address  
                    </span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  # UK Phone Number</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">    # Original Passport
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  # Copy of passport
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> # Picture 1 copy UK size (35/45 Reg. 600, Light grey or plain cream background)
                      </span> 
                      </li> 
                    </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Document Check List for Embassy</h4>
                </div>
                <div class="card-body">
               
                  <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> Travel Document (All Passport & All TravelHistory)
                    </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> All Academic Documents mentioned inCAS
 
                    </span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  IELTS</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> CAS (Confirmation of Acceptance forStudies)
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"> IOM (Medical Certificate)
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">  Bank Statement & Solvency Certificate (Not required for Scholarship Student)
                      </span> 
                      </li> 
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   Sponsor Declaration (Not applicable for Scholarship Student)
                    </span> 
                    </li> 
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> Source of Income (Not applicable for Scholarship Student)
                    </span> 
                    </li> 
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> Proof of Income (Not applicable for Scholarship Student)
                    </span> 
                    </li> 
                    </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">UK Enlisted Bank List</h4>
                </div>
                <div class="card-body">
               
                    <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">AB Bank Limited
                    </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">BRAC Bank Ltd
                    </span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">IFIC Bank Ltd.</span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Dhaka Bank Ltd
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">   Eastern Bank Limited
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Trust Bank Ltd.
                    </span> 
                    </li> <li class="list-group-item"><span class="bi bi-arrow-right-short"> One Bank Ltd
                    </span> 
                    </li> <li class="list-group-item"><span class="bi bi-arrow-right-short">HSBC Ltd
                    </span> 
                    </li> <li class="list-group-item"><span class="bi bi-arrow-right-short">Mutual trust Bank Ltd
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">The City Bank
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">One Bank Ltd
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">National Credit and Commerce Bank Ltd
                    </span> 
                    </li>
                     <li class="list-group-item"><span class="bi bi-arrow-right-short">Shahjalal Islami Bank Ltd
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Southeast Bank Ltd
                    </span> 
                    </li> 
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Standard Chartered Bank
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">State Bank of India
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Prime Bank Ltd
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Pubali Bank Ltd
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Woori Bank Ltd
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Bank Alfalah Limited
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Standerd Bank Ltd
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short">Premier Bank Limited
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> Commercial Bank of Ceylon Ltd
                    </span> 
                    </li>
                    <li class="list-group-item"><span class="bi bi-arrow-right-short"> Hong Kong and Shanghai Banking Corporation
                    </span> 
                    </li>
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">University Preferred without IELTS</h4>
                </div>
                <div class="card-body">
               
                    <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">University for the creative Arts
                    </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Saint Mary London
                    </span> 
                      </li>  
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">University of Worchester
                    </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">University of south wales
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">University of Greenwich
                      </span> 
                      </li>
                      <li class="list-group-item"><span class="bi bi-arrow-right-short">Roehampton University
                    </span> 
                </ul>
                </div>
              </div>
              <div class="card mb-4 box-shadow">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-center">Our Enlisted University</h4>
                </div>
                <div class="card-body">
               
                    <ul class="list-unstyled mt-3 mb-4 list-group list-group-flush">
                      <li class="list-group-item"><span class="bi bi-arrow-right-short"># Oxford Brookes University # Cranfield University # Sheffield Hallam University # Brunel University # De Montfort University # Canterbury Christ Church University # University of South Wales(USW) # Bournemouth University # University of the West of Scotland # Aston University # University of Leicester # University of Portsmouth # North Umbria University # Manchester Metropolitan University # University of York # Newcastle University # City, University of London # Regent’s University London # Edinburgh Napier University # Glasgow Caledonian University # University of Stirling # University of East Anglia UEA # Middlesex University # Bangor University # Robert Gordon University # University of Central Lancashire # BPP University # University of Dundee # University of Bristol # University of Leeds # Goldsmiths, University of London # University of Buckingham # University of Worcester # Leeds Beckett University # London South Bank University # University of Chester # University of Derby # Kingston University # University of Bolton # University of Sunderland # Coventry University # University of Southampton # University of Aberdeen # Birkbeck, University of London # University of Surrey # Birmingham City University # University of Bradford # University of Bedfordshire # Anglia Ruskin University # University of Sussex # University of Westminster # London Metropolitan University # University of Northampton # University of Hertfordshire # University of West London # University of Ulster # Arts University Bournemouth(AUB) # Cardiff University # Kingston University # Liverpool John Moores University # Plymouth University # University of Lincoln # University of Liverpool # University of Aberdeen # University of Essex # University of Nottingham # University of Roehampton # University of Strathclyde # University of the Arts London(UAL) # University of the West of England (UWEBristol) # St Mary’s University , Twickenham London # Teesside University # Southampton Solent University # Swansea University
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