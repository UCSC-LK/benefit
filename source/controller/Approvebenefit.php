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

            //show pending requests
            $arr = $user_x->where('benefit_status', 'pending');
            $requested = array();
            if(boolval($arr)){
                for($i = 0;$i<sizeof($arr);$i++){
                    $employee_details = $user->where('employee_ID',$arr[$i]->employee_ID);
                    $benefit_details = $user_x->where_condition('employee_ID', 'benefit_status', $arr[$i]->employee_ID, 'pending');
                    if(boolval($benefit_details)){
                        for($j = 0;$j<sizeof($benefit_details);$j++){
                            $requested[$i+$j]['first_name'] = $employee_details[0]->first_name;
                            $requested[$i+$j]['last_name'] = $employee_details[0]->last_name;
                            $requested[$i+$j]['profile_image'] = $employee_details[0]->profile_image;
                            $requested[$i+$j]['details'] = $benefit_details[$j];
                        }
                        $i = $i+sizeof($benefit_details)-1;
                    }
                }
            }


            //show handled requests
            $handled = array();
            $all = $user_x->findAll();
            $j = 0;
            for($i=0;$i<sizeof($all);$i++){
                if($all[$i]->benefit_status != 'pending'){
                    //print_r($all[$i]->employee_ID);
                    //print_r($all[$i]); echo '<br>';
                    $handled[$j]['emp_details'] = $user->where('employee_ID',$all[$i]->employee_ID);
                    $handled[$j]['benefit_details'] = $all[$i];
                    //print_r($handled[$j]); echo '<br>';
                    $j++;
                }
            }


            $this->view('approvebenefit', ['requested'=>$requested, 'handled'=>$handled]);
        }
        else {
            $this->view('404');
        }

    }

    function accept ($id=null){
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        if(Auth::access('HR Manager')){
            $user = new BenefitrequestModel();
            $get_row = $user->where('report_hashing',$id);
            $hashVal = $get_row[0]->report_hashing;
            $ar['benefit_status'] = "accepted";
            $user->update_status($hashVal, 'report_hashing', $ar);

            $this->redirect('Approvebenefit');
        }
    }

    function reject($id=null){
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        if(Auth::access('HR Manager')){
            $user = new BenefitrequestModel();
            $get_row = $user->where('report_hashing',$id);
            $hashVal = $get_row[0]->report_hashing;
            $ar['benefit_status'] = "rejected";
            $user->update_status($hashVal, 'report_hashing', $ar);

            $this->redirect('Approvebenefit');
        }
    }

}