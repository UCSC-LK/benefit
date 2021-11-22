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
		if(Auth::access('Supervisor'))
		{
			$user_x = new ReimbursementrequestModel();

			$user = new EmployeelistModel();
	
			$ar = Auth::user();
	
			// $arr = $user_x->where('reimbursement_status', 'pending');
			// if(sizeof($arr)>0){
				//print_r(sizeof($arr));
				$requested = array();
				$request_pending = array();
				$request_approve = array();
					// for($i = 0;$i<sizeof($arr);$i++){
						
						//$employee_details = $user->where('employee_ID',$arr[$i]->employee_ID);
			$employee_details = $user->where('supervisor_ID',$ar);
			$m = 0;
			$index = 0;
			$index_approve = 0;

				for($k=0;$k<sizeof($employee_details);$k++){
					// print_r($employee_details[$k]);
		
				$reimbursement_details = $user_x->where('employee_ID',$employee_details[$k]->employee_ID);

				// print_r($reimbursement_details);
				// print_r(sizeof($reimbursement_details));

				//  $m = 0;
				if(boolval($reimbursement_details)){
					for($j = 0;$j<sizeof($reimbursement_details);$j++){
						$requested[$m+$j]['first_name'] = $employee_details[$k]->first_name;
						$requested[$m+$j]['last_name'] = $employee_details[$k]->last_name;
						$requested[$m+$j]['profile_image'] = $employee_details[$k]->profile_image;
						$requested[$m+$j]['details'] = $reimbursement_details[$j];
						// print_r($requested[$m+$j]);

						if($requested[$m+$j]['details']->reimbursement_status == 'pending'){
							$request_pending[$index] = $requested[$m+$j];
							$index = $index + 1;
							// print_r($request_pending);

						}
						else{
							$request_approve[$index_approve] = $requested[$m+$j];
							$index_approve++;
							// print_r($request_approve);
						}
					}
					$m = $m+sizeof($reimbursement_details);
				}


			}
				// print_r(sizeof($requested));
				$this->view('approvereimbursement', ['requested'=>$request_pending,'requested_approve'=>$request_approve]);







						// $reimbursement_details = $user_x->where('employee_ID', $arr[$i]->employee_ID);

						// if(sizeof($reimbursement_details)>0){
						// 	for($j = 0;$j<sizeof($reimbursement_details);$j++){
						// 		$requested[$i+$j]['first_name'] = $employee_details[0]->first_name;
						// 		$requested[$i+$j]['last_name'] = $employee_details[0]->last_name;
						// 		$requested[$i+$j]['profile_image'] = $employee_details[0]->profile_image;
						// 		$requested[$i+$j]['details'] = $reimbursement_details[$j];
						// 	}
						// 		$i = $i+sizeof($reimbursement_details)-1;
						// }
					}
		}
		// 		$this->view('approvereimbursement', ['requested'=>$requested]);
		// 	}
		// 	else{
		// 		$this->view('approvereimbursement');
		// 	}
		// 	}
		// 	else {
		// 		$this->view('404');
		// 	}
		// }
	} 
	
	

		


