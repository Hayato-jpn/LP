{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'OSを選択して下さい')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <br>
                <br>
                <br>
                <img src="{{ asset('/images/giftchat.png') }}"></img>
                <br>
                <br>
                <P>ただいま公式アプリダウンロードページへ移動中です。<br>下記より対象OSを選択して下さい。</P>
                <a href="https://preaf.jp/pa.do?s=v04031&o=45028&guid=ON"><img src="{{ asset('/images/ios.png') }}"></img></a>
                <br>
                <a href="https://preaf.jp/pa.do?s=v04031&o=45028&guid=ON"><img src="{{ asset('/images/android.png') }}"></img></a>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection