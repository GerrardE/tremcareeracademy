 @extends('layouts.app')
 @section('content')
 @include('includes.nav')
      <!--Banner-->
        <div class="banner">
          <div class="bg-color">
            <div class="container">
              <div class="row">
                <div class="banner-text text-center">
                  <div class="text-border">
                    <h2 class="text-dec">TREM CAREER ACADEMY</h2>
                  </div>
                  <div class="intro-para text-center quote">
                    <p class="big-text">"Holding your hands till you get to the top"</p>
                    <p class="small-text"><br></p>
                    <a href="{{ url('/login') }}" class="btn get-quote">LOGIN</a>
                    <a href="{{ url('/register') }}" class="btn get-quote">REGISTER</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--/ Banner-->
      <!--Feature-->
      <section id="about" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>About</h2>
              <p>TREM Career Academy is a small learning community that provides 
                rigorous and relevant instruction which focuses on<br> preparing TREMites for both the work place and school life.</p>
              <hr class="bottom-line">
            </div>
            <div class="feature-info">
              <div class="fea">
                <div class="col-md-3">
                  <div class="heading pull-right">
                    <ul>
                        <h4>Early Careers</h4>
                      <li>TEP</li>
                      <li>CV &amp; Mock Interviews</li>
                      <li>Career Guidance &amp; Counselling</li>
                    </ul>
                  </div>
                  <div class="fea-img pull-left">
                    <i class="fa fa-user"></i>
                  </div>
                </div>
              </div>
              <div class="fea">
                <div class="col-md-3">
                  <div class="heading pull-right">
                    <h4>Mid-Life Careers</h4>
                    <p>Support members within 5 - 12 years of professional experience to grow rapidly in the course 
                      of their career
                    </p>
                  </div>
                  <div class="fea-img pull-left">
                    <i class="fa fa-user-plus"></i>
                  </div>
                </div>
              </div>
              <div class="fea">
                <div class="col-md-3">
                  <div class="heading pull-right">
                    <h4>Advanced Careers</h4>
                    <p>Focus on professionals with experience spanning from over 21 years industry experience</p>
                  </div>
                  <div class="fea-img pull-left">
                    <i class="fa fa-user-secret"></i>
                  </div>
                </div>
              </div>
              <div class="fea">
                  <div class="col-md-3">
                    <div class="heading pull-right">
                      <h4>Retirees</h4>
                      <p>TREM Safe Landing Program prepares professionals with over 36 years experience for life after work</p>
                    </div>
                    <div class="fea-img pull-left">
                      <i class="fa fa-users"></i>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ about-->
      <!--Organisations-->
      <!--section id="organisations" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="orga-stru">
                  <h3>65%</h3>
                  <p>Say NO!!</p>
                  <i class="fa fa-male"></i>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="orga-stru">
                  <h3>20%</h3>
                  <p>Says Yes!!</p>
                  <i class="fa fa-male"></i>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="orga-stru">
                  <h3>15%</h3>
                  <p>Can't Say!!</p>
                  <i class="fa fa-male"></i>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-info">
                <hgroup>
                  <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
                  <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
                </hgroup>
                <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
              </div>
            </div>
          </div>
        </div>
      </section-->
      <!--/ Organisations-->
      <!--work-shop-->
      <!--section id="work-shop" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Upcoming Workshop</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
              <hr class="bottom-line">
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="service-box text-center">
                <div class="icon-box">
                  <i class="fa fa-html5 color-green"></i>
                </div>
                <div class="icon-text">
                  <h4 class="ser-text">Mentor HTML5 Workshop</h4>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="service-box text-center">
                <div class="icon-box">
                  <i class="fa fa-css3 color-green"></i>
                </div>
                <div class="icon-text">
                  <h4 class="ser-text">Mentor CSS3 Workshop</h4>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="service-box text-center">
                <div class="icon-box">
                  <i class="fa fa-joomla color-green"></i>
                </div>
                <div class="icon-text">
                  <h4 class="ser-text">Mentor Joomla Workshop</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section-->
      <!--/ work-shop-->
      <!--Faculity member-->
      <section id="faculity-member" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Faculty Members</h2>
              <p>TREM Career Academy Executive Committee</p>
              <hr class="bottom-line">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="pm-staff-profile-container">
                <div class="pm-staff-profile-image-wrapper text-center">
                  <div class="pm-staff-profile-image">
                    <img src="img/Olufunke.jpg" alt="" class="img-thumbnail img-circle" />
                  </div>
                </div>
                <div class="pm-staff-profile-details text-center">
                  <p class="pm-staff-profile-name">Olufunke Amobi</p>
                  <p class="pm-staff-profile-title">Chairperson</p>
    
                  <p class="pm-staff-profile-bio">her bio goes here</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="pm-staff-profile-container">
                <div class="pm-staff-profile-image-wrapper text-center">
                  <div class="pm-staff-profile-image">
                    <img src="img/TM.jpg" alt="" class="img-thumbnail img-circle" />
                  </div>
                </div>
                <div class="pm-staff-profile-details text-center">
                  <p class="pm-staff-profile-name">Kanmi Kadiri</p>
                  <p class="pm-staff-profile-title">Vice Chairperson</p>
    
                  <p class="pm-staff-profile-bio">her bio goes here</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="pm-staff-profile-container">
                <div class="pm-staff-profile-image-wrapper text-center">
                  <div class="pm-staff-profile-image">
                    <img src="img/Yemisi.jpg" alt="" class="img-thumbnail img-circle" />
                  </div>
                </div>
                <div class="pm-staff-profile-details text-center">
                  <p class="pm-staff-profile-name">Oluwayemisi Osunkoya</p>
                  <p class="pm-staff-profile-title">TEP Coordinator</p>
    
                  <p class="pm-staff-profile-bio">Bio goes here</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Faculity member-->
      <!--Testimonial-->
      <section id="testimonial" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2 class="white">Testimonies</h2>
              <p class="white">TREM Career Academy proposes to raise TREMites ambition, <br> increase career options and provide meaningful 
                learning context for both students and workers.<br> See what our graduates are saying...</p>
              <hr class="bottom-line bg-white">
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="text-comment">
                <p class="text-par">"My Internship with TCA was an eye opener. It was insightful and an experience I will remember in a life time"</p>
                <p class="text-name">Joy Oluchukwu Daniels - Stream 1</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="text-comment">
                <p class="text-par">"Before the TCA, I always wanted to get a second degree in psychology... Now, I have been exposed to a career path 
                  that really defines my personality."</p>
                <p class="text-name">Udogaranya Chinonso Happiness - Stream 3</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Testimonial-->
      <!--Courses-->
      <section id="courses" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Courses</h2>
              <p>The program is graced with seasoned professionals in various fields. <br> Some of our top courses are;</p>
              <hr class="bottom-line">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/RB.jpg" class="img-responsive">
                <figcaption>
                  <h3>Raising The Bar Of Your Employability</h3>
                  <p></p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/TM.jpg" class="img-responsive">
                <figcaption>
                  <h3>Time Management And Personal Effectiveness In The Workplace</h3>
                  <p></p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/CV.jpg" class="img-responsive">
                <figcaption>
                  <h3>Your CV As An Employability Tool</h3>
                  <p></p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <!--div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/PS.jpg" class="img-responsive">
                <figcaption>
                  <h3>Stunning Presentation Skills</h3>
                  <p></p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/EI.jpg" class="img-responsive">
                <figcaption>
                  <h3>Emotional Intelligence In The Workplace</h3>
                  <p></p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/FP.jpg" class="img-responsive">
                <figcaption>
                  <h3>Financial Planning</h3>
                  <p></p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div-->
          </div>
        </div>
      </section>
      <!--/ Courses-->

      <!--Contact-->
      <section id="contact" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Contact Us</h2>
              <p><span><i class="fa fa-home"></i></span>TREM International Headquarters<br> Obanikoro, Lagos.</p>
              <p><span><i class="fa fa-phone"></i></span>(+234) 813 751 9889</p>
              <hr class="bottom-line">
            </div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="col-md-6 col-sm-6 col-xs-12 left">
                <div class="form-group">
                  <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
              </div>
    
              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
              </div>
    
              <div class="col-xs-12">
                <!-- Button -->
                <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND<span><i class="fa fa-send"></i></span></button>
              </div>
            </form>
    
          </div>
        </div>
      </section>
      <!--/ Contact-->
@endsection