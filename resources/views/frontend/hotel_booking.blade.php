@extends('layout.primary')
@section('page_body')
<!-- About Section -->
<section class="section-padding" id="section_2">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-6 mx-auto">
        @if(session('success'))
        <div class="alert alert-success">
          {!! session('success') !!}
        </div>
        @endif
        <form class="custom-form contact-form" action="{{ route('hotel-book') }}" method="post" role="form">
          @csrf

          <h4 class="text-center">Hotel Booking </h4>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-3">
              <label for="input"> Location </label>
              <select class="form-control" name="location" id="">
                <option value="Bogra">Bogra</option>
                <option value="Bandarban">Bandarban</option>
                <option value="Barisal">Barisal</option>
                <option value="Chattogram">Chattogram</option>
                <option value="CoxsBazar">Cox's Bazar</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Jessore">Jessore</option>
                <option value="Kuakata">Kuakata</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangamati">Rangamati</option>
                <option value="Sylhet">Sylhet </option>
                <option value="Saintmartin">Saintmartin</option>
              </select>
              @error('location')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-4 col-md-6 col-3">
              <label for="input"> Room </label>
              <select class="form-control" name="room" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              @error('room')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-4 col-md-6 col-3">
              <label for="input"> Guest </label>
              <select class="form-control" name="guest" id="">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Check In</label>
              <input type="date" name="check_in" id="leaving" class="form-control" />
              @error('check_in')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Check Out</label>
              <input type="date" name="check_out" id="leaving" class="form-control" placeholder="phone" />
              @error('check_out')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">E-Mail</label>
              <input type="email" name="email" id="leaving" class="form-control" placeholder="E-Mail" />
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Phone</label>
              <input type="text" name="phone" id="leaving" class="form-control" placeholder="phone" />
              @error('phone')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <label for="input"> Message </label>
          <textarea name="message" rows="3" class="form-control" id="message" placeholder="What can we help you?"></textarea>
          <button type="submit" class="form-control">Send</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- About Section -->
@endsection