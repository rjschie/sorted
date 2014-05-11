<?php

namespace app\controllers;

use app\models\Calendars;

class CalendarsController extends \lithium\action\Controller {

	public function index() {
		$calendars = Calendars::first();
		return compact('calendars');
	}
}

?>