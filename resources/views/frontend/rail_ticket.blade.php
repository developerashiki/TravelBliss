@extends('layout.primary')
@section('page_body')
<!-- About Section -->
<section class="section-padding" id="section_2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 mx-auto">
        @if(session('success'))
        <div class="alert alert-success">
          {!! session('success') !!}
        </div>
        @endif

        <form class="custom-form contact-form" action="{{ route('rail-ticket-booking') }}" method="post" role="form">
          @csrf

          <h4 class="text-center">Indian Railway Ticket</h4>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Leaving</label>
              <input type="text" name="leaving" id="leaving" value="{{ old('leaving') }}" class="form-control" placeholder="Leaving area" />
              @error('leaving')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Destination</label>
              <input type="text" name="destination" id="destination" value="{{ old('destination') }}" class="form-control" placeholder="Destination area" />
              @error('destination')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Date </label>
              <input type="date" name="date" id="date" value="{{ old('date') }}" class="form-control" />
              @error('date')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Adults </label>
              <select class="form-control" name="adult" id="">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
          </div>
            <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Child </label>
              <select class="form-control" name="child" id="">
                <option value="">0</option>
                <option value="">1</option>
                <option value="">3</option>
                <option value="">4</option>
              </select>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input"> Infant </label>
              <select class="form-control" name="infant" id="">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">E-Mail</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="E-Mail" />
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <label for="input">Phone</label>
              <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control" placeholder="phone" />
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