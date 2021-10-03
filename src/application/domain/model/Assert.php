<?php
namespace domain\model;

class Assert{
	public function __construct() {}
	
	
	public static function NotNullAndNumeric($value, $validation_target_str){
		if(!is_numeric($value) || strlen($value) == 0){
			$trace= debug_backtrace();
			log_message('error', "{$validation_target_str}は数字で入力してください。 ＠呼び出し元: {$trace[1]['class']} / {$trace[1]['function']} / {$trace[0]['line']}行目");
			show_error("不正な値が送信されました。", 404, 'エラー');
		}
		return true;
	}
	
	public static function NotNullAndString($value, $validation_target_str){
		if(!is_string($value) || strlen($value) == 0){
			$trace= debug_backtrace();
			log_message('error', "{$validation_target_str}は文字で入力してください。 ＠呼び出し元: {$trace[1]['class']} / {$trace[1]['function']} / {$trace[0]['line']}行目");
			show_error("不正な値が送信されました。", 404, 'エラー');
		}
		return true;
	}
	
	public static function NotNullAndMatchClass($obj, $validation_target_str, $class_name){
		if(empty($obj) || !is_object($obj) || get_class($obj) != $class_name){
			$trace= debug_backtrace();
			log_message('error', "{$validation_target_str}は{$class_name}をセットしてください。 ＠呼び出し元: {$trace[1]['class']} / {$trace[1]['function']} / {$trace[0]['line']}行目");
			show_error("不正な値が送信されました。", 404, 'エラー');
		}
		return true;
	}
	
	public static function MatchClass($obj, $validation_target_str, $class_name){
		if(!is_object($obj) || get_class($obj) != $class_name){
			$trace= debug_backtrace();
			log_message('error', "{$validation_target_str}は{$class_name}をセットしてください。 ＠呼び出し元: {$trace[1]['class']} / {$trace[1]['function']} / {$trace[0]['line']}行目");
			show_error("不正な値が送信されました。", 404, 'エラー');
		}
		return true;
	}
	
	public static function MatchClassRecursive($obj_array, $validation_target_str, $class_name){
		foreach($obj_array as $obj){
			if(!is_object($obj) || get_class($obj) != $class_name){
				$trace= debug_backtrace();
				log_message('error', "{$validation_target_str}は{$class_name}をセットしてください。 ＠呼び出し元: {$trace[1]['class']} / {$trace[1]['function']} / {$trace[0]['line']}行目");
				show_error("不正な値が送信されました。", 404, 'エラー');
			}
		}
		return true;
	}
	
	public static function InArray($value, $array, $validation_target_str){
		if(strlen($value) >0 && !in_array($value, $array)){
			$array_str = implode(',', $array);
			$trace= debug_backtrace();
			log_message('error', "{$validation_target_str}は「{$array_str}」のいづれかをセットしてください。 ＠呼び出し元: {$trace[1]['class']} / {$trace[1]['function']} / {$trace[0]['line']}行目");
			show_error("不正な値が送信されました。", 404, 'エラー');
		}
		return true;
	}
	
	public static function NotNullInArray($value, $array, $validation_target_str){
		if(strlen($value)==0 || !in_array($value, $array)){
			$array_str = implode(',', $array);
			$trace= debug_backtrace();
			log_message('error', "{$validation_target_str}は「{$array_str}」のいづれかをセットしてください。 ＠呼び出し元: {$trace[1]['class']} / {$trace[1]['function']} / {$trace[0]['line']}行目");
			show_error("不正な値が送信されました。", 404, 'エラー');
		}
		return true;
	}
	
	public static function CantDuplicate($value, $array, $validation_target_str){
		if(strlen($value)>0 && !in_array($value, $array)){
			$trace= debug_backtrace();
			log_message('error', "{$validation_target_str}には重複した値をセットできません。 ＠呼び出し元: {$trace[1]['class']} / {$trace[1]['function']} / {$trace[0]['line']}行目");
			show_error("不正な値が送信されました。", 404, 'エラー');
		}
		return true;
	}
}