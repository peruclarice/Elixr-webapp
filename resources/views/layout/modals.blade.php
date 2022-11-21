{{-- All Modals Will be here --}}

<!-- Modal for the Pricing Plans -->
<!-- Modal Begins -->
<div class="modal fade" id="plansModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="flex-direction: column; justify-content: center;">
              <h5 class="modal-title" id="exampleModalLabel">Elixr Plan</h5>
              <p class="text-white">Learn what you could gain from our plans, we promise to satisfy.</p>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                <div class="row plan">
                    <div class="col-lg-6">
                      <div class="card starter-plan">
                          <div class="card-header" style="background-color: transparent">
                              <h5 class="card-title">Free Plan</h5>
                              <h6 class="per-month">0 <span>/per month</span></h6>
                          </div>
                          <div class="card-body">
                              <ul>
                                  <li>
                                      <span><img src="{{asset("assets/images/logo/elixr-icon-default.svg")}}" alt="elixr icon"></span>
                                      Free to download
                                  </li>
                                  <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-default.svg")}}" alt="elixr icon"></span>
                                    Swipe and match
                                  </li>
                                  <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-default.svg")}}" alt="elixr icon"></span>
                                    Curated events
                                  </li>
                                  <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-default.svg")}}" alt="elixr icon"></span>
                                    In-app messaging
                                  </li>
                                  <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-default.svg")}}" alt="elixr icon"></span>
                                    Scheduling available events
                                </li>
                              </ul>
                          </div>
                          <div class="card-footer">
                              <a href="#" class="btn btn-primary">Try The Free Elix Plan</a>
                          </div>
                      </div>
                    </div>
                  <div class="col-lg-6">
                    <div class="card premium-plan">
                        <div class="card-header">
                            {{-- <h5 class="card-title">Diamond <span class="diamond">💎</span> Elix</h5> --}}
                            <h5 class="card-title">Premium Plan</h5>
                            <h6 class="per-month">240 <span>/per month</span></h6>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-white.svg")}}" alt="elixr icon"></span>All Features included from <a href="#" class="link">Free Plan</a>
                                </li>
                                <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-white.svg")}}" alt="elixr icon"></span>Travel mode
                                </li>
                                <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-white.svg")}}" alt="elixr icon"></span>Boost your profile
                                </li>
                                <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-white.svg")}}" alt="elixr icon"></span>Create events
                                </li>
                                <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-white.svg")}}" alt="elixr icon"></span>Video dates/ connections
                                </li>
                                <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-white.svg")}}" alt="elixr icon"></span>Back track on swipes
                                </li>
                                <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-white.svg")}}" alt="elixr icon"></span>See who has liked your profile
                                </li>
                                <li>
                                    <span><img src="{{asset("assets/images/logo/elixr-icon-white.svg")}}" alt="elixr icon"></span>Join interest circles
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-secondary">Try The Diamond Elix Plan</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
          {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> --}}
        </div>
    </div>
</div>

<!-- Modal for Joining the waitlist -->
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#joinWaitListModal">
    plans modal
</button> --}}
  
<!-- Modal Begins -->
<div class="modal fade" id="joinWaitListModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div id="joinWaitList" class="modal-dialog modal-dialog-centered" role="document">

        {{-- Email content --}}
        <div class="modal-content">
            <div class="modal-header p-4" style="flex-direction: column; justify-content: center;">
              <h5 class="modal-title" id="exampleModalLabel">Join Our Waitlist</h5>
              <p class="text-white">Join our waiting list to experince the elixr of life, we provide value for your time here.</p>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                <div class="row plan">
                    <div class="col-lg-12">
                        <div class="card" style="box-shadow: none; background: transparent;">
                            <div  id="subscribe-form-area" class="card-body">
                                <form id="my-form" action="https://formspree.io/f/mjvzllyb" method="POST">
                                    <div class="form-group flex">
                                        <input type="email" name="email" class="form-control b-0 " placeholder="Enter Your Email Address...">
                                        
                                        <input type="submit" id="my-form-button"  class="btn btn-primary b-0 " value="Join Our Waiting List" style="max-width: fit-content;">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Success Message --}}
        

    </div>
</div>

