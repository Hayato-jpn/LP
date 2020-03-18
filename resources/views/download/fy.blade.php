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
        <p>ただいま公式キャンペーンページへ移動中です。<br><span>下記より対象OSを選択して下さい。</span></p>
        <a href="https://preaf.jp/pa.do?s=v04031&o=42149&guid=ON"><img src="{{ asset('/images/d_2.png') }}"></img></a>
        <p>移動後は、<span>公式アプリ内をCHECK</span>して下さい。</p>
    </div>
@endsection