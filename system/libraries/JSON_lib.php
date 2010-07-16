<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require 'JSON/JSON.php';

class JSON_lib extends Services_JSON
{

	function sendJSONsuccess($responseText = "", $aData = "")
	{
		$ajax_res = array(
			"responseText" => $responseText,
			"success" => "true"
		);

		if (is_array($aData))
		{
			$ajax_res = array_merge($ajax_res, $aData);
		}

		$this->sendJSON($ajax_res);
	}

	function sendJSONfailure($responseText = "", $aData = "")
	{
		$ajax_res = array(
			"responseText" => $responseText,
			"success" => "false"
		);

		if (is_array($aData))
		$ajax_res = array_merge($ajax_res, $aData);

		$this->sendJSON($ajax_res);
	}

	function sendJSON($json_array)
	{
		if (function_exists('json_encode')){
			$json_str = json_encode($json_array);
		}
		else
		{
			$json_str = $this->encode($json_array);
		}

		header("Content-length: ". strlen($json_str));
		echo $json_str;
		exit;
	}
}
?>