{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin2')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'OSを選択して下さい')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="body">
        <br />
        <br />
        <br />
        <p>ただいま公式アプリダウンロードページへ移動中です。<br><span>下記より対象OSを選択して下さい。</span></p>
        <a href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8126&site_id=27669"><img src="{{ asset('/images/d_2.png') }}"></img></a>
    </div>
@endsection