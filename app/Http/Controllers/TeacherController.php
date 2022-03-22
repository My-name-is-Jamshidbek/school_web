<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Veteran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Teacher::orderBy('id', 'desc')->get();
        return view('admin.teacher.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.teacher.create');

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
        Teacher::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'img' => $fileName,


        ]);
        return redirect()->route('admin.teacher.index')->with('success', 'O\'qituvchi qo\'shildi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Teacher $teacher)
    {
        return view('teacher', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher $teacher
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit', ['posts'=>$teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher $teacher
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Teacher $teacher)
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
            $teacher->update([
                'name' => $request->name,
                'desc' => $request->desc,
                'img' => $fileName,
            ]);
        } else {
            $teacher->update($request->all());
        }


        return redirect()->route('admin.teacher.index')
            ->with('success', 'O\'qituvchi yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher $teacher
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.teacher.index')
            ->with('success', 'O\'qituvchi o\'chirildi');
    }
    public function teachers() {
        $posts = Teacher::orderBy('id', 'desc')->get();
        return view('teachers')->with('posts', $posts);
    }
}
