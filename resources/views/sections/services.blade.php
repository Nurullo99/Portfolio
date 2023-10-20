<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
      <div class="col-md-12 heading-section text-center ftco-animate">
          <h1 class="big big-2">Services</h1>
        <h2 class="mb-4">Services</h2>
        <p>You can find out what services are available here</p>
      </div>
    </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-md-4 text-center d-flex ftco-animate">
                <a href="#" class="services-1">
                    <span class="icon">
                        <i class="flaticon-analysis"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">{{ $service->title }}</h3>
                    </div>
                </a>
            </div>
            @endforeach
             
            </div>
    </div>
  </section>