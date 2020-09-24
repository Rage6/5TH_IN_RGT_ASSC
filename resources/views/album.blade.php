@extends('layouts.master')

@section('album_style')

  @include ('footer.style')
@stop

@section('album_content')
  <div style="margin-top:100px">
    This worked
  </div>
  @include ('footer.content')
@stop
