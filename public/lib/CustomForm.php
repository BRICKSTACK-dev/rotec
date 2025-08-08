<?php
define("CODE_OUTSIDE", "sjis" );
class CustomForm extends FormProcessor 
{
	function process($request, $check_err=true)
	{
		$request = $request['data'];
		$enc = mb_detect_encoding( $request['question'], "auto", true );
		$this->question = mb_convert_encoding(trim($request['question']),"utf-8", $enc);
		$this->comment = htmlspecialchars(mb_convert_encoding(trim($request['comment']),"utf-8", $enc));		
		$this->name = htmlspecialchars(mb_convert_encoding(trim($request['name']),"utf-8", $enc));				
		$this->name_kana = htmlspecialchars(mb_convert_encoding(trim($request['name_kana']),"utf-8", $enc));
		
		$this->zip1 = htmlspecialchars(trim($request['zip']['zip1']));
		$this->zip2 = htmlspecialchars(trim($request['zip']['zip2']));
		
		$this->address = htmlspecialchars(mb_convert_encoding(trim($request['address']),"utf-8", $enc));
		$this->building = htmlspecialchars(mb_convert_encoding(trim($request['building']),"utf-8", $enc));
		$this->company = htmlspecialchars(mb_convert_encoding(trim($request['company']),"utf-8", $enc));
		$this->depart = htmlspecialchars(mb_convert_encoding(trim($request['depart']),"utf-8", $enc));
		$this->post = htmlspecialchars(mb_convert_encoding(trim($request['post']),"utf-8", $enc));
		
		$this->tel_country_code = htmlspecialchars(trim($request['tel']['country_code']));
		$this->tel_area_code = htmlspecialchars(trim($request['tel']['area_code']));
		$this->tel_number = htmlspecialchars(trim($request['tel']['number']));
		
		$this->email = htmlspecialchars(trim($request['email']));
		$this->email_confirm = htmlspecialchars(trim($request['email_confirm']));
		
		$this->prefecture = htmlspecialchars(mb_convert_encoding(trim($request['prefecture']),"utf-8", $enc));
		
		if($check_err){
			if (!$this->question) {
				$this->addError('question_null','お問い合わせ内容を入力してください。');
			}
			if (!$this->comment) {
				$this->addError('comment_null','お問い合わせ内容を入力してください。');
			}			
			if (!$this->name) {
				$this->addError('name_null','お名前を入力してください。');
			}
			if (!$this->name_kana) {
				$this->addError('name_kana_null','お名前を入力してください。');	
			}elseif(!$this->checkDoubleChar($this->name_kana)){
				$this->addError('name_kana_2byte','全角で入力してください。');	
			}

			if (!$this->company) {
				$this->addError('company_null','会社名を入力してください。');
			}
			if (!$this->tel_country_code || !$this->tel_area_code || !$this->tel_number) {
				$this->addError('tel_null','電話番号を入力してください。');
			}
			if (!$this->email) {
				$this->addError('email_null','Eメールアドレスを入力してください。');	
			}else{

				if (!isValidEmail($this->email)) {
					$this->addError('email_null','Eメールアドレスの形式が正しくありません。');
				}else {
					if (!$this->email_confirm) {
						$this->addError('email_confirm_null','確認用Eメールアドレスを入力してください。');
					}else {
						if ($this->email != $this->email_confirm) {
							$this->addError('email_confirm_null','確認用Eメールアドレスが正しくありません。');
						}
					}
				}
			}	
		}

	}
	
	function checkDoubleChar( $item , $enc = "") {
		if( !$enc ) {
			$enc = mb_detect_encoding( $item, "auto", true );
		}
		if( $enc != CODE_OUTSIDE ) {
			//UTFだと１文字のバイト数が異なるので、SJISに変換して比較する
			$item = mb_convert_encoding( $item, CODE_OUTSIDE, $enc );
			$enc = CODE_OUTSIDE;
		}
		$strcnt = mb_strlen( $item, $enc ) * 2;
		$strlen = strlen( $item );

		if( $strlen <> $strcnt ){
			return false;
		}
		return true;
	}
}
?>
