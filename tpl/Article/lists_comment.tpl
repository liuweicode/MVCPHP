{#include file='Public/header.tpl'#}
{#include file='Public/body_header.tpl'#}
<div class="main-content">


</div>
<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>文章id</th>
        <th>评论者id</th>
        <th>匿名评论标示</th>
        <th>评论内容</th>
        <th>评论时间</th>
        <th style="width: 3.5em;">操作</th>
    </tr>
    </thead>
    <tbody>
    {#foreach from=$list item=vo#}
    <tr>
        <td>{#$vo.comment_id#}</td>
        <td>{#$vo.article_id#}</td>
        <td>{#$vo.member_id#}</td>
        <td>{#$vo.device_id#}</td>
        <td>{#$vo.comment_content#}</td>
        <td>{#date('Y-m-d',$vo.create_datetime)#}</td>
        <td>
            <a href="#myModal" role="button" class="delete_row" data-toggle="modal" link="?do=Article&cmd=lists_del&id={#$vo.comment_id#}"><i class="fa fa-trash-o"></i></a>
        </td>
    </tr>
    {#/foreach#}
    </tbody>
</table>
    {#$page#}
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
    $(function () { //删除方法
        var link = '';
        $('.delete_row').click(function () {
            link = $(this).attr('link');
            console.log(link);
        })
        $('#del_confirm').click(function () {
            if (link != '') {
                window.location.href = link;
            } else {
                $('#del_tips').modal('hide')
            }
        })
    })
</script>