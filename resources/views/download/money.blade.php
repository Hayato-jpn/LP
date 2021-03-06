{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin2')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '2020年度版 - 女性専用！副業特集！')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="body">
        <!--<br />-->
        <!--<br />-->
        <!--<h2><span>【女性専用】副業特集！</span></h2>-->
        <img class="img-width-100" src="{{ asset('/images/top.jpg') }}"></img>
        <h4><span>学校やバイト・仕事の隙間時間にも🎵</span></h4>
        <!--<br />-->
        <!--<br />-->
        <!--<img class="img-width" src="{{ asset('/images/attention.png') }}"></img>-->
        <div class="line"></div>
        <!--Biscor-->
        <img class="img-width" src="{{ asset('/images/biscor.png') }}"></img>
        <p>【初心者必見！？】<br /><span>ライブ配信型アプリ🎵</span></p>
        <a href="https://a-trade.jp/redirect/biscor?media=G16531" class="btn-square" target="_blank">公式ページへ</a>
        <div class="line"></div>
        <!--モア-->
        <img class="img-width" src="{{ asset('/images/moa.png') }}"></img>
        <p><span>LINE感覚でお話するだけ🎵</span><br />簡単お小遣いゲット！</p>
        <a href="https://a-trade.jp/redirect/moa?media=G16531" class="btn-square" target="_blank">公式ページへ</a>
        <div class="line"></div>
        <!--ギフトチャット-->
        <img class="img-width" src="{{ asset('/images/giftchat.png') }}"></img>
        <p><span>Amazon、iTunesカードが貰える!!??</span><br />ポイントを貯めて無料でゲット！</p>
        <a href="https://a-trade.jp/redirect/giftchat?media=G16531" class="btn-square" target="_blank">App Storeへ</a>
        <div class="line"></div>
        <!--ベリー-->
        <img class="img-width" src="{{ asset('/images/berry.png') }}"></img>
        <p><span>【髪型服装自由！】</span><br />自宅で出来るチャットレディのお仕事🎵</p>
        <a href="https://a-trade.jp/redirect/berry?media=G16531" class="btn-square" target="_blank">公式ページへ</a>
        <div class="line"></div>
        <!--チャリン-->
        <img class="img-width" src="{{ asset('/images/charin.png') }}"></img>
        <p>【SNSで稼ぐ!!??】<br /><span>SNS型お小遣いアプリ🎵</span></p>
        <a href="https://a-trade.jp/redirect/charin?media=G16531" class="btn-square" target="_blank">公式ページへ</a>
        <div class="line"></div>
        <!--ワクワク-->
        <img class="img-width" src="{{ asset('/images/wakuwaku.png') }}"></img>
        <p><span>【平均お手当時給 1万円超え!!??】</span><br />大手企業運営パパ活アプリ🎵</p>
        <a href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8150&site_id=27669" class="btn-square" target="_blank">App Storeへ</a>
        <div class="line"></div>
        <!--<br />-->
        <!--<br />-->
        <img class="img-width" src="{{ asset('/images/attention.png') }}"></img>
        <!--<br />-->
        <!--<br />-->
        <div class="line"></div>
        <h3>まとめ</h3>
        <p>今回個人用に女性向け副業サービスをまとめて見ました。どれも評判良いサービスを中心にピックアップしており、特に<span>高時給と時間に都合付けれる点は良さそう🎵</span></p>
        <p>期間限定での紹介になるので、とりあえず公式ページを見るなど<span>ご利用はお早めに!!!</span></p>
        <br />
        <br />
    </div>
@endsection