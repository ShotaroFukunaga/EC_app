<x-tests.app>
  <x-slot name="header">ヘッダー１</x-slot>
コンポーネント１

  <!-- 属性（props）パターンコンポーネントに属性を着けて、下記のように属性に対して値を渡すことができる -->
  <x-tests.card title="タイトル1" content="コンテンツ1" :message="$message"/>
  <!-- 変数（:meesage） :←ダブルコロンをつけることで変数だと明示的に表現する -->
  <x-tests.card title="タイトル２"></x-tests.card>
</x-tests.app>
