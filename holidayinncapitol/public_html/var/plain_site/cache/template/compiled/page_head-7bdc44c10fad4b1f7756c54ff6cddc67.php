<?php
// URI:       extension/neteext/design/holidayinncapitol/templates/page_head.tpl
// Filename:  extension/neteext/design/holidayinncapitol/templates/page_head.tpl
// Timestamp: 1315480051 (Thu Sep 8 6:07:31 CDT 2011)
$oldSetArray_448896438d30405eb635b33533bcd136 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/plain_site/cache/template/compiled/common.php' );

unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'http_equiv' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'HTTP';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '<meta http-equiv="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "HTTP";
else
    $namespace .= ':HTTP';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'key', $vars[$namespace] ) ) ? $vars[$namespace]['key'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" content="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "HTTP";
else
    $namespace .= ':HTTP';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
';
unset( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1 );
unset( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 );
unset( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 );
$elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_12 = compiledFetchAttribute( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11, 'ui_component' );
unset( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 );
$elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 = $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_12;
if (! isset( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 ) ) $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 = NULL;
while ( is_object( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 ) and method_exists( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11, 'templateValue' ) )
    $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 = $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11->templateValue();
while ( is_object( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 ) and method_exists( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11, 'templateValue' ) )
    $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 = $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11->templateValue();
$elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1 = ( ( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 ) == ( 'error' ) );
unset( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_11 );
if (! isset( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1 ) ) $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1 = NULL;
while ( is_object( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1 ) and method_exists( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1, 'templateValue' ) )
    $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1 = $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_map' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'page_title' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'has_content' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'true' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '	';
// def $title
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'page_title' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'title', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'title' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 1,
    2 => 332,
  ),
  1 => 
  array (
    0 => 8,
    1 => 47,
    2 => 378,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/page_head.tpl',
) );
    $tpl->setVariable( 'title', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'title', $var, $rootNamespace );
}

}
elseif ( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1 )
{
$text .= '	';
// def $title
if ( $tpl->hasVariable( 'title', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'title' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 1,
    2 => 431,
  ),
  1 => 
  array (
    0 => 10,
    1 => 26,
    2 => 456,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/page_head.tpl',
) );
    $tpl->setVariable( 'title', 'Page Error', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'title', 'Page Error', $rootNamespace );
}

}
else
{
$text .= '	';
// def $title
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = ( $var1 . ' - Holiday Inn Capitol DC Hotel' );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'title', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'title' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 1,
    2 => 467,
  ),
  1 => 
  array (
    0 => 12,
    1 => 66,
    2 => 532,
  ),
  2 => 'extension/neteext/design/holidayinncapitol/templates/page_head.tpl',
) );
    $tpl->setVariable( 'title', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'title', $var, $rootNamespace );
}

}
unset( $if_cond );
// if ends

unset( $elseif_cond_6dfd767bf6ff98e91d5af12c532ae777_1 );

$text .= '
<title>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</title>
<meta name="description" content="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'meta_description' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
<meta name="keywords" content="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'meta_keywords' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
<link rel="canonical" href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

//include_once( 'lib/ezutils/classes/ezuri.php' );
eZURI::transformURI( $var1, false, 'full' );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' />
<link rel="Shortcut icon" href="/extension/neteext/design/holidayinncapitol/images/favicon.ico" type="image/x-icon" />';
// undef all
$tpl->unsetLocalVariables();
$text .= '
';

$setArray = $oldSetArray_448896438d30405eb635b33533bcd136;
$tpl->Level--;
?>
