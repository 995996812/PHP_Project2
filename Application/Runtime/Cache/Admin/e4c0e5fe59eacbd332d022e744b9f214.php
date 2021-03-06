<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/Application/Admin/Public/css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/Application/Admin/Public/admin.php?c=goods&a=showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="/index.php/Admin/Goods/update/goods_id/2" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" value="<?php echo ($data["goods_name"]); ?>" /></td>
                </tr>
                <tr>
                    <td>商品分类</td>
                    <td>
                        <select name="goods_category_id">
                            <option value="0">请选择</option>
                            <?php if(is_array($category)): foreach($category as $key=>$vo): if($data['goods_category_id'] == $vo['cat_id']): ?><option value="<?php echo ($vo["cat_id"]); ?>" selected="selected"><?php echo ($vo["cat_name"]); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo ($vo["cat_id"]); ?>"><?php echo ($vo["cat_name"]); ?></option><?php endif; endforeach; endif; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" value="<?php echo ($data["goods_price"]); ?>" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="goods_image" value="/Application/Admin/Public/img/2013-12-33.jpg" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="f_goods_introduce"><?php echo ($data["goods_introduce"]); ?></textarea>
                    </td>
                </tr>
                <input type="hidden" name="goods_id" value="<?php echo ($data["goods_id"]); ?>" />
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>