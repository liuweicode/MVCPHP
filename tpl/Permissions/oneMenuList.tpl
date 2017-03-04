{#include file='Public/header.tpl'#}
{#include file='Public/body_header.tpl'#}
<div class="main-content">

    <div class="btn-toolbar list-toolbar">
        <button class="btn btn-primary" onclick="window.location.href='?do=Permissions&cmd=oneMenuAdd'"><i class="fa fa-plus"></i> 增加菜单</button>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>标题</th>
            <th>控制器名称</th>
            <th>默认方法名称</th>
            <th>fid</th>
            <th>类型</th>
            <th style="width: 3.5em;">操作</th>
        </tr>
        </thead>
        <tbody>
        {#foreach from=$permissions_arr item=vo#}
            <tr>
                <td>{#$vo.id#}</td>
                <td>{#$vo.title#}</td>
                <td>{#$vo.controller_name#}</td>
                <td>{#$vo.view_name#}</td>
                <td>{#$vo.fid#}</td>
                <td>
                    {#if $vo.type == '0'#}
                    一级菜单
                    {#else if $vo.type == '1'#}
                    二级菜单
                    {#else#}
                    可跳转一级菜单
                    {#/if#}
                </td>
                <td>
                    <a href="?do=Permissions&cmd=oneMenuEdit&id={#$vo.id#}"><i class="fa fa-pencil"></i></a>
                    <a href="#del_tips" role="button" class="delete_row" data-toggle="modal" link="?do=Permissions&cmd=oneMenuDel&id={#$vo.id#}"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
        {#/foreach#}
        </tbody>
    </table>

<div class="modal small fade" id="del_tips" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">你确定要删除当前数据么?</h3>
            </div>
            <div class="modal-body">
                <p class="error-text"><i class="fa fa-warning modal-icon"></i>如果误删除,如需恢复请与管理员联系</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">取消</button>
                <button class="btn btn-danger" data-dismiss="modal" id="del_confirm">确认</button>
            </div>
        </div>
    </div>
</div>

    {#include file='Public/body_footer.tpl'#}
</div>
{#include file='Public/footer.tpl'#}
<script type="text/javascript">
    $(function(){ //删除方法
        var link = '';
        $('.delete_row').click(function(){
            link = $(this).attr('link');
        })
        $('#del_confirm').click(function(){
            if(link != ''){
                window.location.href = link ;
            }else{
                $('#del_tips').modal('hide')
            }
        })
    })
</script>