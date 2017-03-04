{#include file='Public/header.tpl'#}
{#include file='Public/body_header.tpl'#}
        <div class="main-content">
            <div class="row">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active in" id="home">
                            <form action="?do=Permissions&cmd=oneMenuEditCl&id={#$data.id#}" method="post">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>
                                            {#if $data.type == '0'#}
                                            一级菜单
                                            {#else if $data.type == '1'#}
                                            二级菜单
                                            {#else#}
                                            可跳转一级菜单
                                            {#/if#}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>标题</label>
                                        <input name="title" type="text" value="{#$data.title#}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>控制器名称</label>
                                        <input name="controller_name"  type="text" value="{#$data.controller_name#}" class="form-control" {#if $data.type == '0'#} disabled {#/if#}>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>方法名称</label>
                                        <input name="view_name" type="text" value="{#$data.view_name#}" class="form-control" {#if $data.type == '0'#} disabled {#/if#}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>选择类型(默认1级)</label>
                                        <select name="type" class="form-control" disabled>
                                            <option value="0" {#if $data.type == '0'#} selected {#/if#}>一级导航</option>
                                            <option value="1" {#if $data.type == '1'#} selected {#/if#}>二级导航</option>
                                            <option value="1" {#if $data.type == '2'#} selected {#/if#}>可跳转一级菜单</option>
                                        </select>
                                    </div>
                                </div>
                                {#if $data.type == '1'#}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>父导航</label>
                                        <select name="fid"  class="form-control">
                                            {#foreach from=$fid_arr item=vo#}
                                                <option value="{#$vo.id#}" {#if $data.fid == $vo.id#} selected {#/if#}>{#$vo.title#}</option>
                                            {#/foreach#}
                                        </select>
                                    </div>
                                </div>
                                {#/if#}
                                <div class="col-md-12">
                                    <div class="btn-toolbar list-toolbar">
                                        <button class="btn btn-primary"><i class="fa fa-save"></i> 确认</button>
                                        <a href="#" onclick="history.go(-1)" data-toggle="modal" class="btn btn-danger">返回</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
    {#include file='Public/body_footer.tpl'#}
</div>
{#include file='Public/footer.tpl'#}
