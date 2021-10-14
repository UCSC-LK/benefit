<?php

/**
 * PerformanceModel Controller
 */
class Approvereimbursement extends Controller
{
	
	function index()
	{

		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}
		$this->view('approvereimbursement');
		
//         $user_x = new ReimbursementrequestModel();

//         $user = new EmployeelistModel();

//         $ar = Auth::user();

//         $arr = $user_x->where('reimbursement_status', 'pending');
//         if(sizeof($arr)>0){
// //        print_r(sizeof($arr));
//             $requested = array();
//             for($i = 0;$i<sizeof($arr);$i++){
//                 $employee_details = $user->where('employee_ID',$arr[$i]->employee_ID);
//                 $reimbursement_details = $user_x->where('employee_ID', $arr[$i]->employee_ID);
//                 if(sizeof($reimbursement_details)>0){
//                     for($j = 0;$j<sizeof($reimbursement_details);$j++){
//                         //print_r($benefit_details[0]);
//                         $requested[$i+$j]['first_name'] = $employee_details[0]->first_name;
//                         $requested[$i+$j]['last_name'] = $employee_details[0]->last_name;
//                         $requested[$i+$j]['details'] = $reimbursement_details[$j];
//                         //$i = $i+1;
//                         //print_r($requested[$i+$j]);
//                         //echo "<br>";
//                     }
//                     $i = $i+sizeof($reimbursement_details)-1;
//                 }
//                 //echo "<br>";
//             }
//             $this->view('approvereimbursement', ['requested'=>$requested]);
// //            print_r($arr);
//         }
//         else{
//             $this->view('approvereimbursement');
//         }
	}

}