<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Review;

class EventController extends Controller
{
    
    public function delete($id)
    {
    DB::table('reviews')->where('id', $id)->delete();
    return redirect()->back();
    }

    public function store(Request $request)
{
    try {

        $event = Review::create([
            
            'photo' => $request->photo,
            'name' => $request->name,
            'review' => $request->review,
            
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . $request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('images', $filename, 'public');
            $storagePath = 'storage/' . $filePath;
            $event->photo = $storagePath;
            $event->save();
        }

       
        return back()->with('flash_message', 'Review created!');
    } catch (\Exception $e) {
        \Log::error('Database error: ' . $e->getMessage());
         return back()->withInput()->withErrors(['error' => 'Duplicate entry.']);
    }
}


}