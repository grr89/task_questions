<?php


function get_clean_reverted_str($str){
	return strrev(preg_replace('/[aeiouy]/si','',$str));
}
