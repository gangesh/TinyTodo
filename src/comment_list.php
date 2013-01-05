<?php   include "comment/connect.php"; include "comment/customeFuctions.php"; $limitComment = 1060;
echo $taskid = $_POST['taskid'];
$result = mysql_query("SELECT id, name, comment, date FROM user_comment where taskids = '$taskid' ORDER BY id ASC") or die(mysql_error());

	while($row = mysql_fetch_array($result)){?>
		
		
		<div id="<?php if(strlen($row['comment']) > $limitComment){echo "commentWrapperSmall";}else{echo "commentWrapper";}?>" class="<?php if(strlen($row['comment']) > $limitComment){echo "commentWrapperSmall";}else{echo "commentWrapper";}?>">
		<div id="commentTime" class="commentTime"><?php echo nicetime($row['date']); ?></div>
		<div id="commentName"><?php echo $row['name'];?>: </div>
		<div id="<?php if(strlen($row['comment']) > $limitComment){echo "commentCommentSmall";}else{echo "commentComment";}?>" class="<?php if(strlen($row['comment']) > $limitComment){echo "commentCommentSmall";}else{echo "commentComment";}?>"><?php if(strlen($row['comment']) > $limitComment){echo substr($row['comment'], 0, $limitComment). '... <a class="moreLess">more</a>';}else{echo $row['comment'];} ?></div>
		<?php if(strlen($row['comment']) > $limitComment){?><div class="commentCommentMore"><?php echo $row['comment']. ' <a class="moreLess">less</a>'; ?></div><?php } ?>
		</div>
		<?php } ?>
