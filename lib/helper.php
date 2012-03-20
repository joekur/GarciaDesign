<?php

function paginate($num) {
	$result = '';
	$result .= '<div class="pagination-container-container"><div class="pagination-container">';
	for ($i = 0; $i < $num; $i++) {
		if ($i == 0) {
			$result .= '<div class="pagination active"></div>';
		} else {
			$result .= '<div class="pagination"></div>';
		}
	}
	$result .= '</div></div>';
	return $result;
}

?>