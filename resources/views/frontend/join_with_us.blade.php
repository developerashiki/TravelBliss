@extends('layout.primary')
@section('page_body')

    <div class="col-lg-12 mx-auto">
        <div class="container">
            <div class="row">
                <div class="text-center pt-5">
                    <a href="">
                        <img
                          src="{{ asset('assets/images/hairing.jpg') }}"
                          class="img-fluid w-75"
                          alt=""
                        />
                      </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mx-auto">
        <div class="container">
            <div class="row">
                <div class="text-center pt-4">
                      <h6>
                        We are regularly hiring tourism personnel in full time & part time basis. If you are interested to join with  our team, please submit your information bellow.
                      </h6>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-12 mx-auto">
              @if(session('success'))
              <div class="alert alert-success">
                {!! session('success') !!}
              </div>
              @endif
      
              <form class="custom-form contact-form" action="{{ route('rail-ticket-booking') }}" method="post" role="form">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <label for="input">Full Name</label>
                    <input type="text" name="leaving" id="leaving" value="{{ old('leaving') }}" class="form-control" placeholder="Full Name " />
                    @error('leaving')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
      
                  <div class="col-lg-6 col-md-6 col-12">
                    <label for="input">Email</label>
                    <input type="text" name="destination" id="destination" value="{{ old('destination') }}" class="form-control" placeholder="Email" />
                    @error('destination')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <label for="input"> Phone Number </label>
                    <input type="number" name="number" id="number" value="{{ old('number') }}" class="form-control" />
                    @error('number')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <label for="input"> Address </label>
                    <input type="address" name="address" id="address" value="{{ old('address') }}" class="form-control"  placeholder="Address"/>
                    @error('address')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                </div> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label">Field you are interested in</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                  <label class="form-check-label" for="gridRadios1">
                                    Air Ticket Reservation
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                  <label class="form-check-label" for="gridRadios2">
                                    Visa Processing Exceutive
                                  </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                      Business Development Exceutive/Manager
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                      Tour Planner
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                      Tourist Guide
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Photographer
                                    </label>
                                  </div>
                              </div>
                            </div>
                         </fieldset>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <label for="input"> Upload Your CV (docx/pdf) </label>
                      <input type="file" name="address" id="address" value="" class="custom-file-input">
                    </div>
                  </div> 
                <button type="submit" class="form-control mt-3">Send</button>
              </form>
            </div>
          </div>
        </div>
      </section>

@endsection