<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NumberLevel;
use App\Models\Device;
use App\Models\Service;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
class DashboardController extends Controller
{
    public function index()
    {
        $numberlevels = NumberLevel::select('id','start_day','user_id','created_at')->orderBy('created_at', 'DESC')->paginate(8);

        $numberlevel = NumberLevel::select('id')->get();
        $numberlevelCount = $numberlevel->count();

        $numberlevel1 = NumberLevel::select('id')->where('status', '1')->get();
        $numberlevelCount1 = $numberlevel1->count();
        $numberlevel2 = NumberLevel::select('id')->where('status', '2')->get();
        $numberlevelCount2 = $numberlevel2->count();
        $numberlevel0 = NumberLevel::select('id')->where('status', '0')->get();
        $numberlevelCount0 = $numberlevel0->count();
        $useravatar = User::find(Auth::user()->id);




        $device = Device::select('id')->get();
        $deviceCount = $device->count();
        $device1 = Device::select('id')->where('status_action', '1')->get();
        $deviceCount1 = $device1->count();
        $device0 = Device::select('id')->where('status_action', '0')->get();
        $deviceCount0 = $device0->count();


        $service = Service::select('id')->get();
        $serviceCount = $service->count();
        $service1 = Service::select('id')->where('status', '1')->get();
        $serviceCount1 = $service1->count();
        $service0 = Service::select('id')->where('status', '0')->get();
        $serviceCount0 = $service0->count();

       

        //$numberlevelss = NumberLevel::all();
        //$numberlevels = DB::table('numberlevels')->groupBy('created_at')->get();

        $querys = DB::select(DB::raw("select DATE_FORMAT(created_at, '%Y-%m-%d') as Day,COUNT(DAYNAME(created_at)) as Total from numberlevels GROUP BY DATE_FORMAT(created_at, '%Y-%m-%d')  ORDER BY created_at ASC"));
        
        //$timeformatnew = null;
        $stringdate= null;
        $total= null;
        foreach($querys as $query){
            $timenowformat=Carbon::now()->subDays(7);
            $timenowformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenowformat->toDateTimeString())->format('Y-m-d');
            
            $timeformatnew = Carbon::createFromFormat('Y-m-d', $query->Day)->format('Y-m-d');
            
            if($timeformatnew >= $timenowformat)
            {
                $timeformatnew = '"'.''."$timeformatnew".''.'"'.''.",";
                $stringdate .= $timeformatnew;
    
                $stringtotal = $query->Total.''.",";
                $total .= $stringtotal;
            }
            
        }

        $newStringdate = rtrim($stringdate, ",");
        $newStringtotal = rtrim($total, ",");

        $timenow = Carbon::now();
        $timenowformat = Carbon::createFromFormat('Y-m-d H:i:s', $timenow->toDateTimeString())->format('d/Y');
       

        return view('dashboard.index',compact('numberlevels','newStringtotal','newStringdate','timenowformat','useravatar','numberlevelCount','numberlevelCount0','numberlevelCount1','numberlevelCount2','deviceCount','serviceCount','serviceCount1','serviceCount0','deviceCount1','deviceCount0'));
    }
}
