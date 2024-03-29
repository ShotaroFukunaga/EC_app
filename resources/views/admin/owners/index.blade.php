<x-app-layout>
    <!-- ↓名前付きスロット、上がクラス、 -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- エロクアント
                    @foreach($eloquent_all as $eloquent_owner)
                      {{ $eloquent_owner->name }}
                      {{ $eloquent_owner->created_at->diffForHumans() }}
                    @endforeach
                    <br>
                    クエリビルダー
                    @foreach($query_get as $query_owner)
                      {{ $query_owner->name }}
                      {{ $query_owner->created_at }} クエリビルダーはCarbonクラスを引き継いでないため
                      {{ Carbon\Carbon::parse( $query_owner->created_at )->diffForHumans() }}
                    @endforeach --}}
                    
                    
                      
                    <section class="text-gray-600 body-font">
                      <div class="container px-5  mx-auto">
                        <x-flash-message status="info"/>
                        {{-- フラッシュメッセージにステータスを渡して背景色を変更する --}}
                        <div class="flex justify-end mb-4">
                          <button onclick="location.href='{{ route('admin.owners.create') }}'"class="text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">新規登録</button>
                        </div>

                        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                          <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                              <tr>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($owners as $owner)
                              <tr>
                                <td class="px-4 py-3">{{ $owner->name }}</td>
                                <td class="px-4 py-3">{{ $owner->email }}</td>
                                <td class="px-4 py-3">{{ $owner->created_at->diffForHumans() }}</td>
                                <td class="px-4 py-3">
                                  <button onclick="location.href='{{ route('admin.owners.edit', ['owner' => $owner->id]) }}'" class="text-white bg-yellow-400 border-0 py-2 px-4 focus:outline-none hover:bg-yellow-500 rounded">編集</button>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>