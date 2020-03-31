{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin2')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '公式ページへ遷移しています')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="body">
        <br />
        <p class="text-left">ただいま公式キャンペーンページへ移動中です。<br />自動遷移しない場合、<span class="span-class">再度コチラをタップして下さい。</span></p>
        <a href="https://a-trade.jp/redirect/nijikano?media=G16531" class="btn-square">公式ページへ</a>
        <p class="text-left">移動後は、<span class="span-class">「入手」ページより無料で</span>始められます。</p>
        <!--<a href="https://a-trade.jp/redirect/nijikano?media=G16531" class="img-width"><img src="https://trading-ad.net/a-trade/banner/niji_600x500_021.jpg" alt=""></a>-->
        <a href="https://a-trade.jp/redirect/nijikano?media=G16531"><img src="{{ asset('/images/nijigen.png') }}" class="img-width"></img></a>
    </div>
@endsection