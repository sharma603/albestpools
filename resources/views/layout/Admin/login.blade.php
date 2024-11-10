@extends('layout.Admin.AdminLayout');
@section('title','Login')
<!-- custome css -->
@section('custome-css')
<link rel="stylesheet" href="{{ asset('asset/css/AdminCss/login.css') }}">
@endsection
<!-- end custome css -->
 <!-- custome javascript -->
  @section('custome-javascript')
  @endsection
 <!-- end custome javascript -->
@section('body')
 <!-- Login Form -->
 <div class="login-container">
        <h1>Albest Pools Contracting and Service</h1>
        <h2>Admin Login</h2>
        <form id="loginForm">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                <div class="error-message" id="emailError"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                <div class="error-message" id="passwordError"></div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="login-btn">Login</button>
            <div class="mt-3 text-center">
                <a href="#" class="text-primary">Forgot Password?</a>
            </div>
        </form>
        <div id="loginError" class="error-message"></div>
    </div>
     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection