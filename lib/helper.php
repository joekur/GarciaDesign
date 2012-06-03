<?php

function paginate($num) {
	$result = '';
	$result .= '<div class="pagination-container-container"><div class="pagination-container">';
	$result .= '<div class="left-arrow"></div>';
	for ($i = 0; $i < $num; $i++) {
		if ($i == 0) {
			$result .= '<div class="pagination active"></div>';
		} else {
			$result .= '<div class="pagination"></div>';
		}
	}
	$result .= '<div class="right-arrow"></div>';
	$result .= '</div></div>';
	return $result;
}

?>