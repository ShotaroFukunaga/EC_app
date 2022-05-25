<!-- 初期値の設定 ※propsで設定する場合、それぞれの変数に初期値を設定しなくてはならない-->
@props([
        'title',
        'message' => '初期値です。',
        'content' => 'コンテンツ初期値です'
        ])
<!-- 属性を渡すパターン -->
<div class="border-2 shadow-md w-1/4 p-2">
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>