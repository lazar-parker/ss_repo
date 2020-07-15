<?php


  class DB {
    public static function open() {
  		db_open();
  	}

  	public static function close() {
  		db_close();
  	}

  	public static function sanitize($str) {
  		global $link;
  		return mysqli_real_escape_string($link, $str);
  	}

  	public static function begin() {
  		global $link;
  		mysqli_begin_transaction($link);
  	}

  	public static function query($str, $commit = false) {
  		global $link;
  		if ($commit)
  			mysqli_begin_transaction($link);
  		$res = mysqli_query($link, $str);
  		if(!$res) {
  			die('Connection Failure: ' . mysqli_error($link));
  		}
  		if ($commit)
  			mysqli_commit($link);
  		return mysqli_fetch_assoc($res);
  	}

  	public static function commit() {
  		global $link;
  		mysqli_commit($link);
  	}

  	public static function array($str) {
  		global $link;
  		$A = Array(); $i = 0;
  		$res = mysqli_query($link, $str);
  		if (!mysqli_num_rows($res))
  			return null;
  		while ($row = mysqli_fetch_assoc($res))
  			$A[$i++] = $row;
  		mysqli_free_result($res);
  		return $A;
  	}

    public static function getMembers() {
      $sql = "SELECT member_name FROM member_data;";
      $array = DB::array($sql);
      return $array;
    }

    public static function getMemberByIndex($index) {
      global $link;
      $sql = "SELECT *
              FROM member_data
              WHERE member_index=$index;";

      if(!$result = mysqli_query($link, $sql)) {
        die('Connection Failure: ' . mysqli_error($link));
      }

      if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
      } else {
        return FALSE;
      }
    }

    public static function getAlumniByIndex($index) {
      global $link;
      $sql = "SELECT *
              FROM alumni_data
              WHERE alumni_index=$index;";

      if(!$result = mysqli_query($link, $sql)) {
        die('Connection Failure: ' . mysqli_error($link));
      }

      if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
      } else {
        return FALSE;
      }
    }

    /**********************************************************/
    /********************  CONTACT  TABLE  ********************/
    /**********************************************************/

    public static function storeContact($name, $mail, $message)
    {
      $today = getDate();
      $today_string = json_encode($today);
      echo $today_string;
    }

  }
?>
