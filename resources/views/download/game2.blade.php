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
        <a href="https://a-trade.jp/redirect/nijikano?media=G16531"><img src="https://trading-ad.net/a-trade/banner/niji_600x500_021.jpg" alt=""></a>
        <a href="https://a-trade.jp/redirect/nijikano?media=G16531"><img src="{{ asset('/images/d_2.png') }}"></img></a>
        <p>移動後は、<span>「入手」ページより無料で</span>始められます。</p>
    </div>
@endsection