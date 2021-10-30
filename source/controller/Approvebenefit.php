<?php

/**
 * PerformanceModel Controller
 */
class Approvebenefit extends Controller
{

    function index()
    {

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $user_x = new BenefitrequestModel();

        $user = new EmployeelistModel();

        $ar = Auth::user();

        $arr = $user_x->where('benefit_status', 'pending');
        if(sizeof($arr)>0){
//            print_r(sizeof($arr));
            $requested = array();
            for($i = 0;$i<sizeof($arr);$i++){
                $employee_details = $user->where('employee_ID',$arr[$i]->employee_ID);
                $benefit_details = $user_x->where('employee_ID', $arr[$i]->employee_ID);
                if(sizeof($benefit_details)>0){
                    for($j = 0;$j<sizeof($benefit_details);$j++){
                        //print_r($benefit_details[0]);
                        $requested[$i+$j]['first_name'] = $employee_details[0]->first_name;
                        $requested[$i+$j]['last_name'] = $employee_details[0]->last_name;
                        $requested[$i+$j]['profile_image'] = $employee_details[0]->profile_image;
                        $requested[$i+$j]['details'] = $benefit_details[$j];
                        //$i = $i+1;
                        //print_r($requested[$i+$j]);
                        //echo "<br>";
                    }
                    $i = $i+sizeof($benefit_details)-1;
                }
                //echo "<br>";
            }
            $this->view('approvebenefit', ['requested'=>$requested]);
//            print_r($arr);
        }
        else{
            $this->view('approvebenefit');
        }

//        $this->view('approvebenefit');

    }

//    function index()
//    {
//
//        if (!Auth::logged_in()) {
//            $this->redirect('login');
//        }
//
//        $user = new EmployeelistModel();
//
//        $ar = Auth::user();
//
////        $arr = $user->where('supervisor_ID', $ar);
//        $employer = array();
//        if ($arr) {
//            for ($i = 0; $i < sizeof($arr); $i++) {
//                $employer[$i]['id'] = $arr[$i]->employee_ID;
//                $employer[$i]['first_name'] = $arr[$i]->first_name;
//                $employer[$i]['last_name'] = $arr[$i]->last_name;
//                //print_r($employer[$i]);
//            }
//
//            $user_x = new BenefitrequestModel();
//            $requested = array();
//            $a = array();
////            print_r(sizeof($employer));
//            //print_r($employer[0]['id']);
//            for ($j = 0; $j < sizeof($employer); $j++) {
//                $requested[$j]['details'] = $user_x->where_condition('employee_ID', 'benefit_status', $employer[$j]['id'], 'pending');
//                if ($requested[$j]['details']) {
//                    $requested[$j]['first_name'] = $employer[$j]['first_name'];
//                    $requested[$j]['last_name'] = $employer[$j]['last_name'];
////                    print_r($requested);
////                    echo "<br>"."no errorss"."<br>";
////                    print_r($requested[1]['details']);
//                }
//            }
//            if($requested) {
//                $this->view('approvebenefit', ['requested' => $requested]);
//            }
//        }
//        else {
//            $this->view('approvebenefit');
//        }
//
////        $this->view('approvebenefit');
//
//    }


}