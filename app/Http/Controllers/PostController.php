<?php

namespace App\Http\Controllers;

use App\Models\model_test;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_post()
    {
        // $posts = post::all();
        // $posts = post::find(2);
        // $posts = post::where('id', 2)->first();
        $posts = post::where('id', 2)->get(['emp_code']);
        dd($posts[0]->emp_code);
    }
    public function insert()
    {
        $insert = new model_test();
        $insert->code = 'code 13';
        $insert->name = 'code 3';
        $insert->save();
    }
    public function update()
    {
        $insert = new model_test();
        $insert::where('id', 1)->update(['code' => 'code12', 'name' => 'code 1']);
    }
    public function delete()
    {
        $insert = new model_test();
        $insert::where('id', 1)->delete();
    }
    public function destroy()
    {
        $insert = new model_test();
        $insert::destroy(2);
    }
    public function softDelete()
    {
        $insert = new model_test();
        $affected = $insert::find(3)->delete();
    }
    public function readOfDelete()
    {
        $insert = new model_test();
        $affected = $insert->withTrashed()->where('id', 4)->get();
        return $affected;
    }
    public function restore()
    {
        $insert = new model_test();
        $affected = $insert->withTrashed()->where('id', 3)->restore();
    }
}
