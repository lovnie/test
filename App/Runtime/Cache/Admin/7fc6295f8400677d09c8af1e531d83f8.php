<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<!------------ 搜索的表单 ------------>
<form>
<input type="hidden" name="p" value="1" />
商品名称：<input type="text" name="goods_name" value="<?php echo I('get.goods_name'); ?>" /><br />
价　　格：<input type="text" name="start_price" value="<?php echo I('get.start_price'); ?>" />-<input type="text" name="end_price" value="<?php echo I('get.end_price'); ?>" /><br />

上否上架：<input type="radio" name="is_on_sale" value="-1" <?php if(I('get.is_on_sale', -1) == -1) echo 'checked="checked"'; ?> />全部
		<input type="radio" name="is_on_sale" value="1" <?php if(I('get.is_on_sale', -1) == 1) echo 'checked="checked"'; ?> />是
		<input type="radio" name="is_on_sale" value="0" <?php if(I('get.is_on_sale', -1) == 0) echo 'checked="checked"'; ?> />否<br />
		
是否删除：<input type="radio" name="is_delete" value="-1" <?php if(I('get.is_delete', -1) == -1) echo 'checked="checked"'; ?> />全部
		<input type="radio" name="is_delete" value="1" <?php if(I('get.is_delete', -1) == 1) echo 'checked="checked"'; ?> />是
		<input type="radio" name="is_delete" value="0" <?php if(I('get.is_delete', -1) == 0) echo 'checked="checked"'; ?> />否<br />

<input type="submit" value="搜索" /><br /><br />
		
排序方式：<input onclick="parentNode.submit();" type="radio" name="odby" value="id_asc" <?php if(I('get.odby', 'id_asc') == 'id_asc') echo 'checked="checked"'; ?> />根据添加时间升序
		<input onclick="parentNode.submit();" type="radio" name="odby" value="id_desc" <?php if(I('get.odby') == 'id_desc') echo 'checked="checked"'; ?> />根据添加时间降序
		<input onclick="parentNode.submit();" type="radio" name="odby" value="price_asc" <?php if(I('get.odby') == 'price_asc') echo 'checked="checked"'; ?> />根据价格升序
		<input onclick="parentNode.submit();" type="radio" name="odby" value="price_desc" <?php if(I('get.odby') == 'price_desc') echo 'checked="checked"'; ?> />根据价格降序<br />
</form>
<br />
<br />
<table width="100%" border="1" cellpadding="5" cellspacing="5">
	<tr>
		<th>id</th>
		<th>添加时间</th>
		<th>商品名称</th>
		<th>LOGO</th>
		<th>价格</th>
		<th>描述</th>
		<th>是否上架</th>
		<th>是否删除</th>
		<th>操作</th>
	</tr>
	<?php foreach ($data as $k => $v): ?>
	<tr>
		<td><?php echo ($v["id"]); ?></td>
		<td><?php echo date('Y-m-d H:i:s', $v['addtime']); ?></td>
		<td><?php echo ($v["goods_name"]); ?></td>
		<td><img src="/zend/tptest/Public/Uploads/<?php echo ($v["sm_logo"]); ?>" /></td>
		<td><?php echo ($v["price"]); ?></td>
		<td><?php echo ($v["goods_desc"]); ?></td>
		<td><?php echo $v['is_on_sale'] == 1 ? '上架' : '下架'; ?></td>
		<td><?php echo $v['is_delete'] == 1 ? '已删除' : '未删除'; ?></td>
		<td>修改 删除</td>
	</tr>
	<?php endforeach; ?>
	<tr><td colspan="9"><?php echo ($page); ?></td></tr>
</table>
</body>
</html>