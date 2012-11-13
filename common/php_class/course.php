<?php
#class describing a course object
class Course
{
	private $name;
	private $crn;
	private $code;
	private $subject;
	private $credit; 
	private $faculty;
	private $simester;
	private $level;
	private $type;
	/*--------------------------------------------Arrays---------------------------------------*/
	private $pre_requisites; #[pre_requisites]
	private $schedule; #[schedule]
	/*----------------------------------------Contstructor-------------------------------------*/
	public function Course()
	{

	}
	public function init($crn,$name, $code,$subject, $credit, $faculty, $simester, $level,$schedule,
			 $type)
	{
		$this->crn = $crn;
		$this->name = $name;
		$this->code = $code;
		$this->subject= $subject;
		$this->credit = $credit; 
		$this->faculty = $faculty;
		$this->simester = $simester;
		$this->level = $level;
		$this->schedule = $schedule;
		$this->type = $type;
	}
	/*----------------------------------------Setters-------------------------------------------*/
	public function setName($value)
	{
		$this->name=$value;
	}
	public function setCRN($value)
	{
		$this->crn=$value;
	}
	public function setCode($value)
	{
		$this->code=$value;
	}
	public function setSubject($value)
	{
		$this->subject=$value;
	}
	public function setCredit($value)
	{
		$this->credit=$value;
	}
	public function setFaculty($value)
	{
		$this->faculty=$value;
	}
	public function setSimester($value)
	{
		$this->simester=$value;
	}
	public function setLevel($value)
	{
		$this->level=$value;
	}
	public function setLectureName($value)
	{
		$this->lecture_name=$value;
	}
	public function setSchedule($value)
	{
		$this->schedule=$value;
	}
	public function setType($value)
	{
		$this->type=$value;
	}
	/*----------------------------------------Getters-------------------------------------------*/
	public function getName()
	{
		return $this->name;
	}
	public function getCRN()
	{
		return $this->crn;
	}
	public function getCode()
	{
		return $this->code;
	}
	public function getSubject()
	{
		return $this->subject;
	}
	public function getCredit()
	{
		return $this->credit;
	}
	public function getFaculty()
	{
		return $this->faculty;
	}
	public function getSimester()
	{
		return $this->simester;
	}
	public function getLevel()
	{
		return $this->level;
	}
	public function getLectureName()
	{
		return $this->lecture_name;
	}
	public function getSchedule()
	{
		return $this->schedule;
	}
	public function getType()
	{
		return $this->type;
	}
	/*----------------------------------------Sub Classes---------------------------------------*/

}
?>