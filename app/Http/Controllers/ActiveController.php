<?php

namespace App\Http\Controllers;

use App\Models\Active;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Active::orderBy('id', 'desc')->get();
        return view('admin.active.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.active.create');

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
        Active::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'img' => $fileName,


        ]);
        return redirect()->route('admin.active.index')->with('success', 'Faol qo\'shildi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Active $active
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Active $active)
    {
        return view('active', compact('active'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Active $active
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Active $active)
    {
        return view('admin.active.edit', ['posts'=>$active]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Active $active
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Active $active)
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
            $active->update([
                'name' => $request->name,
                'desc' => $request->desc,
                'img' => $fileName,
            ]);
        } else {
            $active->update($request->all());
        }


        return redirect()->route('admin.active.index')
            ->with('success', 'Faol yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Active $active
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Active $active)
    {
        $active->delete();

        return redirect()->route('admin.active.index')
            ->with('success', 'Faol o\'chirildi');
    }
    public function actives() {
        $posts = Active::orderBy('id', 'desc')->get();
        return view('actives')->with('posts', $posts);
    }
}
