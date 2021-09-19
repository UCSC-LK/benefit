<?php
/**
 * User Model
 */
class PerformanceModel extends Model
{

	protected $table = "performance";

	
	/*public function validate($DATA)
	{
		$this->$errors=array();
		//check for commu
		$communications=[0,25,50,75,100];
		if(empty($DATA['communication'])|| in_array($DATA['communication'], $communications))
		{
			$this->errors['communication']='communication is not valid';
		}
		//check for quality_of_work
		$quality_of_works=[0,25,50,75,100];
		if(empty($DATA['quality_of_work'])|| in_array($DATA['quality_of_work'], $quality_of_works))
		{
			$this->errors['quality_of_work']='quality_of_work is not valid';
		}
		//check for organization
		$organizations=[0,25,50,75,100];
		if(empty($DATA['organization'])|| in_array($DATA['organization'], $organizations))
		{
			$this->errors['organization']='organization is not valid';
		}
		//check for team_skills
		$team_skills=[0,25,50,75,100];
		if(empty($DATA['team_skills'])|| in_array($DATA['team_skills'], $team_skills))
		{
			$this->errors['team_skills']='team_skills is not valid';
		}
		//check for commu
		$multitasking_abilitys=[0,25,50,75,100];
		if(empty($DATA['multitasking_ability'])|| in_array($DATA['multitasking_ability'], $multitasking_abilitys))
		{
			$this->errors['multitasking_ability']='multitasking_ability is not valid';
		}

		if(count($this->errors)==0)
		{
			return true;
		}

		return false;
	}*/
}