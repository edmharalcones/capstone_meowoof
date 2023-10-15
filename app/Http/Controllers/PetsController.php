<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Pets;

class PetsController extends Controller
{
    
    public function delete($id)
    {
    DB::table('pets')->where('id', $id)->delete();
    return redirect()->back();
    }
    public function store(Request $request)
    {
        try {
    
            $event = Pets::create([
                'link' => $request->link,
            ]);
    
            if ($request->hasFile('pet') && $request->hasFile('cover')) {
                $petFile = $request->file('pet');
                $coverFile = $request->file('cover');
    
                $petFilename = time() . $petFile->getClientOriginalName();
                $coverFilename = time() . $coverFile->getClientOriginalName();
    
                $petFilePath = $petFile->storeAs('images', $petFilename, 'public');
                $coverFilePath = $coverFile->storeAs('images', $coverFilename, 'public');
    
                $petStoragePath = 'storage/' . $petFilePath;
                $coverStoragePath = 'storage/' . $coverFilePath;
    
                $event->pet = $petStoragePath;
                $event->cover = $coverStoragePath;
                $event->save();
            }
    
            return back();
        } catch (\Exception $e) {
            \Log::error('Database error: ' . $e->getMessage());
            return back()->withInput()->withErrors(['error' => 'Duplicate.']);
        }
    }
    


}