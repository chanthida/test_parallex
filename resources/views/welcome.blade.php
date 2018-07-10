@extends('layouts.app_frontend')
@section('content')


    <div id="colorlib-page">

            <div class="container-wrap">
                <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                    <div class="text-center">
                        <div class="author-img" style="background-image: url({{ $profile->img}});"></div>
                        <h1 id="colorlib-logo"><a href="{{ asset('template/index.html')}}">{{$profile->name}}</a></h1>
                        <span class="position">{{$profile->description}}</span>
                    </div>
                    <nav id="colorlib-main-menu" role="navigation" class="navbar">
                        <div id="navbar" class="collapse">
                            <ul>
                                @foreach($menus as $menu)
                                    @if($menu->active != 0)
                                        <li><a href="#" data-nav-section="{{$menu->slug}}">{{$menu->name}}</a></li>
                                    @endif
                                @endforeach

                               {{-- <li><a href="#" data-nav-section="services">Services</a></li>
                                <li><a href="#" data-nav-section="skills">Skills</a></li>
                                <li><a href="#" data-nav-section="education">Education</a></li>
                                <li><a href="#" data-nav-section="experience">Experience</a></li>
                                <li><a href="#" data-nav-section="work">Work</a></li>
                                <li><a href="#" data-nav-section="blog">Blog</a></li>
                                <li><a href="#" data-nav-section="contact">Contact</a></li>
                                <li><a href="#" data-nav-section="xx">xxx</a></li>--}}
                            </ul>
                        </div>
                    </nav>

                    <div class="colorlib-footer">
                        <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash.com</a></span></small></p>
                        <ul>
                            <li><a href="#"><i class="icon-facebook2"></i></a></li>
                            <li><a href="#"><i class="icon-twitter2"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                        </ul>
                    </div>

                </aside>

                <div id="colorlib-main">
                    @if($menus[0]->active != 0 )
                        <section id="colorlib-hero" class="js-fullheight" data-section="{{$menus[0]->slug}}">
                            <div class="flexslider js-fullheight">
                                <ul class="slides">

                                        @foreach($sections as $section)
                                            @if($menus[0]->id == $section->menu_id )
                                                <li style="background-image: url({{$section->img}});">
                                                    <div class="overlay"></div>
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                                                <div class="slider-text-inner js-fullheight">
                                                                    <div class="desc">
                                                                        {!! $section->header !!}
                                                                       {!! $section->content !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach

                                </ul>
                            </div>
                        </section>
                    @endif

                    @if($menus[1]->active != 0 )
                        <section class="colorlib-about" data-section="{{$menus[1]->slug}}">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                            <div class="col-md-12">
                                                <div class="about-desc">
                                                    <span class="heading-meta">{{ $menus[1]->description }}</span>
                                                    <h2 class="colorlib-heading">{{ $menus[1]->header }}</h2>
                                                    {!!  $menus[1]->text  !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <?php $i = 0; ?>

                                                @foreach($sections as $section)
                                                    @if($menus[1]->id == $section->menu_id )

                                                        <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                                            <div class="services color-{{$i+1}}">
                                                                <span class="icon2"><i class="{{$section->icon}}"></i></span>
                                                                <h3>{{$section->header}}</h3>
                                                            </div>
                                                        </div>
                                                        <?php $i++; ?>
                                                    @endif

                                                @endforeach


                                          {{--  <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                                <div class="services color-2">
                                                    <span class="icon2"><i class="icon-globe-outline"></i></span>
                                                    <h3>Web Design</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                                                <div class="services color-3">
                                                    <span class="icon2"><i class="icon-data"></i></span>
                                                    <h3>Software</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                                                <div class="services color-4">
                                                    <span class="icon2"><i class="icon-phone3"></i></span>
                                                    <h3>Application</h3>
                                                </div>
                                            </div>--}}
                                        </div>
                                    {{--    <div class="row">
                                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                                <div class="hire">
                                                    <h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
                                                    <a href="#" class="btn-hire">Hire me</a>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif

                    @if($menus[2]->active != 0 )
                        <section class="colorlib-services" data-section="{{$menus[2]->slug}}">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <span class="heading-meta">{{ $menus[2]->description }}</span>
                                        <h2 class="colorlib-heading">{{ $menus[2]->header }}</h2>
                                    </div>
                                </div>
                                <div class="row row-pt-md">
                                    <?php $i = 0; ?>

                                            @foreach($sections as $section)
                                                @if($menus[2]->id == $section->menu_id )


                                                   <div class="col-md-4 text-center animate-box">
                                                            <div class="services color-{{$i+1}}">
                                                    <span class="icon">
                                                        <i class="{{$section->icon}}"></i>
                                                    </span>
                                                                <div class="desc">
                                                                    <h3>{{$section->header}}</h3>
                                                                    <p>{{$section->content}}</p>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    <?php $i++; ?>
                                                @endif

                                            @endforeach


                                    {{--<div class="col-md-4 text-center animate-box">
                                        <div class="services color-2">
                                            <span class="icon">
                                                <i class="icon-data"></i>
                                            </span>
                                            <div class="desc">
                                                <h3>Software</h3>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center animate-box">
                                        <div class="services color-3">
                                            <span class="icon">
                                                <i class="icon-phone3"></i>
                                            </span>
                                            <div class="desc">
                                                <h3>Application</h3>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center animate-box">
                                        <div class="services color-4">
                                            <span class="icon">
                                                <i class="icon-layers2"></i>
                                            </span>
                                            <div class="desc">
                                                <h3>Graphic Design</h3>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center animate-box">
                                        <div class="services color-5">
                                            <span class="icon">
                                                <i class="icon-data"></i>
                                            </span>
                                            <div class="desc">
                                                <h3>Software</h3>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center animate-box">
                                        <div class="services color-6">
                                            <span class="icon">
                                                <i class="icon-phone3"></i>
                                            </span>
                                            <div class="desc">
                                                <h3>Application</h3>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </section>
                    @endif
                   {{-- <div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{ asset('template/images/cover_bg_1.jpg')}});" data-stellar-background-ratio="0.5">
                        <div class="overlay"></div>
                        <div class="colorlib-narrow-content">
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-md-3 text-center animate-box">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="500" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Cups of coffee</span>
                                </div>
                                <div class="col-md-3 text-center animate-box">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="500" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Projects</span>
                                </div>
                                <div class="col-md-3 text-center animate-box">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="500" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Clients</span>
                                </div>
                                <div class="col-md-3 text-center animate-box">
                                    <span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="500" data-refresh-interval="50"></span>
                                    <span class="colorlib-counter-label">Partners</span>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    @if($menus[3]->active != 0 )
                        <section class="colorlib-skills" data-section="{{$menus[3]->slug}}">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <span class="heading-meta">{{ $menus[3]->description }}</span>
                                        <h2 class="colorlib-heading animate-box">{{ $menus[3]->header }}</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                        {!!  $menus[3]->text  !!}
                                    </div>
                                    {{--<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="progress-wrap">
                                            <h3>Photoshop</h3>
                                            <div class="progress">
                                                <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                                    <span>75%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                    <?php $i = 0; ?>

                                        @foreach($sections as $section)
                                            @if($menus[3]->id == $section->menu_id )
                                                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                                    <div class="progress-wrap">
                                                        <h3>{{$section->header}}</h3>
                                                        <div class="progress">
                                                            <div class="progress-bar color-{{$i+1}}" role="progressbar" aria-valuenow="{{$section->percent_data}}"
                                                                 aria-valuemin="0" aria-valuemax="100" style="width:{{$section->percent_data}}%">
                                                                <span>{{$section->percent_data}}%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $i++; ?>
                                            @endif

                                        @endforeach

                                    {{--<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                        <div class="progress-wrap">
                                            <h3>jQuery</h3>
                                            <div class="progress">
                                                <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                    <span>60%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="progress-wrap">
                                            <h3>HTML5</h3>
                                            <div class="progress">
                                                <div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                    <span>85%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                        <div class="progress-wrap">
                                            <h3>CSS3</h3>
                                            <div class="progress">
                                                <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                    <span>90%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="progress-wrap">
                                            <h3>WordPress</h3>
                                            <div class="progress">
                                                <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                        <div class="progress-wrap">
                                            <h3>SEO</h3>
                                            <div class="progress">
                                                <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    <span>80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </section>
                    @endif

                    @if($menus[4]->active != 0 )
                        <section class="colorlib-education" data-section="{{$menus[4]->slug}}">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <span class="heading-meta">{{ $menus[4]->description }}</span>
                                        <h2 class="colorlib-heading animate-box">{{ $menus[4]->header }}</h2>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="fancy-collapse-panel">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <?php $i = 0; ?>

                                                        @foreach($sections as $section)
                                                            @if($menus[4]->id == $section->menu_id )
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab" id=" {{$section->id_tag}}">
                                                                            <h4 class="panel-title">
                                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#{{$section->id_tag2}}" aria-expanded="false" aria-controls="{{$section->id_tag2}}">{{$section->header}}
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div id="{{$section->id_tag2}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{$section->id_tag}}">
                                                                            <div class="panel-body">
                                                                                <div class="row">
                                                                                    {!!$section->content!!}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php $i++; ?>
                                                            @endif
                                                        @endforeach

                                                    {{--   <div class="panel panel-default">
                                                          <div class="panel-heading" role="tab" id="headingOne">
                                                              <h4 class="panel-title">
                                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Master Degree Graphic Design
                                                                  </a>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                              <div class="panel-body">
                                                                  <div class="row">
                                                                      <div class="col-md-6">
                                                                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                          <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                     </div>
                                                      </div>
                                                     {{-- <div class="panel panel-default">
                                                          <div class="panel-heading" role="tab" id="headingTwo">
                                                              <h4 class="panel-title">
                                                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree of Computer Science
                                                                  </a>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                              <div class="panel-body">
                                                                  <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                                  <ul>
                                                                      <li>Separated they live in Bookmarksgrove right</li>
                                                                      <li>Separated they live in Bookmarksgrove right</li>
                                                                  </ul>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="panel panel-default">
                                                          <div class="panel-heading" role="tab" id="headingThree">
                                                              <h4 class="panel-title">
                                                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma in Information Technology
                                                                  </a>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                              <div class="panel-body">
                                                                  <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="panel panel-default">
                                                          <div class="panel-heading" role="tab" id="headingFour">
                                                              <h4 class="panel-title">
                                                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Diploma in Information Technology
                                                                  </a>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                              <div class="panel-body">
                                                                  <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="panel panel-default">
                                                          <div class="panel-heading" role="tab" id="headingFive">
                                                              <h4 class="panel-title">
                                                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
                                                                  </a>
                                                              </h4>
                                                          </div>
                                                          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                              <div class="panel-body">
                                                                  <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                              </div>
                                                          </div>
                                                      </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif

                    @if($menus[5]->active != 0 )
                        <section class="colorlib-experience" data-section="{{$menus[5]->slug}}">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <span class="heading-meta">{{ $menus[5]->description }}</span>
                                        <h2 class="colorlib-heading animate-box">{{ $menus[5]->header }}</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="timeline-centered">

                                            <?php $i = 0; ?>
                                                    @foreach($sections as $section)
                                                        @if($menus[5]->id == $section->menu_id )
                                                                <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                                                    <div class="timeline-entry-inner">

                                                                        <div class="timeline-icon color-{{$i+1}}">
                                                                            <i class="icon-pen2"></i>
                                                                        </div>

                                                                        <div class="timeline-label">
                                                                            <h2><a href="#">{{$section->header}}</a> <span>{{$section->sub_content}}</span></h2>
                                                                            {!! $section->content!!}
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            <?php $i++; ?>
                                                        @endif
                                                    @endforeach



                                           {{-- <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                                <div class="timeline-entry-inner">
                                                    <div class="timeline-icon color-2">
                                                        <i class="icon-pen2"></i>
                                                    </div>
                                                    <div class="timeline-label">
                                                        <h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
                                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                                <div class="timeline-entry-inner">
                                                    <div class="timeline-icon color-3">
                                                        <i class="icon-pen2"></i>
                                                    </div>
                                                    <div class="timeline-label">
                                                        <h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
                                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                                <div class="timeline-entry-inner">
                                                    <div class="timeline-icon color-4">
                                                        <i class="icon-pen2"></i>
                                                    </div>
                                                    <div class="timeline-label">
                                                        <h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
                                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                                <div class="timeline-entry-inner">
                                                    <div class="timeline-icon color-5">
                                                        <i class="icon-pen2"></i>
                                                    </div>
                                                    <div class="timeline-label">
                                                        <h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
                                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                    </div>
                                                </div>
                                            </article>--}}

                                            <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                                                <div class="timeline-entry-inner">
                                                    <div class="timeline-icon color-none">
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif

                    @if($menus[6]->active != 0 )
                        <section class="colorlib-work" data-section="{{$menus[6]->slug}}">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <span class="heading-meta">{{ $menus[6]->description }}</span>
                                        <h2 class="colorlib-heading">{{ $menus[6]->header }}</h2>
                                    </div>
                                </div>
                              {{--  <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span></p>
                                    </div>
                                </div>--}}
                                <div class="row">
                                    <?php $i = 0; ?>

                                            @foreach($sections as $section)
                                                @if($menus[6]->id == $section->menu_id )
                                                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                                            <div class="project" style="background-image: url({{ $section->img}});">
                                                                <div class="desc">
                                                                    <div class="con">
                                                                        <h3>{{--<a href="work.html">--}}{{ $section->header}}{{--</a>--}}</h3>
                                                                        <span>{!!  $section->content!!}</span>
                                                                        <p class="icon">
                                                                            {{--<span><a href="#"><i class="icon-share3"></i></a></span>--}}
                                                                            {{--<span><a href="#"><i class="icon-eye"></i> 100</a></span>--}}
                                                                            {{--<span><a href="#"><i class="icon-heart"></i> 49</a></span>--}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php $i++; ?>
                                                @endif
                                            @endforeach

                                    {{--<div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                        <div class="project" style="background-image: url({{ asset('template/images/img-6.jpg')}});">
                                            <div class="desc">
                                                <div class="con">
                                                    <h3><a href="work.html">Work 02</a></h3>
                                                    <span>Animation</span>
                                                    <p class="icon">
                                                        <span><a href="#"><i class="icon-share3"></i></a></span>
                                                        <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                        <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
                                        <div class="project" style="background-image: url({{ asset('template/images/img-3.jpg')}});">
                                            <div class="desc">
                                                <div class="con">
                                                    <h3><a href="work.html">Work 03</a></h3>
                                                    <span>Illustration</span>
                                                    <p class="icon">
                                                        <span><a href="#"><i class="icon-share3"></i></a></span>
                                                        <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                        <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                                        <div class="project" style="background-image: url({{ asset('template/images/img-4.jpg')}});">
                                            <div class="desc">
                                                <div class="con">
                                                    <h3><a href="work.html">Work 04</a></h3>
                                                    <span>Application</span>
                                                    <p class="icon">
                                                        <span><a href="#"><i class="icon-share3"></i></a></span>
                                                        <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                        <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="project" style="background-image: url({{ asset('template/images/img-5.jpg')}});">
                                            <div class="desc">
                                                <div class="con">
                                                    <h3><a href="work.html">Work 05</a></h3>
                                                    <span>Graphic, Logo</span>
                                                    <p class="icon">
                                                        <span><a href="#"><i class="icon-share3"></i></a></span>
                                                        <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                        <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                        <div class="project" style="background-image: url({{ asset('template/images/img-6.jpg')}});">
                                            <div class="desc">
                                                <div class="con">
                                                    <h3><a href="work.html">Work 06</a></h3>
                                                    <span>Web Design</span>
                                                    <p class="icon">
                                                        <span><a href="#"><i class="icon-share3"></i></a></span>
                                                        <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                        <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                               {{-- <div class="row">
                                    <div class="col-md-12 animate-box">
                                        <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                                    </div>
                                </div>--}}
                            </div>
                        </section>
                    @endif

                    @if($menus[7]->active != 0 )
                        <section class="colorlib-blog" data-section="{{$menus[7]->slug}}">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <span class="heading-meta">{{ $menus[7]->description }}</span>
                                        <h2 class="colorlib-heading">{{ $menus[7]->header }}</h2>
                                    </div>
                                </div>
                                <?php $i = 0; ?>

                                    @foreach($sections as $section)
                                        @if($menus[7]->id == $section->menu_id )
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                                    <div class="blog-entry">
                                                        <a href="#" class="blog-img"><img src="{{ $section->img}}" class="img-responsive"></a>
                                                        <div class="desc">
                                                            {{--<span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>--}}
                                                            {{--<h3><a href="blog.html">Renovating National Gallery</a></h3>--}}
                                                            {{--<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
                                                            {!! $section->sub_content!!}
                                                            <h3>{{ $section->header}}</h3>
                                                            {!! $section->content!!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $i++; ?>
                                        @endif
                                    @endforeach



                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12 animate-box">--}}
                                        {{--<p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </section>
                    @endif

                    @if($menus[8]->active != 0 )
                        <section class="colorlib-contact" data-section="{{$menus[8]->slug}}">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                        <span class="heading-meta">{{ $menus[8]->description }}</span>
                                        <h2 class="colorlib-heading">{{ $menus[8]->header }}</h2>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                            <div class="colorlib-icon">
                                                <i class="icon-globe-outline"></i>
                                            </div>
                                            <div class="colorlib-text">
                                                <p><a href="#">info@domain.com</a></p>
                                            </div>
                                        </div>

                                        <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                            <div class="colorlib-icon">
                                                <i class="icon-map"></i>
                                            </div>
                                            <div class="colorlib-text">
                                                <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                                            </div>
                                        </div>

                                        <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                            <div class="colorlib-icon">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <div class="colorlib-text">
                                                <p><a href="tel://">+123 456 7890</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-md-push-1">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                                <form action="">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Subject">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif

                </div><!-- end:colorlib-main -->
            </div><!-- end:container-wrap -->
        </div><!-- end:colorlib-page -->


@endsection