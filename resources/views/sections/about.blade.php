<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex">
          @foreach ($abouts as $about)
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('images/'.$about->image) }});">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                  <h1 class="big">About</h1>
                
                  <h2 class="mb-4">{{ $about->title }}</h2>
                  <p>{{ $about->body }}</p>
                  <ul class="about-info mt-4 px-md-0 px-2">
                      <li class="d-flex"><span>Name:</span> <span>{{ $about->name }}</span></li>
                      <li class="d-flex"><span>Date of birth:</span> <span>{{ $about->date }}</span></li>
                      <li class="d-flex"><span>Address:</span> <span>{{ $about->address }}</span></li>
                      {{-- <li class="d-flex"><span>Zip code:</span> <span>1000</span></li> --}}
                      <li class="d-flex"><span>Email:</span> <span>{{ $about->email }}</span></li>
                      <li class="d-flex"><span>Phone: </span> <span>+{{ $about->phone }}</span></li>
                  </ul>
                 
                
              </div>
            </div>
          <div class="counter-wrap ftco-animate d-flex mt-md-3">
          <div class="text">
              
            <p><a href="{{ asset('cv/resume-me1.pdf') }}" class="btn btn-primary py-3 px-3">Download CV</a></p>
          </div>
          </div>
        </div>
        @endforeach
    </div>
    
    </div>
  </section>