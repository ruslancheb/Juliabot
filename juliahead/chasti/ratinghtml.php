<?php
echo '
<font color="yellow"><h2>PHP</h2></font>	
<form action="ajax.php" method=GET>						
    <p>
	<select name="ocenka">
    <option selected="selected">Оценка</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
	<option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
	<option>9</option>
    <option>10</option>
    </select>
	</p>
	<input type="submit" value="    ОтпР    ">
	<input type="hidden" name="member" value="'.$vid.'">
</form>
';
?>