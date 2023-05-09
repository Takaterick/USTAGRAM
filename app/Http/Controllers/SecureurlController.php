<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comentario;

class SecureurlController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(User $user){
        //$users = User::all();

        $posts = Post::where('user_id', $user->id)->paginate(6);

        //dd($user->username);
        return view('dashboard', [
            'user'  =>   $user,
            'posts'  =>   $posts
        ]);
    }

    public function create(){
        //dd('creando nueva publicacion');
        return view('publicaciones.create');
    }

    public function show(User $user, Post $post){

        $comentarios = $post->comentario;
        return view('publicaciones.show', compact('post','comentarios'));

        return view('publicaciones.show', [
            'post' => $post
        ]);
    }

    public function store(Request $request){
        //return dd('creando publicación');
        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',

        ]);

        $post = Post::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id
        ]);

        auth()->user()->posts()->save($post);

        return redirect()->route('accesoseguro', ['user' => auth()->user()->username]);
    }

    public function destroy(Post $post){
        //Le digo this authorize y le paso el metodo del policy
        $this->authorize('delete', $post);
        //con eso protegemos al formulario desde el controlador

        //instanciamos
        $post->delete();

        //redireccionamos
        return redirect()->route('accesoseguro', auth()->user()->username);
    }
}
