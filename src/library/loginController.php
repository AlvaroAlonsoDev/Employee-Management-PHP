<?php 
class LoginUser{
	// class properties
	private $username;
	private $password;
	public $error;
	public $success;
	private $storage = "./resources/users.json";
	private $stored_users;

	// class methods
	public function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
		$this->stored_users = json_decode(file_get_contents($this->storage), true);
		$this->login();
	}


	private function login(){
		foreach ($this->stored_users["users"] as $user) {
			if($user['name'] == $this->username){
				if(password_verify($this->password, $user['password'])){
					session_start();
					$_SESSION['user'] = $this->username;
					header("location: ././src/dashboard.php"); 
					exit();
				}
			}
		}
		return $this->error = "Invalid email or password. Please try again";
	}

}