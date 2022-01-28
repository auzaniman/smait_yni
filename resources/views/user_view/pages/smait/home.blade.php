@extends('user_view.layouts.app_yayasan')

@section('title')
Yayasan Nurul 'Ilmi
@endsection

@section('content')
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <!-- Unit Sekolah -->
  <section class="py-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <div class="row mt-4">
            <div class="col-md-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/TKIT1/5.jpg')}}" alt="aboutus">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">KBIT</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-0 mt-5">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/TKIT1/3.jpg')}}" alt="contacus">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">TKIT 1</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/TKIT2/4.jpg')}}" alt="signin">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">TKIT 2</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/SDIT/10.jpeg')}}" alt="author">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">SDIT</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/SMPIT/4.jpg')}}" alt="author">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">SMPIT</h6>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-md-3 mt-6">
              <a href="{{ route('ppdb')}}">
                <div class="card move-on-hover">
                  <img class="w-100" src="{{ url('frontend/assets/img/YNI/SMAIT/1.jpeg')}}" alt="author">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">SMAIT</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mx-auto mt-md-0 mt-5">
          <div class="position-sticky" style="top:100px !important">
            <h4 class="">Unit Sekolah Yayasan Nurul 'Ilmi</h4>
            <h6 class="text-secondary font-weight-normal">.</h6>
          </div>
        </div>
      </div>
  </section>

  <!-- Benefit -->
  <section class="my-5 py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
          <div class="rotating-card-container">
            <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
              <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                <div class="card-body py-7 text-center">
                  <i class="material-icons text-white text-4xl my-3">touch_app</i>
                  <h3 class="text-white">Feel the <br /> Material Kit</h3>
                  <p class="text-white opacity-8">All the Bootstrap components that you need in a development have been re-design with the new look.</p>
                </div>
              </div>
              <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                <div class="card-body pt-7 text-center">
                  <h3 class="text-white">Discover More</h3>
                  <p class="text-white opacity-8"> You will save a lot of time going from prototyping to full-functional code because all elements are implemented.</p>
                  <a href=".//sections/page-sections/hero-sections.html" target="_blank" class="btn btn-white btn-sm w-50 mx-auto mt-3">Start with Headers</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">content_copy</i>
                <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything inside our documentation.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">flip_to_front</i>
                <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and mixins.</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-5">
            <div class="col-md-6 mt-3">
              <i class="material-icons text-gradient text-primary text-3xl">price_change</i>
              <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
              <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start with our Design System.</p>
            </div>
            <div class="col-md-6 mt-3">
              <div class="info">
                <i class="material-icons text-gradient text-primary text-3xl">devices</i>
                <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given resolution.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Prakata Guru -->
  <section class="pb-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">The Executive Team</h3>
          <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/material_kit/assets/img/team-5.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Emma Roberts</h5>
                  <h6 class="text-info">UI Designer</h6>
                  <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/material_kit/assets/img/bruce-mars.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">William Pearce</h5>
                  <h6 class="text-info">Boss</h6>
                  <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/material_kit/assets/img/ivana-squares.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Ivana Flow</h5>
                  <h6 class="text-info">Athlete</h6>
                  <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="{{ url('frontend/material_kit/assets/img/ivana-square.jpg')}}" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-0">Marquez Garcia</h5>
                  <h6 class="text-info">JS Developer</h6>
                  <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Artikel -->
  <section class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Check my latest blogposts</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/testimonial-6-2.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
              </h5>
              <p>
                Finding temporary housing for your dog should be as easy as
                renting an Airbnb. That’s the idea behind Rover ...
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/testimonial-6-3.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
              </h5>
              <p>
                If you’ve ever wanted to train a machine learning model
                and integrate it with IFTTT, you now can with ...
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="{{ url('frontend/material_kit/assets/img/examples/blog-9-4.jpg')}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
              </h5>
              <p>
                If you’ve ever wanted to train a machine learning model
                and integrate it with IFTTT, you now can with ...
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background cursor-pointer">
            <div class="full-background" style="background-image: url('frontend/material_kit/assets/img/examples/blog2.jpg')" loading="lazy"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <h2 class="card-title text-white">Flexible work hours</h2>
                <p class="card-description text-white">Rather than worrying about switching offices every couple years, you stay in the same place.</p>
                <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                  <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-sm-4" id="download-soft-ui">
    <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
      <img src="{{ url('frontend/material_kit/assets/img/shapes/waves-white.svg')}}" alt="pattern-lines" class="position-absolute start-0 top-md-0 w-100 opacity-2">
      <div class="container py-7 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <h3 class="text-white mb-0">Do you love this awesome</h3>
            <h3 class="text-white">UI Kit for Bootstrap 5?</h3>
            <p class="text-white mb-5">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
            <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-primary btn-lg mb-3 mb-sm-0">Download HTML</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-12 my-auto">
          <h3 class="text-gradient text-primary mb-0">You liked it and</h3>
          <h3>Want more?</h3>
          <p class="pe-md-5 mb-4">
            Most complex and innovative Design System Made by <a href="https://creative-tim.com/" target="_blank">Creative Tim </a> . Check our latest Premium Bootstrap 5 UI Kit.

            Designed for those who like bold elements and beautiful websites. Made of hundred of elements, designed blocks and fully coded pages, Material Kit is ready to help you create stunning websites and webapps.
          </p>
        </div>
        <div class="col-md-5 col-12 my-auto">
          <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
            <img class="w-100 border-radius-lg shadow-lg" src="https://s3.amazonaws.com/creativetim_bucket/products/46/original/material-kit-pro.jpg?1632843641" alt="Product Image">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Sosmed Section -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-auto">
          <h4 class="mb-1">Thank you for your support!</h4>
          <p class="lead mb-0">We deliver the best web products</p>
        </div>
        <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit" class="btn btn-twitter mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit" class="btn btn-facebook mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1"></i> Share
          </a>
          <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit" class="btn btn-pinterest mb-0 me-2" target="_blank">
            <i class="fab fa-pinterest me-1"></i> Pin it
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

