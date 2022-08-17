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
                  <input type="text" id="name" name="name" class="form-control form-control-lg" />
                  <label class="form-label" for="name">Name</label>
                </div>
                 @if ($errors->has('name'))
                    <span class="text-danger error-class">{{ $errors->first('name') }}</span>
                 @endif
                
                <div class="form-outline mb-4">
                  <input type="text" id="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email</label>
                </div>
                @if($errors->has('email'))
                   <span class="text-danger error-class">{{ $errors->first('email') }}</span>
                 @endif
              

                <div class="form-outline mb-4">
                  <input type="text" id="password"  name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="password">Password</label>
                </div>
                @if($errors->has('password'))
                   <span class="text-danger error-class">{{ $errors->first('password') }}</span>
                 @endif

                <div class="form-outline mb-4">
                  <input type="text" id="mobile" name="mobile" class="form-control form-control-lg" />
                  <label class="form-label" for="mobile">Mobile</label>
                </div>
                 @if($errors->has('mobile'))
                   <span class="text-danger error-class">{{ $errors->first('mobile') }}</span>
                 @endif

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
