{def $pathArray=array()}
{foreach $module_result.path as $pathItem}
	{set $pathArray = $pathArray|append($pathItem.text)}
{/foreach}	

<script type="text/javascript" language="JavaScript">var gpgName="{$pathArray|implode(" - ")}";</script>
 <script src={"javascript/s-code.js"|ezdesign} type="text/javascript" language="JavaScript"></script>
{undef}
{literal}
<script type="text/javascript"> 
// Fix Omniture conflict 
(function() { 
   var old = s.ot; 
   s.ot = function(el) { 
       return el.tagUrn ? '' : old(el); 
   }; 

})(); 

</script>{/literal}
