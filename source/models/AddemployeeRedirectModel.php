<?php
/**
 * User Model
 */
class AddemployeeRedirectModel extends Model
{

	protected $table = "employee_details";


	public function getLast($primarry)
	{
		$query = "select *from $this->table ORDER BY $primarry DESC LIMIT 1;";
		return $this->query($query);
	}
	

}