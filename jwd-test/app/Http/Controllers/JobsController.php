<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddJobRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class JobsController extends Controller
{

    public function getIndex(Request $request)
    {
        $jobs = Jobs::all();
        $lang = $request->input('lang');
        if ($lang) {
            switch ($lang) {
                case 'ru':
                    Session::put('lang', 'ru');
                    return redirect('jobs');
                    break;
                case 'en':
                    Session::put('lang', 'en');
                    return redirect('jobs');
                    break;
            }
        }

        return view('Jobs/index', ["jobs" => $jobs, "count_jobs" => count($jobs)]);
    }

    public function getAdd(Request $request)
    {
        $jobs = Jobs::all();
        $job = new Jobs();
        $lang = $request->input('lang');
        if ($lang) {
            switch ($lang) {
                case 'ru':
                    Session::put('lang', 'ru');
                    return redirect('jobs/add');
                    break;
                case 'en':
                    Session::put('lang', 'en');
                    return redirect('jobs/add');
                    break;
            }
        }
        return view('Jobs/add', ["job" => $job, "jobs" => $jobs, "count_jobs" => count($jobs)]);
    }

    public function postAdd(AddJobRequest $request)
    {
        //
        Jobs::create($request->all());
        return redirect('jobs/add')->with('success', 'Вакансия успешно добалена!');
    }

    public function anyLogin()
    {
        //
    }

}
