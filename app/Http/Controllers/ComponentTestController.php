<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent1(){
        $message = 'メッセージ';
        // compact → 変数をカンマ区切りでいくらでも繋げられる
        return view('tests.component-test1',
                    compact('message'));
    }
    public function showComponent2(){
        return view('tests.component-test2');
    }
}
