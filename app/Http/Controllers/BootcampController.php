<?php
namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $bootcamps = Bootcamp::latest()->paginate(5);

        return view('bootcamps.index', compact('bootcamps'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bootcamps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama_bootcamp' => 'required',
            'harga' => 'required'
        ]);

        Bootcamp::create($request->all());

        return redirect()->route('bootcamps')
            ->with('success', 'Bootcamp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bootcamp  $bootcamp
     * @return \Illuminate\Http\Response
     */
    public function show(Bootcamp $bootcamp)
    {
        return view('bootcamps.show', compact('bootcamp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bootcamp  $bootcamp
     * @return \Illuminate\Http\Response
     */
}

