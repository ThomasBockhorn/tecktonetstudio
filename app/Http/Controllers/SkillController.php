<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        $skills = Skill::all();

        return Inertia::render('Skills/index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): Response
    {
        return Inertia::render('Skills/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSkillRequest Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillRequest $request): Response
    {

        $skill = Skill::create($request->all());

        return self::index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill): Response
    {
        return Inertia::render('Skills/edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $skill->update($request->all());

        return self::index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill): Response
    {
        $skill->delete();

        $skills = Skill::all();

        return Inertia::render('Skills/index',compact('skills'));
    }
}
