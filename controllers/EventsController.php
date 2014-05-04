<?php

namespace app\controllers;

use app\models\Events;
use lithium\action\DispatchException;
use app\extensions\utils\Dates;

class EventsController extends \lithium\action\Controller {


	public function index() {

		$events = Events::all(array(
			'conditions' => array(
				'time' => array(
					'>=' => (Dates::get_today()),
					'<' => (Dates::get_n_day(2)),
				),
			),
			'order' => 'time',
		));

		return compact('events');
	}

	public function view() {
		$event = Events::first($this->request->id);
		return compact('event');
	}

	public function add() {
		$event = Events::create();

		if (($this->request->data) && $event->save($this->request->data)) {
			return $this->redirect(array('Events::view', 'args' => array($event->id)));
		}
		return compact('event');
	}

	public function edit() {
		$event = Events::find($this->request->id);

		if (!$event) {
			return $this->redirect('Events::index');
		}
		if (($this->request->data) && $event->save($this->request->data)) {
			return $this->redirect(array('Events::view', 'args' => array($event->id)));
		}
		return compact('event');
	}

	public function delete() {
		if (!$this->request->is('post') && !$this->request->is('delete')) {
			$msg = "Events::delete can only be called with http:post or http:delete.";
			throw new DispatchException($msg);
		}
		Events::find($this->request->id)->delete();
		return $this->redirect('Events::index');
	}
}

?>