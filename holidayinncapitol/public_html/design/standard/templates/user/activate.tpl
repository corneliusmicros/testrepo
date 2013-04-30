{* DO NOT EDIT THIS FILE! Use an override template instead. *}
<div class="maincontentheader">
<h1>{"Activate account"|i18n("design/standard/user")}</h1>
</div>

<p>
{if $account_activated}
{'Your account is now activated.'|i18n('design/standard/user')}
{elseif $already_active}
{'Your account is already active.'|i18n('design/standard/user')}
{else}
{'Sorry, the key submitted was not a valid key. Account was not activated.'|i18n('design/standard/user')}
{/if}
</p>

<div class="buttonblock">
<form action={"/user/login"|ezurl} method="post">
    <input class="button" type="submit" value="{'OK'|i18n( 'design/standard/user' )}" />
</form>
</div>
