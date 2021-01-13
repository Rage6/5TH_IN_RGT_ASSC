@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Administration Center') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                  <div class="card-header">
                    MEMBER LIST
                  </div>
                  @foreach ($final_all_users as $one_user)
                    <div>
                      {{ $one_user->first_name }} {{ $one_user->last_name }}
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
