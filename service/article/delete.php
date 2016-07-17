<?
//설정파일 불러오기
include $_SERVER['DOCUMENT_ROOT'].'/config.php';

//$_GET OR $_POST 구분없이 입력받은 모든 매개변수
$sqlSafe = $_REQUEST;

//입력받은 데이터로 삭제쿼리 실행
$sql = "
DELETE FROM	 article
WHERE id = '{$sqlSafe['id']}'
";
execute($sql);

$resultData = array(
'resultCode' => 's-1',
'id' => $sqlSafr['id']
);

echo json_encode($resultData);

?>