<?
include 'config.php';
include 'header.php';

$name = '조성원';

$articles = getRows("SELECT * FROM article ORDER BY id DESC");

//print_r($articles);
?>

<h1><?=$name?> 메인 블로그 입니다.</h1>

<?
include 'footer.php';
?>