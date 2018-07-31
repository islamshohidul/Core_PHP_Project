<?php

	class Task{
		public $description;

		public $completed = false;
		public $title;

		public function __construct($description,$title){
			$this->description = $description;
			$this->title  = $title;
		}


		public function complete(){
			$this->completed = true;
		}

	}  

	$task = new Task("Learn OOp","Some thing");
	var_dump($task->description, $task->title);
	$task->complete();
	var_dump($task->completed);


?>