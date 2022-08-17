@extends('layouts.app')
@section('content')
   <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="{{asset('public/images/img4.webp')}}"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">User registration form</h3>

                <form action="{{ route('createuser') }}" method="POST">
                            @csrf
                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                  <label class="form-label" for="name">Name</label>
                    @if ($errors->has('name'))
                     <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email</label>
                </div>
                @if ($errors->has('email'))
                   <span class="text-danger">{{ $errors->first('email') }}</span>
                 @endif

                 
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Mobile</label>
                </div>

                <div class="d-flex justify-content">
                  <!-- <button type="button" class="btn btn-light btn-lg">Reset all</button> -->
                  <button type="submit" class="btn btn-light btn-lg">Submit form</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
