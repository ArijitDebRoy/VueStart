<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
use Exception;

class DataController extends Controller
{
    //
    public function saveData(Request $request) {
//        $response['status'] = false;
        try{

            DB::table('trains')->insert(
                [
                    't_name'=>$request->get('t_name'),
                    't_no'=>$request->get('t_no'),
                    'type'=>$request->get('type'),
                    'description'=>$request->get('description'),
                    'src'=>$request->get('src'),
                    'sdate'=>$request->get('sdate'),
                    'stime'=>$request->get('stime'),
                    //$days = implode(",",$request->get('days')),
                    'days'=>implode(",",$request->get('days'))
                ]
            );

//
            for($i=0;$i<count($request->get('routes'));$i++) {
                DB::table('routes')->insert([
                    't_no' => $request->get('t_no'),
                    'stn' => $request->get('routes')[$i]['stn'],
                    'atime' => $request->get('routes')[$i]['atime'],
                    'dtime' => $request->get('routes')[$i]['dtime']

                ]);
            }


//        if($index > 0)
            $response['msg']=true;
//            $response['json'] = $request->get('routes')[1]['stn'];
        }catch (Exception $e){
            $response['msg']=$e->getMessage();
            $response['status'] = count($request->get('routes'));
            $response['json'] = $request->get('routes')[1];
        }


        return Response::json($response);

    }

    public function getListData() {
        $response['data'] = DB::table('trains')->select('*')->get();
        return Response::json($response);
    }

    public function deleteTrain(Request $request){
        $id = $request->id;
        DB::table('trains')->where('t_no','=',$id)->delete();
    }

    public function routeShow(Request $request){
        $id = $request->id;
        $response=DB::table('routes')->where('t_no','=',$id)->get();
        return Response::json($response);
    }

    public function deleteRoute(Request $request){
        $id = $request->id;
        DB::table('routes')->where('id','=',$id)->delete();
    }

    public function fetchData(Request $request){
        try {
            $uid = $request->uid;
            $response['msg'] = $uid;
            $response['route'] = DB::table('routes')->where('t_no', '=', $uid)->get();
            $response['data'] = DB::table('trains')->where('t_no', '=', $uid)->get();

        }
        catch (Exception $e){
            $response['msg'] = $uid;
            $response['err']=$e->getMessage();
        }
        return Response::json($response);
    }

    public function updateData(Request $request){

        $id = $request->id;
        DB::table('trains')->where('t_no','=',$id)->delete();
        DB::table('routes')->where('t_no','=',$id)->delete();


        DB::table('trains')->insert(
            [
                't_name'=>$request->get('t_name'),
                't_no'=>$request->get('t_no'),
                'type'=>$request->get('type'),
                'description'=>$request->get('description'),
                'src'=>$request->get('src'),
                'sdate'=>$request->get('sdate'),
                'stime'=>$request->get('stime'),
                //$days = implode(",",$request->get('days')),
                'days'=>implode(",",$request->get('days'))
            ]
        );

//
        for($i=0;$i<count($request->get('routes'));$i++) {
            DB::table('routes')->insert([
                't_no' => $request->get('t_no'),
                'stn' => $request->get('routes')[$i]['stn'],
                'atime' => $request->get('routes')[$i]['atime'],
                'dtime' => $request->get('routes')[$i]['dtime']

            ]);
        }
        $response['msg'] = "successfully updated";
        return Response::json($response);
    }
}
