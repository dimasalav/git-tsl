<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts=Post::all();
        return view('post.index',compact('posts'));
    }

    public function store (Request $request) {

        $validateFields=$request->validate([ // Валидация
            'name'=>['required','string'],
            'email'=>['required','email'],
            'subject'=>['required','string','min:5','max:50'],
            'message'=>['required','min:15','max:500'],
            
        ]);

       
        $post=Post::create($validateFields);

        if($post) {

            return redirect()->back()->with('status','Сообщение было успешно добавлено');
        }

        return  Redirect::back()->withErrors(
            [
                'formError'=>'Произошла ошибка при добавлении отзыва'
            ]
        );

    }

    /*public function show($id) {
        $posts=new Post;
        return view('post.show',['post'=>$posts->find($id)]);
    }*/

    public function show(Post $post) {
        
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('post.edit', compact('post'));

    }

    public function update(Post $post) {

        $data=request()->validate([

            'name'=>['required','string'],
            'email'=>['required','email'],
            'subject'=>['required','string','min:5','max:50'],
            'message'=>['required','min:15','max:500'],

        ]);

        $post->update($data);
        return redirect()->route('post.show',$post->id)->with('status','Сообщение было успешно обновлено');
    }


    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index')->with('status','Сообщение было удалено');
    }
}    
