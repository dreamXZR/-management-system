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
use Zipper;

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
                $death=$this->dataFormat($death);
                //return view('export.death_proof',compact('death'));
                return PDF::loadView('export.death_proof',compact('death'))->inline('死亡证明_'.$death->name .'.pdf');
                
            break;
            
            case 'above_table':
                $above=AboveTable::find($request->id);
                $above=$this->dataFormat($above);
                //return view('export.above_table',compact('above'));
                return PDF::loadView('export.above_table',compact('above'))->inline('上门访问_'.$above->name.'.pdf');
            break;

            case 'register_table':
                $register=RegisterTable::find($request->id);
                $register=$this->dataFormat($register);
                //return view('export.register_table',compact('register'));
                return PDF::loadView('export.register_table',compact('register'))->inline('来访登记_'.$register->name.'.pdf');
            break;

            case 'problem_table':
                $problem=ProblemTable::find($request->id);
                $problem=$this->dataFormat($problem);
                //return view('export.problem_table',compact('problem'));
                return PDF::loadView('export.problem_table',compact('problem'))->inline('问题汇总_'.$problem->name.'.pdf');
            break;

            case 'worker_proof':
                $worker=WorkerProof::find($request->id);
                $worker=$this->dataFormat($worker);
                //return view('export.worker_proof',compact('worker'));
                return PDF::loadView('export.worker_proof',compact('worker'))->inline('就业证明_'.$worker->name.'.pdf');
            break;

            case 'letter_proof':
                $letter=LetterProof::find($request->id);
                $letter=$this->dataFormat($letter);
                //return view('export.letter_proof',compact('letter'));
                return PDF::loadView('export.letter_proof',compact('letter'))->inline('证明信_'.$letter->name.'.pdf');
            break;
        }
    }

    public function batch_export(Request $request)
    {
        $type=$request->type;
        $checkID=$request->checkID;
        $dir_name='./export/export'.time();
        
        $name = 'export'.time().'.zip';
        $zipper = Zipper::make($name);
        
        switch ($type) {
            case 'information':
                foreach (explode(',', $checkID) as $k => $v) {
                    $info=Information::find($v);
                    if($info){
                        if($info->present_address=='陶然'){
                            $pdf_name=$dir_name.'/t_'.$info->building.'-'.$info->door.'-'.$info->no.'.pdf';
                        }else{
                            $pdf_name=$dir_name.'/y_'.$info->building.'-'.$info->door.'-'.$info->no.'.pdf';
                        }
                        

                        $handicappeds=$info->handicappeds;
                        $residents=$info->residents;
                        
                        $fill=[
                            10-count($residents),
                            4-count($handicappeds)
                        ];
                        PDF::loadView('export.information',compact('info','handicappeds','residents','fill'))->save($pdf_name);
                        $zipper->add($pdf_name);
                    }
                }
                
            break;
            case 'death_proof':
                foreach (explode(',', $checkID) as $k => $v) {
                    $death=DrathProof::find($v);
                    $death=$this->dataFormat($death);
                    if($death){
                        $pdf_name=$dir_name.'/death_'.$death->id.'.pdf';
                        PDF::loadView('export.death_proof',compact('death'))->save($pdf_name);
                        $zipper->add($pdf_name);

                    }
                    
                }
            break;
            
            case 'above_table':
                foreach (explode(',', $checkID) as $k => $v) {
                    $above=AboveTable::find($v);
                    $above=$this->dataFormat($above);
                    if($above){
                        $pdf_name=$dir_name.'/above_table_'.$above->id.'.pdf';
                        PDF::loadView('export.above_table',compact('above'))->save($pdf_name);
                        $zipper->add($pdf_name);
                    }
                }
            break;

            case 'register_table':
                foreach (explode(',', $checkID) as $k => $v) {
                    $register=RegisterTable::find($v);
                    $register=$this->dataFormat($register);
                    if($register){
                        $pdf_name=$dir_name.'/register_table_'.$register->id.'.pdf';
                        PDF::loadView('export.register_table',compact('register'))->save($pdf_name);
                        $zipper->add($pdf_name);
                    }
                }
            break;

            case 'problem_table':
                foreach (explode(',', $checkID) as $k => $v) {
                    $problem=ProblemTable::find($v);
                    $problem=$this->dataFormat($problem);
                    if($problem){
                        $pdf_name=$dir_name.'/problem_table_'.$problem->id.'.pdf';
                        PDF::loadView('export.problem_table',compact('problem'))->save($pdf_name);
                        $zipper->add($pdf_name);
                    }
                }
            break;

            case 'worker_proof':
                foreach (explode(',', $checkID) as $k => $v) {
                    $worker=WorkerProof::find($v);
                    $worker=$this->dataFormat($worker);
                    if($worker){
                        $pdf_name=$dir_name.'/worker_table_'.$worker->id.'.pdf';
                        PDF::loadView('export.worker_proof',compact('worker'))->save($pdf_name);
                        $zipper->add($pdf_name);
                    }
                }
            break;

            case 'letter_proof':
                foreach (explode(',', $checkID) as $k => $v) {
                    $letter=LetterProof::find($v);
                    $letter=$this->dataFormat($letter);
                    if($letter){
                        $pdf_name=$dir_name.'/letter_table_'.$letter->id.'.pdf';
                        PDF::loadView('export.letter_proof',compact('letter'))->save($pdf_name);
                        $zipper->add($pdf_name);
                    }
                }
            break;


        }
        
        $zipper->close();
        //删除
        $this->deldir($dir_name);
        //return response()->download(public_path($name))->deleteFileAfterSend(true);
        return json_encode([
                'status'=>true,
                'url'=>env('APP_URL').'/'.$name
           ]);
    }

    
    protected function deldir($path)
    {
        
        if(is_dir($path)){
            $p = scandir($path);
            foreach($p as $val){
                 
                @unlink($path.'/'.$val);
                    
            }
        }

        @rmdir($path);
    }

    protected function dataFormat($obj)
    {
        $date=date_format($obj->created_at,'Y-m-d');

        $obj->date=explode('-', $date);

        return $obj;
    }

   

    


}
