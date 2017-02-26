<?php
/**
  * @var \App\View\AppView $this
  */
?>

<body>

<div id="header">
<h1>Request</h1>
</div>


<form action="/rests/chooseaction" method="get">
<label>URL</label>
<input name="url" type="text" size="40" /><br />
<label>DC_Emplacement</label>
<input name="emplacement" type="text" size="22" /><br />
<label>Method</label>
<label><input name="method" type="radio" value="" />GET </label>
<label><input name="method" type="radio" value="" />POST </label>
<label><input name="method" type="radio" value="" />PUT </label>
<label><input name="method" type="radio" value="" />DELETE </label>
<label>Send</label>
<input name="" type="submit" value="Send" />
</form>


</body>
