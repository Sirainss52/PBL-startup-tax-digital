@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css')}}" />
<div class="container mt-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <nav id="sidebar" class="d-md-block bg-light sidebar collapse">
              <div class="profile text-center mt-3 position-relative">
                <div class="image-wrapper">
                  <img id="profileImage" src="images/profile/user-1.jpg" class="rounded-circle img-fluid" alt="Profile Picture">
                  <div id="changeText" class="change-text">Changing Picture</div>
                </div>
              </div>
              <input type="file" id="profileUpload" accept="image/*" class="d-none">
              <h3 class="text-center mt-3">Name</h3>
              <p class="card-text u-align-center">email :</p>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Password</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Security</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Application</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Notification</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <main role="main" id="account">
              <h1 class="mt-4">Account Settings</h1>
              <form>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" value="brian">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" value="gtg">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value="briangtgit92@gmail.com">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" value9="+19876543215">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" value="OCC">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" id="designation" value="UI and UI">
                  </div>
                </div>
                <div class="form-group">
                  <label for="bio">Bio</label>
                  <textarea class="form-control" id="bio" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
                </div>
                <div class="form-group mt-2 mb-2">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="button" class="btn btn-secondary">Cancel</button>
                </div>
              </form>
            </main>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection