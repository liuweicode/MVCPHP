{#include file='Public/header.tpl'#}
{#include file='Public/body_header.tpl'#}
<div class="row">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">
            <form action="index.php?do=Users&cmd=user_newcl" method="post">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>用户昵称</label>
                        <input name="name" type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>用户名</label>
                        <input name="user" type="text" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>密码</label>
                        <input name="password"  type="password" value="" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>权限</label><br>
                        &nbsp;&nbsp;<input type="checkbox" name="all" onclick="check_all(this,'permission[]')" />全选
                        <table class="table">
                            <thead>
                            <tr>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID</th>
                                <th>标题</th>
                            </tr>
                            </thead>
                            <tbody>
                            {#foreach from=$row item=v#}
                            <tr>
                                <td><input type="checkbox" value="{#$v.id#}" name = 'permission[]'>&nbsp;&nbsp;&nbsp;{#$v.id#}</td>
                                <td>{#$v.title#}</td>
                            </tr>

                            {#/foreach#}
                            </tbody>
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
<script type="text/javascript">
    function check_all(obj,cName)
    {
        var checkboxs = document.getElementsByName(cName);
        for(var i=0;i < checkboxs.length;i++){checkboxs[i].checked = obj.checked;}
            }
    function uncheck_all(obj,cName)
    {
        var checkboxs = document.getElementsByName(cName);
        for(var i=0;i < checkboxs.length;i++){checkboxs[i].checked = obj.checked=false;}
            }
</script>