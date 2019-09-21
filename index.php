<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задание для .defa");
?><?$APPLICATION->IncludeComponent(
	"defa:my.feedback",
	"",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"EMAIL_TO" => "vlad.moddy@gmail.com",
		"EVENT_MESSAGE_ID" => array("7"),
		"NEED_LOG" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NAME", "PHONE", "EMAIL"),
		"USE_CAPTCHA" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>