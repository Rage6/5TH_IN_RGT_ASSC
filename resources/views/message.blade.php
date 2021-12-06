@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ __('BOBCAT Messaging') }}
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card messageCard">
                      <form method="POST">
                        @csrf
                        <input type="hidden" name="receiver" value="{{ $view_user->id }}" readonly />
                        <input type="hidden" name="sender" value="{{ $this_user->id }}" readonly />
                        <textarea name="content" class="card-text messageText" placeholder="Insert your message here..." required ></textarea>
                        <div class="form-group">
                          <input class="btn-primary btn" type="submit" name="sendMessage" value="SEND"/>
                          <button class="btn">
                            <a href="{{ route('home') }}">
                              {{ __('BACK') }}
                            </a>
                          </button>
                        </div>
                      </form>
                      @if (count($conversation) > 0)
                        @foreach ($conversation as $one_talk)
                          @if ($this_user->id == $one_talk->sent_id)
                          <div class="selfMessage allMessages">
                          @else
                          <div class="otherMessage allMessages">
                          @endif
                            {{ $one_talk->content }}
                          </div>
                        @endforeach
                      @else
                        <div class="noMessages">
                          <i>No conversation yet.</i>
                        </div>
                      @endif
                    </div>
                    <!-- @csrf -->
                    <!-- <div class="card"> -->
                      <!-- <form method="POST" action="home/{{ $this_user->id }}"> -->
                      <!-- <form method="POST">
                        @csrf
                        <div class="card-title">
                          <u>TO:</u> <span>{{ $view_user->first_name }} {{ $view_user->last_name }}</span>
                          <input type="hidden" name="receiver_id" value="{{ $view_user->id }}" readonly />
                        </div>
                        <div class="card-title">
                          <u>FROM:</u> <span>{{ $this_user->first_name }} {{ $this_user->last_name }}</span>
                        </div>
                        <textarea name="content" class="card-text" style="height:200px;width:100%" placeholder="Insert your message here..." required ></textarea>
                        <div class="form-group">
                          <input class="btn-primary btn" type="submit" name="sendMessage" value="SEND"/>
                          <button class="btn">
                            <a href="{{ route('home') }}">
                              {{ __('BACK') }}
                            </a>
                          </button>
                        </div>
                      </form> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
