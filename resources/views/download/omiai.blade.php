{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin5')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'OSを選択して下さい')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="body">
        <div class="container">
            
          <section class="area">
            <h1>scroll-snap-type: y</h1>
            <p>1</p>
          </section>
          
          <section class="area">
            <h1>scroll-snap-type: y</h1>
            <p>2</p>
          </section>
          
          <section class="area">
            <h1>scroll-snap-type: y</h1>
            <p>3</p>
          </section>
          
          <section class="area">
            <h1>scroll-snap-type: y</h1>
            <p>4</p>
          </section>
          
          <section class="area">
            <h1>scroll-snap-type: y</h1>
            <p>5</p>
          </section>
          
        </div>
    </div>
@endsection