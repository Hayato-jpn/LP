{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin3')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'OSを選択して下さい')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <header>
        <!--<img src="{{ asset('/images/top_hukugyou.jpg') }}" class="img-width-100"></img>-->
        <img src="{{ asset('/images/top2.jpg') }}" class="img-width-100"></img>
        <h2><span>学校やバイト・仕事の隙間時間にも🎵</span></h2>
        <div class="line"></div>
        <img src="{{ asset('/images/person.jpg') }}" class="img-width"></img>
        <div class="line"></div>
    </header>
@endsection