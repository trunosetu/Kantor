<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pegawai;



class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()

    {
        //get posts
        $posts = Pegawai::orderBy('id')->paginate(50);

        //render view with posts
        return view('pegawai', compact('posts'));

    } 

  /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama'=> 'required|min:5', 
            'tanggal'=> 'required|min:5',
            'alamat'=> 'required|min:5',
            'jabatan'=> 'required|min:5',
            'status'=> 'required|min:5'
        ]);

        //upload image
        //$image = $request->file('image');
        //$image->storeAs('public/posts', $image->hashName());

        //create post
        Pegawai::create([
            'nama'=> $request->nama, 
            'tanggal'=> $request->tanggal,
            'alamat'=> $request->alamat, 
            'jabatan'=> $request->jabatan,
            'status'=> $request->status

        ]);
        return view('posts.create')->with(['success' => 'Data Berhasil Disimpan!']);

    }
        /**
     * edit
     *
    * @param  mixed $post
    * @return void
    */
   public function edit(Pegawai $post)
   {
       return view('posts.edit', compact('post'));
   }
   
   /**
    * update
    *
    * @param  mixed $request
    * @param  mixed $post
    * @return void
    */
   public function update(Request $request, Pegawai $post)
   {
       //validate form
       $this->validate($request, [
        'nama'=> 'required|min:5', 
        'tanggal'=> 'required|min:5',
        'alamat'=> 'required|min:5',
        'jabatan'=> 'required|min:5',
        'status'=> 'required|min:5'
       ]);

      
           $post->update([
            'nama'=> $request->nama, 
            'tanggal'=> $request->tanggal,
            'alamat'=> $request->alamat, 
            'jabatan'=> $request->jabatan,
            'status'=> $request->status
           ]);

        

       //redirect to index
       //return view('posts.edit')->with(['success' => 'Data Berhasil Disimpan!']);
   }

   /**
     * destroy
     *
     * @param  mixed $posts
     * @return void
     */
    public function destroy(Pegawai $kill)
    {

        //delete post
        $kill->delete();

        //redirect to index
        return view('pegawai')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}