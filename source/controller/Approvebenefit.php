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

        $user = new EmployeelistModel();

        $ar = Auth::user();

        $arr = $user->where('supervisor_ID', $ar);
        $employer = array();
        if ($arr) {
            for ($i = 0; $i < sizeof($arr); $i++) {
                $employer[$i]['id'] = $arr[$i]->employee_ID;
                $employer[$i]['first_name'] = $arr[$i]->first_name;
                $employer[$i]['last_name'] = $arr[$i]->last_name;
                //print_r($employer[$i]);
            }

            $user_x = new BenefitrequestModel();
            $requested = array();
            $a = array();
//            print_r(sizeof($employer));
            //print_r($employer[0]['id']);
            for ($j = 0; $j < sizeof($employer); $j++) {
                $requested[$j]['details'] = $user_x->where_condition('employee_ID', 'benefit_status', $employer[$j]['id'], 'pending');
                if ($requested[$j]['details']) {
                    $requested[$j]['first_name'] = $employer[$j]['first_name'];
                    $requested[$j]['last_name'] = $employer[$j]['last_name'];
//                    print_r($requested);
//                    echo "<br>"."no errorss"."<br>";
//                    print_r($requested[1]['details']);
                }
            }
            if($requested) {
                $this->view('approvebenefit', ['requested' => $requested]);
            }
        }
        else {
            $this->view('approvebenefit');
        }

//        $this->view('approvebenefit');

    }


}