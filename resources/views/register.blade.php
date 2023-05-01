@extends('layout.app')
@section('title')
<title>Document Archiving and Tracking</title>
@endsection
@section('css')
    <style>
        .h-fit{
            height: fit-content
        }
        .link{
            color: black;
            text-decoration: none;
        }
        .link:hover{
            color: #198754;
        }
        body {
            background-image: url('/storage/assets/bg.png');
            background-size: contain;
        }
    </style>
@endsection
@section('content')
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-6">
                <div class="container h-100 d-flex align-items-center">
                    <div class="h-fit text-center">
                        <img src="/storage/assets/dnsc-logo.png" alt="dnsc icon" class="img-fluid w-75">
                        <h3 class="text-center mt-2 text-success">DOCUMENT ARCHIVING AND TRACKING</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-3">
                <div class="d-flex align-items-center h-100">
                    <form enctype="multipart/form-data" action="{{ route('users.store') }}" method="POST" class="bg-white p-3 rounded w-100">
                        @csrf
                        @method('POST')
                        <div class="container mt-3 mb-3">
                            <h3 class="text-center text-success">Register</h3>
                            <div class="mt-3">
                                <span>Firstname</span>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter firstname" required value="{{ old('firstname') }}">
                                @error('firstname')
                                    <span class="text-danger error_firstname">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <span>Middlename</span>
                                <input type="text" class="form-control" name="middlename" placeholder="Enter middlename" value="{{ old('middlename') }}">
                                @error('middlename')
                                    <span class="text-danger error_middlename">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <span>Surname</span>
                                <input type="text" class="form-control" name="surname" placeholder="Enter surname" required value="{{ old('surname') }}">
                                @error('surname')
                                    <span class="text-danger error_surname">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <span>Suffix</span>
                                <input type="text" class="form-control" name="suffix" placeholder="Enter suffix" value="{{ old('suffix') }}">
                                @error('suffix')
                                    <span class="text-danger error_suffix">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <span>Username</span>
                                <input type="text" class="form-control" name="username" placeholder="username" required value="{{ old('username') }}">
                                @error('username')
                                    <span class="text-danger error_username">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <span>Password</span>
                                <input type="password" class="form-control" name="password" placeholder="password" required value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger error_username">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <span>Confirm Password</span>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <span class="text-danger error_password_confirmation">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <span>Image</span>
                                <input type="file" class="form-control" name="img" placeholder="image" accept="image/png,image/jpg,image/jpeg" required>
                                @error('img')
                                    <span class="text-danger error_username">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3 text-center">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                            <hr>
                            <div class="mt-3 text-center">
                                <a href="{{ route('login-page') }}" class="link">Already have an account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@vite(['resources/js/login.js'])
@endsection