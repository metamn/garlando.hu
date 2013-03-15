<?php $search_text = ""; ?> 
<form method="get" id="searchform"action="<?php bloginfo('home'); ?>/"> 
  <input class="searchform" type="text" value="<?php echo $search_text; ?>"  name="s" id="s" onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>')  {this.value = '';}" /> 
  <input type="hidden" id="searchsubmit" /> 
</form>
