<?php

namespace App\Http\Controllers;

use App\Models\Olimpic;
use App\Models\Veteran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OlimpicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Olimpic::orderBy('id', 'desc')->get();
        return view('admin.olimpic.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.olimpic.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ]);
        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('../storage/app/public/veteran'), $fileName);
        Olimpic::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'img' => $fileName,


        ]);
        return redirect()->route('admin.olimpic.index')->with('success', 'Olimpiadachi qo\'shildi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Olimpic $olimpic
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Olimpic $olimpic)
    {
        return view('olimpian', compact('olimpic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Olimpic $olimpic
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Olimpic $olimpic)
    {
        return view('admin.olimpic.edit', ['posts'=>$olimpic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Olimpic $olimpic
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Olimpic $olimpic)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'img' => '',
        ]);
        if ($request->hasFile('img')) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('../storage/app/public/veteran'), $fileName);
            $olimpic->update([
                'name' => $request->name,
                'desc' => $request->desc,
                'img' => $fileName,
            ]);
        } else {
            $olimpic->update($request->all());
        }


        return redirect()->route('admin.olimpic.index')
            ->with('success', 'Olimpiadachi yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Olimpic $olimpic
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Olimpic $olimpic)
    {
        $olimpic->delete();

        return redirect()->route('admin.olimpic.index')
            ->with('success', 'Olimpiadachi o\'chirildi');
    }
    public function olimpic() {
        $posts = Olimpic::orderBy('id', 'desc')->get();
        return view('olimpics')->with('posts', $posts);
    }
}
