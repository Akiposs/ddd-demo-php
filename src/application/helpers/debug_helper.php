<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('dd') ) {
	/**
	 * Dump and die
	 *
	 * @param mixed ...$vars
	 */
	function dd(...$vars)
	{
		echo "<pre>";
		foreach ($vars as $var) {
			print_r($var);
		}
		echo "<pre>";
		die();
	}
}