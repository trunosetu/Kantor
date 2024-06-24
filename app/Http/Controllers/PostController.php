<?php
  
namespace App\Http\Controllers;
  
use App\Models\Pegawai;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class PostController extends Controller
{

    public function index(): View
    {
        $posts = Pegawai::orderBy('id')->paginate(50);
        
        return view('pegawai',compact('posts'));
                  
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('posts.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama'=> 'required', 
            'tanggal'=> 'required',
            'alamat'=> 'required', 
            'jabatan'=> 'required',
            'status'=> 'required',
        ]);
        
        Pegawai::create($request->all());
         
        return redirect()->route('pegawai.index')
                        ->with('success','Pegawai created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Pegawai $Pegawai): View
    {
        return view('posts.show',compact('Pegawai'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $Pegawai): View
    {
        return view('posts.edit',compact('Pegawai'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $Pegawai): RedirectResponse
    {
        $request->validate([
            'nama'=> 'required', 
            'tanggal'=> 'required',
            'alamat'=> 'required', 
            'jabatan'=> 'required',
            'status'=> 'required',
        ]);
        
        $Pegawai->update($request->all());
        
        return redirect()->route('pegawai.index')
                        ->with('success','Pegawai updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $Pegawai): RedirectResponse
    {
        $Pegawai->delete();
         
        return redirect()->route('pegawai.index')
                        ->with('success','Pegawai deleted successfully');
    }
}