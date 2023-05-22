@extends('layout.primary')
@section('page_body')
<!-- About Section -->
<section class="section-padding" id="section_2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-12 mx-auto">
        @if(session('success'))
        <div class="alert alert-success">
          {!! session('success') !!}
        </div>
        @endif

        <form class="custom-form contact-form" action="{{ route('air-ticket-booking') }}" method="post" role="form">
          @csrf

          <h4 class="text-center">Air Ticket</h4>
          <div class="form-group">
            <label for="input">Full Name </label>
            <input type="name" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Full Name" />
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> E-Mail </label>
              <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="E-Mail" />
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Phone </label>
              <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone" />
              @error('phone')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Where From </label>
              <input type="text" name="where_from" id="where_from" value="{{ old('where_from') }}" class="form-control" placeholder="Where From" />
              @error('where_from')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Where To </label>
              <input type="text" name="where_to" id="where_to" value="{{ old('where_to') }}" class="form-control" placeholder="Where To" />
              @error('where_to')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Date of Birth </label>
              <input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control" />
              @error('dob')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Departure Date </label>
              <input type="date" name="departure_date" value="{{ old('departure_date') }}" id="departure_date" class="form-control" />
              @error('departure_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Return Date </label>
              <input type="date" name="return_date" id="return_date" value="{{ old('return_date') }}" class="form-control" placeholder="date" />
              @error('return_date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Adult (12+) </label>
              <select class="form-control" name="adult">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Child(2-11) </label>
              <select class="form-control" name="child">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Infant(0-2) </label>
              <select class="form-control" name="infant">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>

          <label for="input"> Message </label>
          <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

          <button type="submit" class="form-control">Send</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- About Section -->
@endsection