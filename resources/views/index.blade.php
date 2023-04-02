@extends('layouts.app')

@section('content')
<style>
.bg-image{
    background: url('https://images.unsplash.com/photo-1523867574998-1a336b6ded04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2370&q=80') no-repeat center center/cover;
    background-attachment: fixed;
    height: 600px;
    margin: 0px;
    padding: 0px;
}

</style>
<i class="fa-brands fa-laravel"></i>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light bg-image">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Punny headline</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>
<br>
<div class="container ">

  <div class="row featurette ">
    <div class="col-md-3 order-md-1" style="display: block;">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    <div class="col-md-7 order-md-2  " style="padding: 20px">
      <h2 class="featurette-heading " >Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        <p> This is the first paragraph of text. This is the first paragraph of text. This
            is the first paragraph of text. This is the first paragraph of text.</p>
            <button type="button" class="btn btn-info"><a href="/">Read more</a></button>
    </div>

  </div>
  <hr class="featurette-divider">
  <div class="row featurette ">
    <div class="col-md-3 order-md-1" style="display: block;">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="350" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    <div class="col-md-7 order-md-2  " style="padding: 20px">
      <h2 class="featurette-heading " >Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        <p> This is the first paragraph of text. This is the first paragraph of text. This
            is the first paragraph of text. This is the first paragraph of text.</p>
            <button type="button" class="btn btn-info"><a href="/">Read more</a></button>
    </div>

  </div>
</div>
<div class="my-5" style="background-color: bisque">
  <div class="p-5 text-center bg-body-tertiary">
    <div class="container py-2 ">
      <h1 class="text-body-emphasis p-5">Blog Categories</h1>
      <div class="row">
        <div class="col-md-4 p-5">
          <h1 class="text-body-emphasis">PHP</h1>
        </div>
        <div class="col-md-4 p-5">
          <h1 class="text-body-emphasis">LARAVEL</h1>
        </div>
        <div class="col-md-4 p-5">
          <h1 class="text-body-emphasis">BACKEND </h1>
        </div>

      </div>

    </div>
  </div>
</div>
<div class="container">
  <h1 style="text-align: center; font: bold; padding: 20px; ">Recent Posts</h1>
  <div class="card mb-3" style="max-width: 540px;margin: auto">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="https://images.unsplash.com/photo-1680372669294-570f598ce2e5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2372&q=80" class="img-fluid rounded-start" alt="..." style="height: 170px; width: 385px;">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

