<?php
// check for invalid entry point
if(!defined("HMS")) die("Invalid entry point");

class PageSignup extends PageBase
{
	protected function runPage(){
		
		$this->mBasePage = "book.tpl";

		global $cWebPath;

		$this->mSmarty->assign("valQbTitle", "");
		$this->mSmarty->assign("valQbFisrtName", "");
		$this->mSmarty->assign("valQbLastName", "");
		$this->mSmarty->assign("valQbAddress", "");
		$this->mSmarty->assign("valQbAddress2", "");
		$this->mSmarty->assign("valQbPostCode", "");
		$this->mSmarty->assign("valQbEmail", "");

	}
}
