{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'OSを選択して下さい')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="body">
        <br />
        <br />
        <br />
        <img src="{{ asset('/images/gf_2.png') }}"></img>
        <br />
        <br />
        <br />
        <p>ただいま公式アプリダウンロードページへ移動中です。<br>下記より対象OSを選択して下さい。</p>
        <a href="https://preaf.jp/pa.do?s=v04031&o=45028&guid=ON"><img src="{{ asset('/images/d_2.png') }}"></img></a>
    </div>
@endsection