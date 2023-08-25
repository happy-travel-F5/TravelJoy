<?php
namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;
class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations', compact('destinations'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required',
            'title' => 'required',
            'location' => 'required',
            'reason' => 'required',
        ]);

       
        // $imagePath = $data['image']->store('images', 'public');
        $destinationShow = auth()->user()->destinations()->create([
            'image' => $request->image,
            'title' => $request->title,
            'location' => $request->location,
            'reason' => $request->reason,
            'user_id' => auth()->id(), 
        ]);
        return redirect()->route('destinations.show',['id' => $destinationShow->id])->with('success', 'Destino creado exitosamente.');
    }
    public function show(int $id)
    {
        $destination = Destination::findOrFail($id);
        return view('detail', compact('destination'));
    }
    public function edit(int $id)
{
    $destination = Destination::findOrFail($id);
    return view('edit', compact('destination'));
}

public function update(Request $request, int $id)
{
    $destination = Destination::findOrFail($id);
    $data = $request->validate([
        'image' => 'required',
        'title' => 'required',
        'location' => 'required',
        'reason' => 'required',
    ]);

    $destination->update([
        'image' => $data['image'],
        'title' => $data['title'],
        'location' => $data['location'],
        'reason' => $data['reason'],
    ]);

    return redirect()->route('destinations')->with('success', 'Destino actualizado exitosamente.');
}
public function destroy(int $id)
{
    $destination = Destination::findOrFail($id);
    $destination->delete();
    return redirect()->route('destinations')->with('success', 'Destino eliminado exitosamente.');
}




//Controler de search

public function search(Request $request)
{
   $destinations = Destination::search($request->search);
    

    return view('destinations', ['destinations' => $destinations]);
}
}









