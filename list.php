<?
include 'config.php';
include 'header.php';

$name = '조성원';

$articles = getRows("SELECT * FROM article ORDER BY id DESC");

//print_r($articles);
?>

<h1><?=$name?> 게시물 블로그 입니다.</h1>

<table border="1">
<thead>
<tr>
	<th>번호</th>
	<th>작성자</th>
	<th>내용</th>
	<th>날짜</th>
	<th>비고</th>
</tr>
</thead>

<script>
function deleteArticle(btn){
	if (confirm('삭제하시겠습니까?')== false )
	{
		return;
	}

	var $clickeBtn = $(btn);
	var $listItem = $clickeBtn.closest('tr');
	$listItem.remove();

	var id = $listItem.data('id');

	$.post(
		'/service/article/delete.php',
		{'id' : id},
		function(data) {
			alert(data.id + '가 삭제료되었습니다.');
		},
			'json'
		);
}
</script>

<tbody>
<? foreach ( $articles as $article ) {?>
<tr data-id="<?=$article['id']?>">
<td><?=$article['id']?></td>
<td><?=$article['writer']?></td>
<td><?=$article['body']?></td>
<td><?=$article['regDate']?></td>
<td><button onclick="deleteArticle(this)">삭제</button></td>
</tr>	
<?}?>
</tbody>

</table>
<?
include 'footer.php';
?>