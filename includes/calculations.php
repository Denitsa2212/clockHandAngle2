<?php
	# clockHandAngle *********************************************************************************
	function clockHandAngle($time) {
		$times = explode(':', $time);
		$hours = $times[0];
		$minutes = $times[1];
		$seconds = $times[2];

		if($hours > 12) {
			$hours -= 12;
		}
    // Formula for finding angle
		$angle = abs(30 * $hours + 0.5 * $minutes + ($seconds / 120) - (6 * $minutes + 0.1 * $seconds));
    // Return the smaller angle
		if ($angle < 360-$angle) {
			return $angle;
		}else{
			return 360-$angle;
		}
	}
	# clockHandAngle2 ***********************************************************
	function clockHandAngle2($angle, $timeNow) {
    $timeNow2 = explode(':', $timeNow);
    $hours = $timeNow2[0];
    $minutes = $timeNow2[1];
    $seconds = $timeNow2[2];

    $var = 0.09;
    while (abs(clockHandAngle($hours . ':' . $minutes . ':' . $seconds) - $angle) > $var) {
        $seconds += 1;
        if($seconds >= 60) {
            $seconds = 0;
            $minutes += 1;
        }
        if($minutes >= 60) {
            $minutes = 0;
            $hours += 1;
        }
        if($hours > 12) {
            $hours -= 12;
        }
    }
    $time = strtotime($hours . ':' . $minutes . ':' . $seconds);
    return date('g:i:s', $time);
    
}
?>