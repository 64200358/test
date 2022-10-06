<form neme="form" method="post" action="save.php" enctype="multipart/form-data">
<label>Title:</label><input type="text"name="rank_title" /><br/>
<label>Name:</label><input type="text"name="rank_name" /><br/>
<label>Min:</label><input type="text"name="rank_min"/>
<label>special:</label>
<input type="radio"name="rank_special"id="rank_special1" value="1"checked="checked"/>
<label for="rank_special1">yes</label>
<input type="radio"name="rank_special"id="rank_special2"value="0"/>
<label for="rank_special2">no</label><br/>
<label>image:</label>
<input type="file"name="rank_image"/><br/>
<input type="submit" name="save" value="save" />
<input name="reset" type="reset" value="clear"   />
