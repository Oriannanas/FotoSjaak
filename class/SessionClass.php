<?php
		class SessionClass
		{
			//fields
			private $userrole;
			private $logged_in = false;
			
			//properties
			
			//constructor
			public function __construct()
			{
				session_start();
			}
			
			//method login
			public function login()
			{
				$this->id			= $_SESSION['id']=loginClassObject->getLogin();
				$this->email		= $_SESSION['email']=loginClassObject->getEmail();
				$this->userrole		= $_SESSION['userrole']=loginClassObject->getUserrole();
				$this->logged_in		= TRUE;
			}
			
			
			
			
			
			
		}
