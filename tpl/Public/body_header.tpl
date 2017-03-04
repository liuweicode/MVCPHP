<div class="header">
    <!--<div class="stats">
        <p class="stat"><span class="label label-info">5</span> Tickets</p>
        <p class="stat"><span class="label label-success">27</span> Tasks</p>
        <p class="stat"><span class="label label-danger">15</span> Overdue</p>
    </div> -->

    <h1 class="page-title">{#$title#}</h1>
    <ul class="breadcrumb">
        <li><a href="?do=index&cmd=index">主页</a> </li>
        {#if count($smarty.session.nav_data)>0#}
        <li><a href="{#$smarty.session.nav_data.url#}">{#$smarty.session.nav_data.title#}</a> </li>
        {#/if#}
        <li class="active">{#$title#}</li>
    </ul>

</div>
