<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  public function index()
  {
    $courses = Course::orderBy('id','desc')->paginate();


    return view('courses.index', compact('courses'));
  }

  public function create()
  {
    return view('courses.create');
  }

  public function store(Request $data){
    $course = new Course();
    $course->name        = $data->name;
    $course->description = $data->description;
    $course->categorys   = $data->categorys;
    $course->save();

    return redirect()->route('courses.show', $course);
  }

  public function show(Course $course)
  {
    return view('courses.show', compact('course'));
  }

  public function edit( Course $course ) {
    return view('courses.edit', compact('course'));
  }

  public function update(Request $data, Course $course) {
    $course->name = $data->name;
    $course->description = $data->description;
    $course->categorys = $data->categorys;

    $course->save();
    return redirect()->route('courses.show', $course);
  }
}
