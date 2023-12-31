<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-10 heading-section text-center ftco-animate">
          <h1 class="big big-2">Resume</h1>
        <h2 class="mb-4">Resume</h2>
        <p>You can find out where I studied and what I majored in here</p>
      </div>
    </div>
        <div class="row">
            
            @foreach ($resumes as $resume)
            <div class="col-md-6">
                <div class="resume-wrap ftco-animate">
                    <span class="date">{{ $resume->years }}</span>
                    <h2>{{ $resume->title }}</h2>
                    <span class="position">{{ $resume->name }}</span>
                    <p class="mt-4">{{ $resume->body }}</p>
                </div>
                {{-- <div class="resume-wrap ftco-animate">
                    <span class="date">2014-2015</span>
                    <h2>Bachelor's Degree of C.A</h2>
                    <span class="position">Cambridge University</span>
                    <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="resume-wrap ftco-animate">
                    <span class="date">2014-2015</span>
                    <h2>Diploma in Computer</h2>
                    <span class="position">Cambridge University</span>
                    <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div> --}}
            </div>
            @endforeach
  
            
        </div>
        {{-- <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
            </div>
        </div> --}}
    </div>
  </section>