{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin2')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'Marrishとは？')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="body">
        <br />
        <p><span class="span-class">公式ページはコチラ(↓)からご確認下さい。</span></p>
        <a href="https://t.afi-b.com/visit.php?guid=ON&a=J11083W-f373861C&p=37183994" class="btn-square">App Storeへ</a>
        <br />
        <div class="line"></div>
        <!--<a href="https://a-trade.jp/redirect/nijikano?media=G16531" class="img-width"><img src="https://trading-ad.net/a-trade/banner/niji_600x500_021.jpg" alt=""></a>-->
        <img src="{{ asset('/images/mr_top.jpg') }}" class="img-width-100"></img>
        <img src="{{ asset('/images/mr_review.jpg') }}" class="img-width-100"></img>
        <img src="{{ asset('/images/mr_review_1.jpg') }}" class="img-width-100"></img>
        <img src="{{ asset('/images/mr_review_2.jpg') }}" class="img-width-100"></img>
        <img src="{{ asset('/images/mr_review_3.jpg') }}" class="img-width-100"></img>
        <a href="https://t.afi-b.com/visit.php?guid=ON&a=J11083W-f373861C&p=37183994"><img src="{{ asset('/images/marrish_dl.jpg') }}" class="img-width-100"></img></a>
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
@endsection