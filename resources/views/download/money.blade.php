{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin2')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'OSを選択して下さい')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="body">
        <br />
        <br />
        <h2><span>【女性専用】副業特集！</span></h2>
        <h4>学校やバイト・仕事の隙間時間に🎵</h4>
        <br />
        <br />
        <img class="img-width" src="{{ asset('/images/attention.png') }}"></img>
        <div class="line"></div>
        <!--Biscor-->
        <img class="img-width" src="{{ asset('/images/biscor.png') }}"></img>
        <p>【初心者必見！？】<br />ライブ配信型アプリ🎵</p>
        <a href="#" class="btn-square">公式ページへ</a>
        <div class="line"></div>
        <!--モア-->
        <img class="img-width" src="{{ asset('/images/moa.png') }}"></img>
        <p>LINE感覚でお話するだけ🎵<br />簡単お小遣いゲット！</p>
        <a href="#" class="btn-square">公式ページへ</a>
        <div class="line"></div>
        <!--ギフトチャット-->
        <img class="img-width" src="{{ asset('/images/giftchat.png') }}"></img>
        <p>Amazon、iTunesカードが貰える!!??<br />ポイントを貯めて無料でゲット！</p>
        <a href="#" class="btn-square">App Storeへ</a>
        <div class="line"></div>
        <!--ベリー-->
        <img class="img-width" src="{{ asset('/images/berry.png') }}"></img>
        <p>【髪型服装自由！】<br />自宅で出来るチャットレディのお仕事🎵</p>
        <a href="#" class="btn-square">公式ページへ</a>
        <div class="line"></div>
        <!--チャリン-->
        <img class="img-width" src="{{ asset('/images/charin.png') }}"></img>
        <p>【SNSで稼ぐ!!??】<br />SNS型お小遣いアプリ🎵</p>
        <a href="#" class="btn-square">公式ページへ</a>
        <div class="line"></div>
        <!--ワクワク-->
        <img class="img-width" src="{{ asset('/images/wakuwaku.png') }}"></img>
        <p>【平均お手当時給 1万円超え!!??】<br />大手企業運営パパ活アプリ🎵</p>
        <a href="#" class="btn-square">紹介ページへ</a>
        <div class="line"></div>
        <h3>まとめ</h3>
        <p>今回個人用に女性向け副業サービスをまとめて見ました。どれも評判良いサービスを中心にピックアップしており、特に高時給と時間に都合付けれる点は良さそう🎵</p>
        <p>期間限定での紹介になるので、とりあえず公式ページを見るなど ご利用はお早めに!!!</p>
        <br />
        <br />
    </div>
@endsection