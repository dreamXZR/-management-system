<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterTable;
use App\Models\Information;
use App\Models\Resident;
use App\Models\LetterProof;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index()
    {

        $info_num=Information::where('id','>',0)->where('p_id',NULL)->count();
        $resident_num=Resident::where('id','>',0)->where('is_replace',0)->count();
        $letter_num=LetterProof::where('id','>',0)->count();

        $start_time=date('Y-m-d',time()).' 00:00:00';
        $end_time=date('Y-m-d',time()).' 23:59:59';
        $register_num=RegisterTable::whereBetween('created_at',[$start_time,$end_time])->count();
    	return view('index/index',compact('info_num','resident_num','letter_num','register_num'));
    }

    public function unfinish(RegisterTable $register)
    {
    	$register_tables=RegisterTable::where('is_finish',0)->paginate(10);

    	$unfinish_count=RegisterTable::where('is_finish',0)->count();
        Cache::forever('unfinsish_num',$unfinish_count);

        return view('index.unfinish',compact('register_tables'));
    }
}
