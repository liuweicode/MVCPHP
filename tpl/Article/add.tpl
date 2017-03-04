{#include file='Public/header.tpl'#}
{#include file='Public/body_header.tpl'#}
<div class="main-content">
    <div class="row">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane active in" id="home">
                <form action="?do=Article&cmd=addcl" name="form" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <input name="car_id" type="hidden" value="" class="form-control">
                        <div class="form-group">
                            <label>标题</label>
                            <input name="article_title" type="text" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>首页文章位&首页轮播位</label><br><br>
                            <label><input type="radio" value="1" checked name = 'show_location'>首页文章位</label>&nbsp;&nbsp;&nbsp;
                            <label><input type="radio" value="2" name = 'show_location'>首页轮播位</label>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label>封面 &nbsp;&nbsp;&nbsp;(图片大小为1242*389)</label>

                            <input name="cover" type="file" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>文章图 &nbsp;&nbsp;&nbsp;(图片大小为1242*931)</label>

                            <input name="covers" type="file" value="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label>内容</label>
                            <script id="container" name="article_content" type="text/plain" value="" style="width:900px;height:300px"></script>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 30px;">
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

<script type="text/javascript" src="./assets/js/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="./assets/js/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>