<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrathProof;
use App\Models\AboveTable;
use App\Models\RegisterTable;
use App\Models\ProblemTable;
use App\Models\WorkerProof;
use App\Models\LetterProof;
use App\Models\Information;
use PDF;

class ExportController extends Controller
{
    


    public function export_pdf(Request $request)
    {
        switch ($request->type) {
            case 'information':
                $info=Information::find($request->id);
                $handicappeds=$info->handicappeds;
                $residents=$info->residents;
                
                $fill=[
                    10-count($residents),
                    4-count($handicappeds)
                ];
                
                
                //return view('export.information',compact('info','handicappeds','residents','fill'));
                return PDF::loadView('export.information',compact('info','handicappeds','residents','fill'))->inline('信息卡'.$info->present_address .'.pdf');
            break;
            
            case 'death_proof':
                $death=DrathProof::find($request->id);
                //return view('export.death_proof',compact('death'));
                return PDF::loadView('export.death_proof',compact('death'))->inline('死亡证明_'.$death->name .'.pdf');
                
            break;
            
            case 'above_table':
                $above=AboveTable::find($request->id);
                //return view('export.above_table',compact('above'));
                return PDF::loadView('export.above_table',compact('above'))->inline('上门访问_'.$above->name.'.pdf');
            break;

            case 'register_table':
                $register=RegisterTable::find($request->id);
                //return view('export.register_table',compact('register'));
                return PDF::loadView('export.register_table',compact('register'))->inline('来访登记_'.$register->name.'.pdf');
            break;

            case 'problem_table':
                $problem=ProblemTable::find($request->id);
                //return view('export.problem_table',compact('problem'));
                return PDF::loadView('export.problem_table',compact('problem'))->inline('问题汇总_'.$problem->name.'.pdf');
            break;

            case 'worker_proof':
                $worker=WorkerProof::find($request->id);
                //return view('export.worker_proof',compact('worker'));
                return PDF::loadView('export.worker_proof',compact('worker'))->inline('就业证明_'.$worker->name.'.pdf');
            break;

            case 'letter_proof':
                $letter=LetterProof::find($request->id);
                //return view('export.letter_proof',compact('letter'));
                return PDF::loadView('export.letter_proof',compact('letter'))->inline('证明信_'.$letter->name.'.pdf');
            break;
        }
    }

   

    


}
