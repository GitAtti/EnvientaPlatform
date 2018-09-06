@extends('00_header.platform')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="" style="height: 150px;"></div>

        <div class="row mb-5">
          <div class="col-md-12">
            <h2>Ready to buy products</h2>
            <p class="text-dark">
              Simply just click on the <b class="_clr">Buy now</b> button and select the Makerspace
            </p>
          </div>
        </div>

        <!-- Cards -->
        <div class="row">
          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/desk_lamp.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Modular 3D printed DESK LED LAMP</h5>
                <p class="card-text text-justify">
                  Make brightness in your room or office - cheap, easy to print, biodegradable from PLA, and only 4 watts :))
                </p>
                <h5 class="float-left my-2">30 USD</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/chair.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  This is a chair everyone with a printer and some nGen_FLEX filament can make at home!
                </p>
                <h5 class="float-left my-2">89 USD</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="" style="height: 500px;"></div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 my-3">
            <div class="card border border-secondary">
              <img class="card-img-top img-fluid" height="60" src="img/800x600_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <h5 class="float-left my-2">Price_here</h5>
                <!-- Button trigger modal -->
                <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                  Buy now
                </a>
              </div>
            </div>
          </div>
        </div><!-- end of the row -->

      </div><!-- end of the col-md-12 -->

    </div><!-- end of the row -->
    <div class="" style="height: 150px;"></div>

  </div><!-- end of the container -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 600px;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose a <b class="_clr">Makerspace</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pb-0 _scroll">

                @if(!Auth::check())  
                <!-- Sign In part -->
                <div class="card w-100 border border-secondary mb-3">
                  <div class="card-header text-truncat text-center">
                    <h4 class="card-title text-truncate ">Not signed in
                      <i class="fa fa-frown-o" aria-hidden="true"></i>
                    </h4>
                    <p class="card-text mb-0 text-truncat">
                      You have not yet signed in.
                    </p>
                  </div>
                  <div class="card-body">
                    <p class="card-text text-center">
                      You have to <b class="_clr">Sign in</b> to able to buy in the Shop
                    </p>
                  </div>
                  <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#login_dialog" data-dismiss="modal">Sign in / Sign up</a>
                  </div>
                </div><!-- End of the Sign In part -->
                @elseif(!Auth::user()->isCustomer)  

                <!-- "fill out profile" part -->
                <div class="card w-100 border border-secondary mb-3">
                  <div class="card-header text-truncat text-center">
                    <h4 class="card-title text-truncate ">Customer profile missing
                    </h4>
                    <p class="card-text mb-0 text-truncat">
                      You have not yet filled out your Customer Profile.
                    </p>
                  </div>
                  <div class="card-body">
                    <p class="card-text text-center">
                      You have to fill out the customer part of your <b class="_clr">Profile</b> to able to buy in the Shop
                    </p>
                  </div>
                  <div class="card-footer text-center">
                    <a href="{{ URL::to('/profile') }}" class="btn btn-primary">Go to profile</a>
                  </div>
                </div><!-- End of the "fill out profile" part -->
                @else

                <!-- Makerspace card/part -->
                <div class="card w-100 border border-secondary mb-3">
                  <div class="card-header">
                    <div class="float-left mr-3">
                      <img class="card-img-top img-fluid img-thumbnail rounded" style="width: 150px;" src="img/kollabor.jpg" alt="Card image cap">
                    </div>
                    <h5 class="card-title text-truncate">Kollabor</h5>
                    <p class="card-text mb-0 text-truncat">Békéscsaba, Kiss Ernő u. 3, 5600 Hungary</p>
                    <p class="card-text mb-0 text-truncat">+36 70 315 0797</p>
                    <p class="card-text mb-0 text-truncat">hello@kollabor.hu</p>
                  </div>
                  <div class="card-body">
                    <p class="card-text text-justify">
                      KOLLABOR, the natural science experimental center and common creative place in Békéscsaba (Hungary). KOLLABOR is supported by ENVIENTA and is the first place where ENV tokens will be tested.
                    </p>
                  </div>
                  <div class="card-footer">
                    <h5 class="float-left my-2">Price_here</h5>
                    <a href="#" class="btn btn-primary float-right">Order/buy</a>
                  </div>
                </div><!-- End of the Makerspace card/part -->
                @endif
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div><!-- End of the modal -->

        <!-- Verification Modal -->
        <div class="modal fade" id="exampleModalCenterVerify" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Your order
                  <i class="fa fa-envelope-o _clr" aria-hidden="true"></i>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="card-header text-truncat text-center">
                  <h5 class="card-title">Your email has been sent successfully
                    <i class="fa fa-check _clr" aria-hidden="true"></i>
                  </h5>
                </div>
                <div class="card-body text-center">
                  <p class="card-text">
                    The selected makerspace will respond soon
                  </p>
                  <h5>Thank you for your order!
                    <i class="fa fa-smile-o _clr" aria-hidden="true"></i>
                  </h5>
                  <small>(Please note that it may take time because of the occupancy)</small>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
