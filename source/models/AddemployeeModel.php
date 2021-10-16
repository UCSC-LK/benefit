<?php
/**
 * User Model
 */
class AddemployeeModel extends Model
{

	protected $table = "employee_details";
	
	public function getcol($col)
	{
		$query = "select $col from $this->table";
		return $this->query($query);
	}
}