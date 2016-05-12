<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ResumeRequest;
use App\Models\Resume;
use Illuminate\Support\Facades\Input;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        javascript()->put([
            'test' => 'it works!',
        ]);

        return view('frontend.index');
    }

    public function submitResume(ResumeRequest $request)
    {
        $resume = new Resume();
        $resume->name               = $request->name;
        $resume->phone              = $request->phone;
        $resume->address            = $request->address;
        $resume->gender             = $request->gender;
        $resume->state              = $request->state;
        $resume->local_government   = $request->local_government;
        $resume->date_of_birth      = $request->date_of_birth;

        $file = $request->file;
        #SET UPLOAD PATH
        $destinationPath = 'uploads/resumes';
        #GET THE FILE EXTENSION
        $extension = $file->getClientOriginalExtension();
        #RENAME THE UPLOAD WITH RANDOM NUMBER
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        #MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
        $upload_success = $file->move($destinationPath, $fileName);

        if ($upload_success) {
            $resume->file = $fileName;
            $resume->save();
            return redirect("/")->withFlashSuccess("Your Resume has been submitted successfully");
        }

        return redirect()->back()->withInput()->withError("Error Saving file, Please check file and try again");

    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
