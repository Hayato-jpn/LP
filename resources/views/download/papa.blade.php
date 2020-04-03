{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin4')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'パパ活ゼミ♬')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <header>
        <a name="title"><img src="{{ asset('/images/papa_top.jpg') }}" class="img-width"></img></a>
        <img src="{{ asset('/images/person.jpg') }}" class="img-width"></img>
    </header>
    <div class="main-top">
        <h4><span>~ パパ活女子「238人」にアンケート！ ~</span></h4>
        <h2>最人気パパ活アプリは何！？</h2>
        <img src="{{ asset('/images/papa_rank.png') }}" class="img-width"></img>
    </div>
    <div class="main-body">
        <h3>【限定3選】人気アプリランキング！</h3>
        <p><span>今はマッチングアプリ・SNSでのパパ活が主流！？</span></p>
        <ul class="ranking-box">
            <li><a href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669" target="_blank"><img src="{{ asset('/images/ikukuru_app.jpg') }}"></a></li>
            <li><a href="https://fam-ad.com/ad/p/r?_site=64802&_article=16786" target="_blank"><img src="{{ asset('/images/wakuwaku_app.jpg') }}"></a></li>
            <li><img src="{{ asset('/images/twitter_app.jpg') }}"></li>
        </ul>
        <br>
        <h3>「1位：イククル」ってどんなアプリ？</h3>
        <a href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669" target="_blank"><img src="{{ asset('/images/rank_no.1.jpg') }}" class="img-width"></a>
        <img src="{{ asset('/images/ikukuru_detail.jpg') }}" class="img-width">
        <h3>▽ イククル特徴 ▽</h3>
        <div class="ikukuru">
            <p>全ユーザー1,300万人突破・約20年の運営実績！毎日2,000人以上が登録。だから、男性ユーザーが豊富！かつ、<span>太パパ(高額報酬を支払うリッチな男性)が一番多い</span>との声♬ だから、初心者向きとの声多数！</p>
        </div>
        <a href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669" target="_blank"><img src="{{ asset('/images/rank_no.1.jpg') }}" class="img-width"></a>
        <p>パパ活するなら効率良く稼ぎたいと思いますよね？<span>同じ内容でもパパ次第で2倍・3倍にもなるパパ活</span>。難しい条件交渉だからこそ、</P>
        <h2 class="detail">「余裕があるパパを厳選したい！」</h2>
        <p>そして、色々試した結果、イククルにたどり着いたという方も多くいました。悪質ユーザーは事前にBANしてくれたり、しっかりした運営との声も！勿論、</p>
        <h2 class="detail">「女性は完全無料」</h2>
        <p>なので、<span>登録後、すぐお小遣い稼ぎ開始出来る</span>のも特徴！まず始めにアプリインストールだけして、<span>どんなパパがいるか確認するだけ</span>でもいいかも♬<br><span>期間限定紹介の為、急遽紹介が終了</span>する場合がございます。</p>
        <a href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669" target="_blank"><img src="{{ asset('/images/dl_ios.jpg') }}" class="img-width"></a>
    </div>
    <footer>
        <br>
        <br>
        <br>
        <a href="#title"><img src="{{ asset('/images/footer.jpg') }}" class="img-width"></a></li>
    </footer>
@endsection