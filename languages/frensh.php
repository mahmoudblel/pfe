<?php
function lang($phrase){

	static $lang = array(

        'MESSAGE' => 'bonjour',
        'ADMIN' => 'mayonaise'
	);
	return $lang[$phrase];
}

?>