<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vinyl;

class VinylController extends Controller
{
    public function index()
    {
        $vinyls = Vinyl::all();
        return view('vinyl.index', ['vinyls' => $vinyls]);
    }

    public function create()
    {
        return view('vinyl.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'imgurl' => 'required',
            'artist' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newVinyl = Vinyl::create($data);

        return redirect(route('vinyl.index'));
    }

    public function edit(Vinyl $vinyl)
    {
        return view('vinyl.edit', ['vinyl' => $vinyl]);
    }

    public function update(Request $request, Vinyl $vinyl)
    {
        // Validate and update the vinyl record
        $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'description' => 'required|string',
        ]);

        // Update the vinyl's data
        $vinyl->update($request->all());

        return redirect()->route('vinyl.index', ['vinyl' => $vinyl->id])->with('success', 'Vinyl updated successfully!');
    }

    public function destroy(Vinyl $vinyl)
    {
        $vinyl->delete();
        return redirect()->route('vinyl.index', ['vinyl' => $vinyl->id])->with('success', 'Vinyl deleted successfully!');
    }

}
