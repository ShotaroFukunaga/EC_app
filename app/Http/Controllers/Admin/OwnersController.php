<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner; // Eloquent エロクアント
use Illuminate\Support\Facades\DB; // QueryBuilder クエリビルダー
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class OwnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $date_now = Carbon::now();
        // $date_parse = Carbon::parse(now());
        // echo $date_now->year;
        // echo $date_parse;

        // $eloquent_all = Owner::all();
        // $query_get = DB::table('owners')->select('name', 'created_at')->get();
        // $query_first = DB::table('owners')->select('name')->first();

        // var_dump($query_first);

        // $collection_test = collect([
        //     'name' => 'テスト',
        // ]);

        // dd($eloquent_all, $query_get, $query_first, $collection_test);

        $owners = Owner::select('name','email','created_at')->get();
        return view('admin.owners.index',
                        compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->name;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            //unique:adminだがsをつけて複数形にしないとエラーが出る、providerなどでは単数系で扱っているがデータベースでは複数形で表現されているため。
            'email' => ['required', 'string', 'email', 'max:255', 'unique:owners'],
            'password' => ['required', 'string', 'confirmed', 'min:8'],
        ]);

        Owner::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
        ->route('admin.owners.index')
        ->with('message', 'オーナー登録が完了しました。');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}