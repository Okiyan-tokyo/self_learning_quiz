
<x-layout>
<x-slot name="title">お知らせ</x-slot>
{{-- jsは必要ない --}}
<x-slot name="js_needless">{{True}}</x-slot>
<div id="finish_sign">

  <p  class="finish_p">
    {!! nl2br(e($is_ok ? $naiyou :"エラーです\n".$naiyou)) !!}
  </p>

  <p class="back_home_inner"><a href="{{route($pageRoute)}}">戻る</a></p>
  <p class="back_home_inner"><a href="{{route("indexroute")}}">トップページへ</a></p>
</div>

</x-layout>