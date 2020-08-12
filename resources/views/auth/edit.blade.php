<!--
    TODO:Automatic fetch from database and Rules/Policy for access to be made
    Kunal Aaryen Sinha
    - 8709162797
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c45a11e6b.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/accordian.css')}}">
    <title>Edit</title>
</head>
<body>
@extends('layouts.app')
@section('content')
@section('exam-header')

@stop
@section('placements-header')

@stop
<link rel="stylesheet" href="{{asset('css/exam.css')}}">
<div class="container">
<div class="pb-5">
<form method="POST" action="/save">
    @csrf
          <h1>Edit Profile <br><button type="submit" class="btn btn-danger float-right">Save</button>
          </h1>
          @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
          <div class="accordion">
            <dl>
              <dt><a class="accordionTitle" href="#">Basic Information</a></dt>
              <dd class="accordionItem accordionItemCollapsed">
              <script type="text/javascript" src="{{asset('js/accordian.js')}}"></script>
              <div class="pt-3">
              <div class="form-group row">
                            <label for="userid" class="col-md-4 col-form-label text-md-right">{{ __('University ID') }}</label>

                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control @error('userid') is-invalid @enderror" name="userid" value="{{ old('userid') ?? Auth::user()->userid}}"  readonly autocomplete="userid" autofocus>

                            </div>
              </div>

              <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')?? Auth::user()->username}}"  autocomplete="name" autofocus>

                            </div>
              </div>

              <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? Auth::user()->email}}"  autocomplete="email" autofocus>

                            </div>
              </div>

              <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No.') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $data[0]->phone}}"  autocomplete="phone" autofocus>

                            </div>
              </div>

              <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __("Date of Birth") }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') ?? $data[0]->dob}}"  autocomplete="dob" autofocus>

                            </div>
              </div>

             </div>
              </dd>

              <dt><a href="#" class="accordionTitle">Parent's Information</a></dt>
              <dd class="accordionItem accordionItemCollapsed">
              <div class="pt-3">
              <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __("Father's Name") }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') ?? $data[0]->fname}}"  autocomplete="fname" autofocus>

                            </div>
              </div>

              <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __("Mother's Name") }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname') ?? $data[0]->mname}}"  autocomplete="mname" autofocus>

                            </div>
              </div>
              </dd>

              <dt><a href="#" class="accordionTitle">Address</a></dt>
              <dd class="accordionItem accordionItemCollapsed">
              <div class="pt-3">
              <div class="form-group row">
                            <label for="p_address" class="col-md-4 col-form-label text-md-right">{{ __("Permanent Address") }}</label>

                            <div class="col-md-6">
                                <textarea id="p_address" class="form-control @error('p_address') is-invalid @enderror" name="p_address"  autocomplete="p_address">{{$data[0]->p_address}}</textarea>
                            </div>
              </div>

              <div class="form-group row">
                            <label for="c_address" class="col-md-4 col-form-label text-md-right">{{ __("Correspondence Address") }}</label>

                            <div class="col-md-6">
                                <textarea id="c_address" class="form-control @error('c_address') is-invalid @enderror" name="c_address"  autocomplete="c_address">{{$data[0]->c_address}}</textarea>
                            </div>
              </div>

              </dd>

              <dt><a href="#" class="accordionTitle">Educational Details</a></dt>
              <dd class="accordionItem accordionItemCollapsed">
              <div class="pt-3">
              <div class="form-group row">
                            <label for="tenthBoard" class="col-md-4 col-form-label text-md-right">{{ __('10th Board') }}</label>

                            <div class="col-md-6">
                                <input id="tenthBoard" type="tenthBoard" class="form-control @error('tenthBoard') is-invalid @enderror" name="tenthBoard" value="{{ old('tenthBoard') ?? $data[0]->tenthBoard}}" readonly autocomplete="new-tenthBoard">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tenthPercentage" class="col-md-4 col-form-label text-md-right">{{ __('10th Percentage') }}</label>

                            <div class="col-md-6">
                                <input id="tenthPercentage" type="tenthPercentage" class="form-control @error('tenthPercentage') is-invalid @enderror" name="tenthPercentage" value="{{ old('tenthPercentage') ?? $data[0]->tenthPercentage}}" readonly autocomplete="new-tenthPercentage">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twelfthBoard" class="col-md-4 col-form-label text-md-right">{{ __('12th Board') }}</label>

                            <div class="col-md-6">
                                <input id="twelfthBoard" type="twelfthBoard" class="form-control @error('twelfthBoard') is-invalid @enderror" name="twelfthBoard" value="{{ old('twelfthBoard') ?? $data[0]->twelfthBoard}}" readonly autocomplete="new-twelfthBoard">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="twelfthPercentage" class="col-md-4 col-form-label text-md-right">{{ __('12th Percentage') }}</label>

                            <div class="col-md-6">
                                <input id="twelfthPercentage" type="twelfthPercentage" class="form-control @error('twelfthPercentage') is-invalid @enderror" name="twelfthPercentage" value="{{ old('twelfthPercentage') ?? $data[0]->twelfthPercentage}}" readonly autocomplete="new-twelfthPercentage">
                            </div>
                        </div>
                        </div>
              </dd>
            </dl>
            </form>
</div>
<div>
    <?php echo View::make('footer') ?>
</div>
@stop
</body>
</html>