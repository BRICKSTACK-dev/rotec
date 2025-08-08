<?php
function pr($val)
{
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}
/**
 * for htmlspecialchars
 * 
 * @param string $text
 * @param string $encoding
 * @return string
 */
function h($text, $encoding='UTF-8')
{
    return htmlspecialchars($text, ENT_QUOTES, $encoding);
}
/**
 * $params[$key]??$value???????????
 * 
 * @param string $key
 * @param string $value
 * @param string $params
 * @return boolean
 */
function in($key, $value, $params)
{
    return (isset($params[$key]) && $params[$key] === $value);
}
/**
 * ??????????????
 * 
 * @return array
 */
function request()
{
    return $_REQUEST;
}
/**
 * $params[$key]?????
 * 
 * @param string $key
 * @param array $params
 * @return mixed
 */
function getParam($key, $params)
{
    if (isset($params[$key])) return $params[$key];
    return '';
}
/**
 * http post?
 * 
 * @return boolean
 */
function isPost()
{
    return (strtolower($_SERVER['REQUEST_METHOD']) == 'post');
}
/**
 * http get?
 * 
 * @return boolean
 */
function isGet()
{
    return (strtolower($_SERVER['REQUEST_METHOD']) == 'get');
}
/**
 * error http404
 * 
 * @return void
 */
function error404()
{
    header("HTTP/1.1 404 Not Found");
    exit;
}

/**
 * $str?$count???????????
 * 
 * @param integer $count
 * @return string
 */
function createDelimination($count, $str)
{
    $result = array();
    for ($i=0; $i<$count; $i++) $result[] = $str;
    return implode(',', $result);
}

/**
 * ???????(???????????)?????????????
 * 
 * @param array $array
 * @param mixed $key
 * @return array
 */
function extractArray($array, $key, $sep=',')
{
    if (!isset($array[$key])) return array();
    if (is_array($array[$key])) return $array[$key];
    return explode($sep, $array[$key]);
}

function isValidEmail($email){
	return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}

function send_mail($toAddr, $subject, $body, $from)
{
	mb_language("ja");
	mb_internal_encoding("UTF-8");

	$subject = mb_encode_mimeheader($subject,"iso-2022-jp");

	$body = str_replace("\r\n","\n",$body);
	$body = str_replace("\r","\n",$body);
	$body = mb_convert_encoding($body, "iso-2022-jp", "UTF-8");
echo EMAIL_HEAD;
echo 'RETURNPATH ' . RETURNPATH;
	mail($toAddr, $subject, $body, $from , "-f kamata@gmail.com");
}

	function encodeMimeHeader($string,$charset="iso-2022-jp",$linefeed="\r\n"){
		
		$string = mb_convert_encoding($string,"JIS","UTF-8,EUC-JP,SJIS,JIS");
		if (!strlen($string)){
			return "";
		}
	
		$start = "=?$charset?B?";
		$end = "?=";
		$encoded = '';
	
		/* Each line must have length <= 75, including $start and $end */
		$length = 150 - strlen($start) - strlen($end);
		/* Average multi-byte ratio */
		$ratio = mb_strlen($string, $charset) / strlen($string);
		/* Base64 has a 4:3 ratio */
		$magic = $avglength = floor(3 * $length * $ratio / 4);
	
		for ($i=0; $i <= mb_strlen($string, $charset); $i+=$magic) {
			$magic = $avglength;
			$offset = 0;
			/* Recalculate magic for each line to be 100% sure */
			do {
				$magic -= $offset;
				$chunk = mb_substr($string, $i, $magic, $charset);
				$chunk = base64_encode($chunk);
				$offset++;
			} while (strlen($chunk) > $length);
			
			if ($chunk)
				$encoded .= ' '.$start.$chunk.$end.$linefeed;
		}
		/* Chomp the first space and the last linefeed */
		$encoded = substr($encoded, 1, -strlen($linefeed));
	
		return $encoded;
	}

?>