@extends('layouts.after-login')

@section('content')
<div id="home" class="big-bg">
  @component('components.header')
  @endcomponent
    <div class="home-content wrapper">
        <h2>あなたの好きなYoutuberの軌跡を投稿しよう</h2>
    </div><!-- /.home-content -->
  </div><!-- /#home -->
@endsection
