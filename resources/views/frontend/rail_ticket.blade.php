@extends('layout.primary')
@section('page_body')
  <!-- About Section -->
  <section class="section-padding" id="section_2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-6 mx-auto">
          <form class="custom-form contact-form" action="#" method="post" role="form">
            <h4 class="text-center">Indian Railway Ticket</h4>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <label for="input">Leaving</label>
                <input
                  type="text"
                  name="leaving"
                  id="leaving"
                  class="form-control"
                  placeholder="Dhaka"
                />
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <label for="input">Destination</label>
                <input
                  type="text"
                  name="leaving"
                  id="leaving"
                  class="form-control"
                  placeholder="Kolkata"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12">
                <label for="input"> Date </label>
                <input
                  type="date"
                  name="date"
                  id="date"
                  class="form-control"
                  placeholder="E-Mail"
                  required
                />
              </div>

              <div class="col-lg-3 col-md-6 col-3">
                <label for="input"> Adults </label>
               <select class="form-control" name="" id="">
                <option value="">0</option>
                <option value="">1</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
               </select>
              </div>
              <div class="col-lg-3 col-md-6 col-3">
                <label for="input"> Child </label>
               <select class="form-control" name="" id="">
                <option value="">0</option>
                <option value="">1</option>
                <option value="">3</option>
                <option value="">4</option>
               </select>
              </div>
              <div class="col-lg-3 col-md-6 col-3">
                <label for="input"> Infant </label>
               <select class="form-control" name="" id="">
                <option value="">0</option>
                <option value="">1</option>
                <option value="">3</option>
                <option value="">4</option>
               </select>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <label for="input">E-Mail</label>
                <input
                  type="email"
                  name="leaving"
                  id="leaving"
                  class="form-control"
                  placeholder="E-Mail"
                />
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <label for="input">Phone</label>
                <input
                  type="text"
                  name="leaving"
                  id="leaving"
                  class="form-control"
                  placeholder="phone"
                />
              </div>
            </div>
            <label for="input"> Message </label>
            <textarea
              name="message"
              rows="3"
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