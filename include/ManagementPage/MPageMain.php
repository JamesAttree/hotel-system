<?php
// check for invalid entry point
if(!defined("HMS")) die("Invalid entry point");

class MPageMain extends ManagementPageBase
{
	protected function runPage()
	{
		$this->mBasePage="mgmt/home.tpl";
	}
}
