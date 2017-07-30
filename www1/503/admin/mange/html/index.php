<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
		<link rel="stylesheet" href="../css/common.css" />
		<link rel="stylesheet" href="../css/index.css" />
		<script src='../js/jquery.js'></script>
		<script src='../js/index.js'></script>
	</head>
	<body>
		<header>
			<div class="logo"></div>
			<div class='top'>
				<p class='top-l'>
					<span>您好！欢迎进入管理界面</span>
					<span class='gang'>|</span>
					<a href="../login/tuichu.php">[退出]</a>
					<span class='gang'>|</span>
					<a href="">首页</a>
					<span class='gang'>|</span>
					<a href="">会员中心</a>
					<span class='gang'>|</span>
					<a href="search.html">搜索</a>
				</p>
				<div class="top-r">
					<a href="">千医千村牵手活动</a>
					<span class='gang'>|</span>
					<a href="">授权</a>
					<span class='gang'>|</span>
					<a href="">支持项目</a>
					<span class='gang'>|</span>
					<a href="help.html">帮助？</a>
				</div>
			</div>
			<ul class='top-two'>
				<li class=first>首页</li>
				<li>模块</li>
				<li>内容</li>
				<li>用户</li>
				<li>医生资格</li>
			</ul>
		</header>
		<section class=main>
			<div class="left-m">
				<div class='one first'>
					<dl>
						<dt>个人信息<div></div></dt>
						<dd class='bg'><a href="personal.php" target="right">修改个人信息</a></dd>
						<dd class='bg'><a href='xiugai.html' target="right">添加信息</a></dd>
					</dl>
				</div>
				<div class="two">
					<dl>
						<dt>模块列表<div></div></dt>
						<dd class='bg'><a href='a-1.html' target="right">手机门户</a></dd>
						<dd class='bg'><a href='a-2.html' target="right">表单向导</a></dd>
						<dd class='bg'><a href='a-3.html' target="right">新闻心情</a></dd>
						<dd class='bg'><a href='a-4.html' target="right">短消息</a></dd>
						<dd class='bg'><a href='a-5.html' target="right">评论</a></dd>
						<dd class='bg'><a href='a-6.html' target="right">全站搜索</a></dd>
						<dd class='bg'><a href='a-7.html' target="right">数据源</a></dd>
					</dl>
					<dl>
						<dt>模块管理<div></div></dt>
						<dd class='bg'><a href='b-1.html' target="right">模块管理</a></dd>
					</dl>
				</div>
				<div class="three">
					<dl>
						<dt>内容发布管理<div></div></dt>
						<dd class='bg'><a href='c-1.html' target="right">管理内容</a></dd>
						<dd class='bg'><a href='c-2.html' target="right">附件管理</a></dd>
						<dd class='bg'><a href='c-3.html' target="right">专题</a></dd>
						<dd class='bg'><a href='c-4.html' target="right">采集管理</a></dd>
						<dd class='bg'><a href='c-5.html' target="right">评论管理</a></dd>
					</dl>
					<dl>
						<dt>发布管理<div></div></dt>
						<dd class='bg'><a href='d-1.html' target="right">批量更新栏目页</a></dd>
						<dd class='bg'><a href='d-2.html' target="right">批量更新内容页</a></dd>
						<dd class='bg'><a href='d-3.html' target="right">同步到发布点</a></dd>
					</dl>
					<dl>
						<dt>内容相关设置<div></div></dt>
						<dd class='bg'><a href='e-1.html' target="right">管理栏目</a></dd>
						<dd class='bg'><a href='e-2.html' target="right">模型管理</a></dd>
						<dd class='bg'><a href='e-3.html' target="right">类别管理</a></dd>
						<dd class='bg'><a href='e-4.html' target="right">推荐位管理</a></dd>
					</dl>
				</div>
				<div class="four">
					<dl>
						<dt>会员管理<div></div></dt>
						<dd class='bg'><a href='f-1.html' target="right">注册医生</a></dd>
						<dd class='bg'><a href='f-2.html' target="right">注册病人</a></dd>
						<dd class='bg'><a href='f-3.html' target="right">会员模块配置</a></dd>
					</dl>
				</div>
				<div class="five">
					<dl>
						<dt>医生资格<div></div></dt>
						<dd class='bg'><a href='g-1.html' target="right">医生资格证查询</a></dd>
					</dl>
				</div>
			</div>
			
			<div class="right-m">
				<div class="center">
					<div></div>
				</div>
				<!--//面包屑-->
				<div class="crumbs">
					<div class="left-c">
						<span>当前位置  ></span>
						<span id='crumbs'></span>
						<a href="javascript:;">
							<span>后台地图</span>
						</a>
					</div>
					
				</div>
				<iframe src="first.html" width="97%" height="95%" frameborder="0" name='right'></iframe>
			</div>
		</section>
	</body>
</html>
