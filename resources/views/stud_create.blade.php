<!--TODO Should only be accessible by admins -->
@extends('layouts.app')

@section('content')
@section('header')

@stop
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card pt-3"  style="border-radius:10px 10px 10px 10px; opacity:0.85; display:inline-block; margin-top:3%;">
                <div class="card-body">
                <img src="http://btechgeu.in/images/logo_graphic_era.gif" style='width:100%;height:20%'>
                </div>
                <div class="card-body">
                    <form method="POST" action="/create">
                        @csrf
                        <h4 class="text-center pb-2">Add Student Details</h4>
                        <div class="form-group row">
                            <label for="userid" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>

                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control @error('userid') is-invalid @enderror" name="userid" value="{{ old('userid')}}" required autocomplete="userid"  autofocus>

                                @error('userid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username')}}" required  autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __("Father's Name") }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="fname" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname">

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __("Mother's Name") }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="mname" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname') }}" required autocomplete="mname">

                                @error('mname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email-id') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}"  autocomplete="email">

                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror"  name="phone" value="{{ old('phone')}}"  autocomplete="phone">
                                <p>Note : It will be the intial password for student's login account</p>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" autocomplete="dob">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tenthBoard" class="col-md-4 col-form-label text-md-right">{{ __('10th Board') }}</label>

                            <div class="col-md-6">
                                <input id="tenthBoard" type="tenthBoard" class="form-control @error('tenthBoard') is-invalid @enderror" name="tenthBoard"  autocomplete="new-tenthBoard">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tenthPercentage" class="col-md-4 col-form-label text-md-right">{{ __('10th Percentage') }}</label>

                            <div class="col-md-6">
                                <input id="tenthPercentage" type="tenthPercentage" class="form-control @error('tenthPercentage') is-invalid @enderror" name="tenthPercentage"  autocomplete="new-tenthPercentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twelfthBoard" class="col-md-4 col-form-label text-md-right">{{ __('12th Board') }}</label>

                            <div class="col-md-6">
                                <input id="twelfthBoard" type="twelfthBoard" class="form-control @error('twelfthBoard') is-invalid @enderror" name="twelfthBoard"  autocomplete="new-twelfthBoard">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twelfthPercentage" class="col-md-4 col-form-label text-md-right">{{ __('12th Percentage') }}</label>

                            <div class="col-md-6">
                                <input id="twelfthPercentage" type="twelfthPercentage" class="form-control @error('twelfthPercentage') is-invalid @enderror" name="twelfthPercentage"  autocomplete="new-twelfthPercentage">
                            </div>
                        </div>


                        <div class="form-group row">
                        <label for="university" class="col-md-4 col-form-label text-md-right">{{ __('University') }}</label>
                            <div class="col-md-6">
                                <select id="university" class=" form-control" name = 'university' required autofocus>
                                    <option hidden disabled selected value></option>
                                    <option value="GEU">Graphic Era (Deemed to be) University</option>
                                    <option value="GEHU">Graphic Era Hill University</option>
                                    <option value="GEHUB">Graphic Era Hill University Bhimtal</option>
                                </select>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="course" class="form-control @error('course') is-invalid @enderror" name="course"  autocomplete="new-course">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-md-4 col-form-label text-md-right">{{ __('Branch') }}</label>

                            <div class="col-md-6">
                                <input id="branch" type="branch" class="form-control @error('branch') is-invalid @enderror" name="branch"  autocomplete="new-branch">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="grad_year" class="col-md-4 col-form-label text-md-right">{{ __('Graduation Year') }}</label>

                            <div class="col-md-6">
                                <input id="grad_year" type="grad_year" class="form-control @error('grad_year') is-invalid @enderror" name="grad_year"  autocomplete="new-grad_year">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger" href="google.com" style="width: 100%;">
                                    {{ __('Add Details') }}
                                    </a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('footer')

@stop
</div>
@endsection
