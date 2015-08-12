<?php
class UsersHandler {
    function get() {
		echo "UsersHandler, get all users!<br>";
		$user1 = array('id'=>10001, 'name'=>'David', 'age'=>23);
		$user2 = array('id'=>10002, 'name'=>'Jury', 'age'=>30);
		$users = array($user1, $user2);
		$output = array('code'=>0, 'message'=>'ok', 'result'=>$users);
		exit(json_encode($output));
    }
}
?>