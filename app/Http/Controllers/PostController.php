<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    private function simpanGambar($file){
        $namaGambar = rand() . $file->getClientOriginalName();
        $file->move('uploads', $namaGambar);
        return '/uploads/' . $namaGambar;
    }
    
    public function formpostingan(){
        return view('post.formpostingan');
    }

    public function buatpostingan(Request $request){
        $lokasiGambar = $this ->simpanGambar($request->file('gambar'));

        Post::create([
            "user_id"=> Auth::id(),
            'judul' => $request->judul,
            'caption' => $request->caption,
            'gambar' => $lokasiGambar,
        ]);

        return redirect('home');
    }

    public function lihatpostingan(){
        $posts=Post::all();

        return view('post.lihatpostingan', [
            'posts' => $posts
        ]);
    }

    public function formedit($id){
        $post=Post::find($id);

        return view('post.formedit', [
            'post'=>$post
        ]);
    }

    public function updatepostingan(Request $request, $id){
        $post=Post::find($id);

        $post->update([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'caption' => $request->caption,
            'gambar' => $request->file('gambar') ? $this->simpanGambar($request->file('gambar')) : $post->gambar,
        ]);
        return redirect('home');
    }

    public function hapuspostingan($id){
        Post::find($id)->delete();

        return redirect('lihatpostingan');
    }
}
