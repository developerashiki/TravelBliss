@extends('layout.primary')
@section('page_body')
<!-- About Section -->
<section class="section-padding" id="section_2">
  <div class="container">
    <div class="row">
      <h3 class="text-center">Domestic And International Air Ticket</h3>
      <p class="pt-3">TravelBliss International offers the best online Air Ticketing support all over Bangladesh. The team of TravelBliss International is known as flight
        expert in Bangladesh. No matter if you want to buy cheapest domestic air ticket or International ticket, you can get support from TravelBliss
        International. We have created different types of package on the air ticketing service.</p>
      <div class="col-lg-6 col-12 mx-auto pt-4">
        <h5>Why TravelBliss International For Air Ticket Reservation ?</h5>
        <ul class="pt-2">
          <li>
            Our primary concern is assuring customer oriented air ticketing
            services in a time-saving and affordable way. Due to support and
            digitized methods, our service is preferable by many regular
            traveler.
            </li>
          <li>
            Cheapest air travel experience when you are booking with
            TravelBliss International.
          </li>
          <li>
            Though online reservation in Bangladesh is quite complicated, we
            have made the whole easy to access.
          </li>
          <li>
            Fastest air ticket booking with 100% guaranteed.
          </li>
          <li>
            We help to buy the most affordable ticket with highest
            comfortable seat.
          </li>
          <li>
            There are different types of flight available with us. No need to
            take hassle for searching on various platform/company.
          </li>
          <li>
            No matter if you want business class or economic class, we are
            ready to ensure considering your comfort.            
          </li>
          <li>
            Always first-class ticket with maximum facilities as you are
            referred by TravelBliss International.
          </li>
          <li>
            Na hassle to cancel or updating the time or date.
          </li>
        </ul>
        <p>
          Hope it is enough to make your journey comfortable with highest
          discounted facilities.
        </p>
      </div>
       <div class="col-lg-6 col-12 mx-auto pt-4">
        @if(session('success'))
        <div class="alert alert-success">
          {!! session('success') !!}
        </div>
        @endif
        <h5 class="text-center">Information for booking Air Ticket</h5>
        <form class="custom-form contact-form mt-4 " action="{{ route('air-ticket-booking') }}" method="post" role="form">
          @csrf
          <div class="form-group">
            <label for="input">Full Name </label>
            <input type="name" name="name" id="name" value="{{ old('name') }}" class="form-control input-sm" placeholder="Full Name" />
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
          <textarea name="message" rows="3" class="form-control" id="message" placeholder="What can we help you?"></textarea>

          <button type="submit" class="form-control">Send</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- About Section -->
@endsection