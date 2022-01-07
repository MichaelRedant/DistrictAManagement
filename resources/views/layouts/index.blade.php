<div role="main" class="main">

    @include('body.hero')
    
    <section id="who-we-are" class="section section-no-border bg-color-light m-0">
        @include('body.about')
    </section>
    
    <section class="section parallax section-parallax section-no-border custom-z-index m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('frontend/img/demos/one-page-agency/parallax/parallax-1.jpg')}}">
        <div class="container">
            <div class="row counters custom-counters">
                <div class="col-lg-6 col-sm-6">
                    <div class="counter">
                        <i class="fas fa-users text-color-secondary"></i>
                        <strong class="text-color-light" data-to="200" data-append="+">200</strong>
                           <label>Aangesloten Handelaars</label>
                       </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="counter">
                        <i class="fas fa-tv text-color-secondary"></i>
                        <strong class="text-color-light" data-to="15" data-append="+">15</strong>
                           <label>Aangesloten Dekenijen / Winkelstraten</label>
                       </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="what-we-do" class="section section-no-border bg-color-light m-0 pb-0">
        <div class="container custom-pos-rel">
            <svg id="curved-line-2" class="d-none d-lg-block" x="0px" y="0px" width="132px" height="225px" viewBox="0 0 132 225" enable-background="new 0 0 132 225" xml:space="preserve">
                <circle class="circle" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2,2" data-appear-animation="circle-anim" data-appear-animation-delay="1200" cx="120.888" cy="214.023" r="7.688"/>
                <circle class="circle-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" cx="120.888" cy="214.023" r="7.688"/>
                <path class="path" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="2,2" data-appear-animation="line-anim-2" d="M113.812,209.406c0,0-193-54.125-72.5-206.125"/>
                <path class="path-dashed" fill="none" stroke="white" stroke-miterlimit="10" stroke-dasharray="3,3" d="M113.812,209.406c0,0-193-54.125-72.5-206.125"/>
            </svg>
        </div>
            
        @include('body.what_we_do')
        
    </section>
    
    
    <section id="portfolio" class="section section-no-border bg-color-light m-0 pb-4">
        @include('body.portfolio')
    </section>
    
    <section id="cases" class="section section-primary section-no-border m-0">
        @include('body.lid_worden')
    </section>
    
    <section id="our-team" class="section section-no-border bg-color-light m-0">
        @include('body.our_team')
    </section>
    
    <section id="blog" class="section section-no-border bg-color-tertiary m-0">
        @include('body.blog')
    </section>
    
    <section class="section section-no-border bg-color-light m-0">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 col-lg-2 custom-margin-4-sm">
                    <img src="{{asset('frontend/img/one-page-agency/one-page-agency/logos/logo-1.png')}}" alt class="img-fluid" />
                </div>
                <div class="col-6 col-md-4 col-lg-2 custom-margin-4-sm">
                    <img src="{{asset('frontend/img/one-page-agency/logos/logo-2.png')}}" alt class="img-fluid" />
                </div>
                <div class="col-6 col-md-4 col-lg-2 custom-margin-4-sm">
                    <img src="{{asset('frontend/img/one-page-agency/logos/logo-3.png')}}" alt class="img-fluid" />
                </div>
                <div class="col-6 col-md-4 col-lg-2 custom-margin-4-sm">
                    <img src="{{asset('frontend/img/one-page-agency/logos/logo-4.png')}}" alt class="img-fluid" />
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/img/one-page-agency/logos/logo-5.png')}}" alt class="img-fluid" />
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="{{asset('frontend/img/one-page-agency/logos/logo-6.png')}}" alt class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    
    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map m-0 custom-contact-pos"></div>
    
    <section class="section section-no-border bg-color-quaternary m-0 p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 custom-contact-box custom-contact-pos bg-color-quaternary">
                    <h2 class="text-color-light">Contacteer Ons</h2>
                    <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-4">
                        <div class="feature-box-icon">
                            <i class="icon-call-in icons text-color-secondary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h6 class="mb-0 text-2">Bel ons</h6>
                            <a href="tel:+3253790217" class="text-color-light text-decoration-none">+32 053.72.02.17</a>
                        </div>
                    </div>
                    <div class="feature-box feature-box-style-2 custom-feature-box-style-2 mb-4">
                        <div class="feature-box-icon">
                            <i class="icon-location-pin icons text-color-secondary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h6 class="mb-0 text-2">Locatie</h6>
                            <p class="tall text-color-light">Kattestraat 27, 9300 Aalst</p>
                        </div>
                    </div>
                    <h5 class="text-color-light">STUUR EEN BERICHT</h5>
                    <form class="contact-form custom-contact-form-style-1" action="php/contact-form.php" method="POST">
                        @csrf
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Succes!</strong> U bericht werd verzonden
                        </div>
    
                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> Het is niet mogelijk om een bericht te versturen
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>
    
                        <input type="hidden" name="subject" value="Contact Message Received" />
                        <div class="form-row _divider">
                            <div class="form-group col-sm-6">
                                <input type="text" value=""  maxlength="100" class="form-control" name="name" placeholder="Naam" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" value="" maxlength="100" class="form-control" name="phone" id="phone" placeholder="Telefoon" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="email" value="" maxlength="100" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <textarea maxlength="5000" rows="5" class="form-control custom-textarea-style" name="message" id="message" placeholder="Bericht" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="submit" value="SUBMIT" class="btn btn-primary custom-btn-style-2 text-color-light custom-margin-2 float-right mt-2" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-5 custom-contact-box custom-contact-pos bg-color-quaternary">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d160879.3036170731!2d3.9328626866429914!3d50.94703751624795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c397d353c44949%3A0x40099ab2f4d4c20!2sAalst!5e0!3m2!1snl!2sbe!4v1641258710381!5m2!1snl!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    {{-- 
    @endsection --}}
    
                </div>