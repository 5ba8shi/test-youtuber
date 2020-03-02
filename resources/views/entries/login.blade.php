@extends('layouts.before-login')

@section('content')
  <div id="home" class="big-bg">
    <div class="wrapper"> 
        <div class="home-content">
            <h2>あなたの好きなYoutuberの軌跡を投稿しよう</h2>
            <br>
            <br>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a class="button" href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a class="button" href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div><!-- /.home-content -->
  </div><!-- /#home -->
@endsection