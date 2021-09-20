<?php

namespace App\Http\Controllers\Student;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function courses(){

        $courses = Course::with('teachers')->with('category')->paginate(10);

        return view('admin.studentpages.courses',compact('courses'));

     }


 public function enrollmentForm($id){

    $course = Course::where('id',$id)->with('teachers')->with('category')->first();

    return view('admin.studentpages.enrolmentform',compact('course'));

 }

 public function enrollment(Request $request){

    $validate = $request->validate([
        'name' => ['required'],
        'teacher' => ['required'],
        'price' => ['required'],
        'category' => ['required'],
        'title' => ['required'],
    ]);

    Stripe::setApiKey(env('STRIPE_SECRET'));


    $charge = Charge::create ([

             "amount" => $request->price * 100,
             "currency" => "usd",
             "source" => $request->stripeToken,
             "description" => "Test payment from mojavilms."
     ]);

    $enrollment = Enrollment::create([
        'course_title' => $request->title,
        'student_name' => $request->name,
        'teacher' => $request->teacher,
        'price' => $request->price * 100,
        'category' => $request->category,
        'user_id' => Auth::user()->id,
        'course_id' => $request->id,

        'teacher_id' => $request->teacher_id,
        'status' => 1
    ]);



    if($enrollment){

        return response()->json('You are enroll now');

    }else{
        return response()->json('Failed To Enroll');
    }



 }


 public function myCourses(){

    $myCourses = Enrollment::with('course')->where('user_id',Auth::user()->id)->get();

    return view('admin.studentpages.myCourses',compact('myCourses'));
 }

}
