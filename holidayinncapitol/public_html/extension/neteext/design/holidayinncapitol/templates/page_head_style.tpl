<style type="text/css">
    @import url({"stylesheets/debug.css"|ezdesign(no)});
    {foreach ezini( 'StylesheetSettings', 'CSSFileList', 'design.ini' ) as $css_file}
    @import url({concat( 'stylesheets/', $css_file )|ezdesign});
    {/foreach}
    {foreach ezini( 'StylesheetSettings', 'FrontendCSSFileList', 'design.ini' ) as $css_file}
    @import url({concat( 'stylesheets/', $css_file )|ezdesign});
    {/foreach}
</style>
