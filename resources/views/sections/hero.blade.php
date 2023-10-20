<section id="home-section" class="hero">
    <div class="home-slider  owl-carousel">
    <div class="slider-item ">
      @foreach ($homes as $home)
      <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
            <div class="one-third js-fullheight order-md-last img" style="background-image:url(/assets/images/bg_1.png);">
                <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text">
                    <span class="subheading">Hello!</span>
                  <h1 class="mb-4 mt-3">I'm <span>{{ $home->name }}</span></h1>
                  <h2 class="mb-4">{{ $home->title }}</h2>
                  <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
              </div>
            </div>
          </div>
      </div>
      @endforeach
    </div>

    {{-- <div class="slider-item">
        <div class="overlay"></div>
      <div class="container">
        <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
            <div class="one-third js-fullheight order-md-last img" style="background-image:url(/assets/images/bg_2.png);">
                <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text">
                    <span class="subheading">Hello!</span>
                  <h1 class="mb-4 mt-3">I'm a <span>web developer</span> based in Guliston</h1>
                  <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
              </div>
            </div>
          </div>
      </div>
    </div> --}}
  </div>
</section>