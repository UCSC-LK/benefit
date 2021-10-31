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

        if(Auth::access('HR Manager')){
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
                        }
                        $i = $i+sizeof($benefit_details)-1;
                    }
                }
                $this->view('approvebenefit', ['requested'=>$requested]);
            }
            else{
                $this->view('approvebenefit');
            }
        }
        else {
            $this->view('404');
        }



    }

}