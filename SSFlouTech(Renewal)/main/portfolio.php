<?php
	include "../INC/header.php";
	$conf_tbanner['title'] = '설비현황';
	$conf_tbanner['images'] = 'portfolio.png';
	include "../INC/top_banner.php";
?>
<?
########## �Խ��Ǽ������� #########
if (!$bmain) $bmain="list";
include "../admin/conf/conf_post.php";

?>
<table class="photolist-content" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" valign="top">
			<table style="max-width: 1374px;" width="95%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<!--contents-->
					<td valign="top" class="content">
						<?
						include "./port${bmain}.php";
						?>
					</td>
					<!--//contents-->
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php include "../INC/footer.php"; ?>