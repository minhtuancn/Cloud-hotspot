<div class="header">
    <h1 class="logo">logo</h1>
    <div class="icon_install">安装向导</div>
    <div class="version">
    
    	<select onchange="window.location.href=this.value;">
    		<option value="?lang=zh"<?php if($dictionary['currentL']=='zh'){?> selected="selected"<?php }?>>中文</option>
    		<option value="?lang=en"<?php if($dictionary['currentL']=='en'){?> selected="selected"<?php }?>>English</option>
    	</select>
    </div>
  </div>