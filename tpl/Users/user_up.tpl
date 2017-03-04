{#include file='Public/header.tpl'#}
{#include file='Public/body_header.tpl'#}
<div class="row">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">
            <form action="index.php?do=Users&cmd=user_upcl&id={#$list['admin_id']#}" method="post">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>用户昵称</label>
                        <input name="name" type="text" value="{#$list['admin_name']#}" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>用户名</label>
                        <input name="user" type="text" value="{#$list['admin_user']#}" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>密码</label>
                        <input name="password"  type="password" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>权限</label>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</th>
                                <th>标题</th>
                                <th>控制器名称</th>
                                <th>默认方法名称</th>
                                <th>类型</th>
                                <th>fid</th>
                            </tr>
                            </thead>
                            {#foreach from=$row item=v#}
                            <tr>
                                <!--checked-->
                                <td><input type="checkbox" value="{#$v.id#}" name = 'permission[]' {#if in_array($v.id,$list.admin_permission)#} checked {#/if#}>&nbsp;&nbsp;&nbsp;{#$v.id#}</td>
                                <td>{#$v.title#}</td>
                                <td>{#$v.controller_name#}</td>
                                <td>{#$v.view_name#}</td>
                                <td>{#$v.type#}</td>
                                <td>{#$v.fid#}</td>

                            </tr>
                            {#/foreach#}
                        </table>
                    </div>
                </div>

                </div>
                <div class="col-md-12">
                    <div class="btn-toolbar list-toolbar">
                        <button class="btn btn-primary"><i class="fa fa-save"></i> 确认</button>
                        <a href=" " onclick="history.go(-1)" data-toggle="modal" class="btn btn-danger">返回</a >
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{#include file='Public/footer.tpl'#}