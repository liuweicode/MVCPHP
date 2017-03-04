{#include file='Public/header.tpl'#}
{#include file='Public/body_header.tpl'#}
<div class="main-content">

        <div class="btn-toolbar list-toolbar">
            <button onclick="window.location.href='index.php?do=Users&cmd=user_new'" class="btn btn-primary"><i class="fa fa-plus"></i> 添加</button>
            <div class="btn-group">
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>用户昵称</th>
                <th>用户名</th>
                <th>权限</th>
                <th style="width: 3.5em;">操作</th>
            </tr>
            </thead>
            <tbody>
            {#foreach from=$row item=v#}
            <tr>
                <td>{#$v.admin_id#}</td>
                <td>{#$v.admin_name#}</td>
                <td>{#$v.admin_user#}</td>
                <td>{#$v.admin_permission#}</td>
                <td>
                    <a href="index.php?id={#$v.admin_id#}&do=Users&cmd=user_up"><i class="fa fa-pencil"></i></a>
                    <a href="#myModal" role="button" class="delete_row" data-toggle="modal" link="?do=Users&cmd=user_del&id={#$v.admin_id#}"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
            {#/foreach#}
            </tbody>
        </table>

        <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Delete Confirmation</h3>
                    </div>
                    <div class="modal-body">
                        <p class="error-text"><i class="fa fa-warning modal-icon"></i>你确定你要删除吗用户?<br>这无法回复。</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button class="btn btn-danger" data-dismiss="modal" id="del_confirm">Delete</button>
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
            console.log(link);
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