@extends('layout.primary')
@section('page_body')
  <!-- About Section -->
  <section class="section-padding" id="section_2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12 mx-auto">
          <form class="custom-form contact-form" action="#" method="post" role="form">
            <h4 class="text-center">Air Ticket</h4>
            <label for="input">Full Name </label>
            <input
              type="name"
              name="name"
              id="name"
              pattern="[^ @]*@[^ @]*"
              class="form-control"
              placeholder="Full Name"
              required
            />
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <label for="input"> E-Mail </label>
                <input
                  type="email"
                  name="first-name"
                  id="first-name"
                  class="form-control"
                  placeholder="E-Mail"
                  required
                />
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <label for="input"> Phone </label>
                <input
                  type="text"
                  name="last-name"
                  id="last-name"
                  class="form-control"
                  placeholder="Phone"
                  required
                />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <label for="input"> Where From </label>
                <input
                  type="email"
                  name="first-name"
                  id="first-name"
                  class="form-control"
                  placeholder="Where From"
                  required
                />
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <label for="input"> Where To </label>
                <input
                  type="text"
                  name="last-name"
                  id="last-name"
                  class="form-control"
                  placeholder="Where To"
                  required
                />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <label for="input">Date of Birth </label>
                <input type="date" name="first-name" id="first-name" class="form-control" />
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <label for="input"> Departure Date </label>
                <input type="date" name="last-name" id="last-name" class="form-control" />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <label for="input">Return Date </label>
                <input
                  type="date"
                  name="first-name"
                  id="first-name"
                  class="form-control"
                  placeholder="date"
                />
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <label for="input"> Adult (12+) </label>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <label for="input">Child(2-11) </label>
                <select class="form-control">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <label for="input"> Infant(0-2) </label>
                <select class="form-control">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
            </div>

            <label for="input"> Message </label>
            <textarea
              name="message"
              rows="5"
              class="form-control"
              id="message"
              placeholder="What can we help you?"
            ></textarea>

            <button type="submit" class="form-control">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section -->
@endsection