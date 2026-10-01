<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

Route::get("/student/create", function () {
    return view("student.create");
});

Route::post("/student", function (Request $request) {

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'nullable|string|max:500',
        'date_of_birth' => 'nullable|date',
    ]);

    $student = Student::create($validated);

    return redirect()->route('students.index')
        ->with('success', "Student {$student->name} created successfully!");
});

Route::get('/students', function () {

    $students = Student::all();

    return view('student.list', [
        'students' => $students
    ]);

})->name('students.index');


Route::get('/students/{id}', function ($id) {

    $student = Student::findOrFail($id);

    return view('student.detail', [
        'student' => $student
    ]);

});


Route::get('/students/{id}/edit', function ($id) {

    $student = Student::findOrFail($id);

    return view('student.edit', [
        'student' => $student
    ]);

});


Route::put('/students/{id}', function (Request $request, $id) {

    $student = Student::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',

        'email' => [
            'required',
            'email',
            'max:255',
            Rule::unique('students')->ignore($student->id)
        ],

        'phone' => 'required|string|max:20',
        'address' => 'nullable|string',
        'date_of_birth' => 'nullable|date',
    ]);

    $student->update($validated);

    return redirect('/students/' . $student->id)
        ->with('success', 'Student updated successfully!');
});
Route::delete('/students/{id}', function ($id) {
$student = Student::findOrFail($id);

$student->delete();

return redirect('/students')
->with(
'success',
'Student deleted successfully!'
);
});