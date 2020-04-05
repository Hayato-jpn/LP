{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin3')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '高時給 & 在宅バイト特集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <header>
        <img src="{{ asset('/images/top2.jpg') }}" class="img-width-100"></img>
        <a name="top"></a>
        <h3>【2020年度「春」版！】<br />高時給 & 在宅バイト特集！</h3>
        <img src="{{ asset('/images/person.jpg') }}" class="img-width editor"></img>
    </header>
    <div class="ranking">
        <a href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669" target="_blank"><img src="{{ asset('/images/rank_no.1.jpg') }}" class="img-width"></img></a>
        <div class="ikukuru">
            <div class="box14">
                <p>登録人数1,300万人突破！</p>
                <p>約20年運営実績を誇る老舗アプリ</p>
                <p>毎日2,000人以上が登録！</p>
                <p>リッチな男性が多数在籍しているから、初心者でも簡単！</p>
            </div>
            <p>パパ活アプリでは無いものの良質な出会いがあることから人気のポイント♬<br /><span>高収入高学歴男性が多くパパ活活用している女性にも人気！</span></p>
            <a href="https://www.gamefeat.net/webapi/v1/reportClick?ad_id=8218&site_id=27669" class="btn-square-so-pop" target="_blank">   公式アプリ   ↩︎</a>
            <p>※公式アプリに飛びます↗️️</p>
        </div>
        <a href="https://a-trade.jp/redirect/biscor?media=G16531" target="_blank"><img src="{{ asset('/images/biscor_rank.jpg') }}" class="img-width"></img></a>
        <div class="biscor">
            <div class="box14">
                <p>最高時給4,200円！</p>
                <p>ライブ配信でデビュー!?</p>
                <p>勿論、顔出しNGもOK！</p>
                <p>スマホでスキマ時間から働けます</p>
            </div>
            <p>おしゃべり好き必見！<br /><span>会員ユーザーとお話・悩み相談を受けるだけのバイト♬</span><br />スマホでスキマ時間に始められるから、忙しい方にも！</p>
            <a href="https://a-trade.jp/redirect/biscor?media=G16531" class="btn-square-so-pop" target="_blank">   公式ページ   ↩️︎</a>
            <p>※公式ページに飛びます↗️️</p>
        </div>
        <a href="https://a-trade.jp/redirect/moa?media=G16531" target="_blank"><img src="{{ asset('/images/rank_moa.jpg') }}" class="img-width"></img></a>
        <div class="moa">
            <div class="box14">
                <p>最高時給3,600円！</p>
                <p>LINE感覚でお話するだけ♬</p>
                <p>だから、好きな時間・場所でOK！</p>
                <p>今、巷で女性ユーザー急増中</p>
            </div>
            <p>ユーザー間のやり取りは専用アプリを使うので<span>身バレの心配ありません！</span></p>
            <a href="https://a-trade.jp/redirect/moa?media=G16531" class="btn-square-so-pop" target="_blank">   公式ページ   ↩︎</a>
            <p>※公式ページに飛びます↗️️</p>
        </div>
        <a href="https://a-trade.jp/redirect/charin?media=G16531" target="_blank"><img src="{{ asset('/images/rank_charin.jpg') }}" class="img-width"></img></a>
        <div class="charin">
            <div class="box14">
                <p>最高時給4,200円！</p>
                <p>SNS感覚で利用可能♬</p>
                <p>SNS利用者にはピッタリ！</p>
                <p>新規サービスでユーザー募集中</p>
            </div>
            <p>専用アプリだけで<span>月10万円達成者「多数！」</span>手堅く稼ぎたいならコレ！</p>
            <a href="https://a-trade.jp/redirect/charin?media=G16531" class="btn-square-so-pop" target="_blank">   公式ページ   ↩︎</a>
            <p>※公式ページに飛びます↗️️</p>
        </div>
    </div>
    <div class="line"></div>
    <footer>
        <img src="{{ asset('/images/footer_pic.jpg') }}" class="img-width"></img>
        <a href="#top"><img src="{{ asset('/images/footer.jpg') }}" class="img-width-footer"></img></a>
    </footer>
@endsection