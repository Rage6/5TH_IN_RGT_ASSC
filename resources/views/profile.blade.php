@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload Your Profile') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('profile.update_current') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="version" value="current">
                                        <div class="form-group row">
                                            <label for="current_img" class="col-md-4 col-form-label text-md-right">Current Image</label>
                                            @if (auth()->user()->current_img)
                                              <img class="img-thumbnail" src="{{ auth()->user()->current_img }}?t=<?php echo(time()); ?>">
                                            @else
                                              <img class="img-thumbnail" src="/uploads/images/profile-default.jpg">
                                            @endif
                                            <div class="col-md-6">
                                                <input id="current_img" type="file" class="form-control" name="select_img">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>

                                    <form action="{{ route('profile.update_veteran') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="version" value="veteran">
                                        <div class="form-group row">
                                            <label for="veteran_img" class="col-md-4 col-form-label text-md-right">Veteran Image</label>
                                            @if (auth()->user()->veteran_img)
                                              <img class="img-thumbnail" src="{{ auth()->user()->veteran_img }}?t=<?php echo(time()); ?>">
                                            @else
                                              <img class="img-thumbnail" src="/uploads/images/profile-default.jpg">
                                            @endif
                                            <div class="col-md-6">
                                                <input id="veteran_img" type="file" class="form-control" name="select_img">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class='btn'>
                                      <a href="{{ route('edit') }}">
                                        {{ __('BACK') }}
                                      </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
