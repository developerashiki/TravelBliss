@extends('layout.primary')

@section('page_body')
 <div class="">
    <div class="col-lg-12 mx-auto">
        <h3 class="text-center pt-2">~~Blog~~</h3>
        <div class="container">
          <div class="row">
            <div class="container">
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <div class="row">
                  <div class="col-md-8">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/images/maxresdefault.jpg') }}" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Thailand  Visa Guide</h5>
                          <p class="card-text">থাইল্যান্ড ভিসা গাইড- এক নজরে জেনে নিন সব তথ্য বিদেশ ভ্রমণ আমাদের বাংলাদেশিদের কাছে অনেক জনপ্রিয় একটি রিক্রিয়েশন গেটওয়ে। আর এর মধ্যে সবচেয়ে জনপ্রিয় টুরিস্ট ডেস্টিনেশান হল থাইল্যান্ড। থাইল্যান্ড ইমিগ্রেশান…</p>
                            <button class="btn btn-dark"><a class="text-white" href="{{ route('thiland_visa_guide') }}">Read More>>>></a></button>
                          <p class="card-text pt-2"><small class="text-muted ">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    
                    <div class="card mb-3">
                        <img src="https://cdn.pixabay.com/photo/2016/05/01/21/20/earth-1365995_1280.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>  
                  </div>
                  <div class="col-12 col-md-4">  
                    <div class="card">
                      <div class="card-body">
                        <h5>Recent Posts</h5>
                        <hr/>
                            <ol class="list-unstyled">
                                <li >রাঙামাটি ভ্রমণের প্রয়োজনীয় কিছু তথ্য</li>
                                <li>Singapore Visa Guide</li>
                                <li>Malaysia Visa Guide</li>
                                <li>Thailand Visa Guide</li>
                            </ol>
                      </div>
                    </div>
                     <br/>
                    <div class="card">
                      <div class="card-body">
                        <div class="container" id="cal">
                            <h4 class="page-header text-center">Calendar</h4> 
                          <div class="">
                            <table class="col-xs-12 table table-bordered table-calendar">
                                <thead>
                                    <tr>
                                        <th colspan="7"> <span class="btn-group">
                          
                                            <button class="btn calendar__button">
                                          
                          <svg width="10px" height="15px" viewBox="0 0 9 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <!-- Generator: Sketch 44.1 (41455) - http://www.bohemiancoding.com/sketch -->
                              <desc>Created with Sketch.</desc>
                              <defs></defs>
                              <g id="6-Calendar-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g id="6d_Desktop_Calendar_Page" transform="translate(-563.000000, -630.000000)" fill="#888B94">
                                      <g id="Month" transform="translate(563.000000, 627.000000)">
                                          <g id="icon/standard/down" transform="translate(4.500000, 10.500000) rotate(90.000000) translate(-4.500000, -10.500000) translate(-3.000000, 6.000000)">
                                              <g id="Shape-Copy">
                                                  <path d="M3.49133351,11.508979 C3.0025937,11.0202392 3.0025937,10.2302556 3.49133351,9.7415158 L8.85747172,4.3753776 L3.49133351,-0.990760609 C3.0025937,-1.47950043 3.0025937,-2.26948397 3.49133351,-2.75822379 C3.98007333,-3.2469636 4.77005687,-3.2469636 5.25879669,-2.75822379 L11.5086665,3.49164601 C11.9974063,3.98038583 11.9974063,4.77036937 11.5086665,5.25910919 L5.25879669,11.508979 C5.01505177,11.7527239 4.69505844,11.8752213 4.3750651,11.8752213 C4.05507177,11.8752213 3.73507844,11.7527239 3.49133351,11.508979 Z" transform="translate(7.500000, 4.375221) scale(1, -1) rotate(-90.000000) translate(-7.500000, -4.375221) "></path>
                                              </g>
                                          </g>
                                      </g>
                                  </g>
                              </g>
                          </svg>
                                          </button>
                          
                                            <button disabled class="btn calendar__button_date">June 2023</button>
                          
                                            <button class="btn calendar__button">
                          
                                            <svg width="10px" height="15px" viewBox="0 0 9 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 44.1 (41455) - http://www.bohemiancoding.com/sketch -->
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="6-Calendar-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="6d_Desktop_Calendar_Page" transform="translate(-709.000000, -630.000000)" fill="#888B94">
                                                        <g id="Month" transform="translate(563.000000, 627.000000)">
                                                            <g id="icon/standard/down" transform="translate(150.500000, 10.500000) rotate(-90.000000) translate(-150.500000, -10.500000) translate(143.000000, 6.000000)">
                                                                <g id="Shape-Copy">
                                                                    <path d="M3.49133351,11.508979 C3.0025937,11.0202392 3.0025937,10.2302556 3.49133351,9.7415158 L8.85747172,4.3753776 L3.49133351,-0.990760609 C3.0025937,-1.47950043 3.0025937,-2.26948397 3.49133351,-2.75822379 C3.98007333,-3.2469636 4.77005687,-3.2469636 5.25879669,-2.75822379 L11.5086665,3.49164601 C11.9974063,3.98038583 11.9974063,4.77036937 11.5086665,5.25910919 L5.25879669,11.508979 C5.01505177,11.7527239 4.69505844,11.8752213 4.3750651,11.8752213 C4.05507177,11.8752213 3.73507844,11.7527239 3.49133351,11.508979 Z" transform="translate(7.500000, 4.375221) scale(1, -1) rotate(-90.000000) translate(-7.500000, -4.375221) "></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>                
                                          </button>
                          
                                        </span>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                    <td class="text-muted">29</td>
                                    <td class="text-muted">30</td>
                                    <td class="text-muted">31</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td class="text-muted">1</td>
                                        <td class="text-muted">2</td>
                                        <td class="text-muted">3</td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                            
                          </div>
                      </div>
                    </div>
                    
                    <br/>
                    <div class="card">
                      <div class="card-body">
                        <h5>Présentation</h5>
                        <hr/>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.facebook.com/TravelBlissInternational/videos/574510088043262" title="YouTube video" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection