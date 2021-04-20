@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Your Links') }}</div>
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
                                    <form method="POST" action="links/delete">
                                      @csrf
                                      <div class="card">
                                        @foreach ($all_links as $one_link)
                                        <div>
                                          <div>
                                            Name: {{ $one_link->name }}
                                          </div>
                                          <div>
                                            Link: {{ $one_link->url }}
                                          </div>
                                          <input type="hidden" name="link_id" value="{{ $one_link->id }}">
                                          <input class="btn btn-primary btn-danger" type="submit" value="X"/>
                                        </div>
                                        @endforeach
                                      </div>
                                    </form>
                                    <form method="POST" action="links/add">
                                      @csrf
                                      <div class="card">
                                        <input type="hidden" name="user_id" value="{{ $this_user->id }}"/></br>
                                        <input type="text" name="link_name" placeholder="New Name"/></br>
                                        <input type="text" name="link_url" placeholder="New Website"/></br>
                                        <button type="submit" name="addNewLink">SUBMIT NEW LINK</button>
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
