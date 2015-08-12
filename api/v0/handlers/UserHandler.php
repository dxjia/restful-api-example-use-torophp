<?php
class UserHandler {
    function get($userid) {
      echo "UserHandler, the request id = ".$userid."!<br>";
	  $user = array('id'=>$userid, 'name'=>'David', 'age'=>23);
	  $output = array('code'=>0, 'message'=>'ok', 'result'=>$user);
	  exit(json_encode($output));
    }
}
?>