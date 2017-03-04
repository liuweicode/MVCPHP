
<div class="sidebar-nav">
    <ul>
        <li>
            {#if $smarty.session.admin.admin_id == 1#}
            <a href="?do=Permissions&cmd=oneMenuList" class="nav-header"><i class="fa fa-fw fa-legal"></i> 系统管理</a>
            {#/if#}
        </li>
        {#foreach from=$smarty.session.permissions item=vo key=key#}
        {#if $vo.type == '2'#}
        <li>
            <a href="?do={#$vo.controller_name#}&cmd={#$vo.view_name#}" class="nav-header"><i class="fa fa-fw fa-fighter-jet"></i> {#$vo.title#}</a>
        </li>
        {#else#}
        <li>
            <a href="#" data-target=".legal-menu-{#$key#}" class="nav-header  {#if isset($vo.is_selected) && $vo.is_selected == '1'#} collaps {#else#} collapsed {#/if#}" data-toggle="collapse"><i class="fa fa-fw fa-fighter-jet"></i> {#$vo.title#}<i class="fa fa-collapse"></i></a>
        </li>
        <li>
            <ul class="legal-menu-{#$key#} nav nav-list collapse {#if isset($vo.is_selected) && $vo.is_selected == '1'#} in {#/if#}" style="height: auto;">
                {#foreach from=$vo.child item=v#}
                <li {#if isset($v.is_selected) && $v.is_selected == '1'#} class="active" {#/if#} ><a href="?do={#$v.controller_name#}&cmd={#$v.view_name#}"><span class="fa fa-caret-right"></span> {#$v.title#}</a></li>
                {#/foreach#}
            </ul>
        </li>
        {#/if#}
        {#/foreach#}
    </ul>
</div>