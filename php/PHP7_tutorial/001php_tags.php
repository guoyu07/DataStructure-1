<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/001css.css">
	<title>PHP 标记官方简明教程； &lt;?php 和 ?&gt; 与 &lt;?php 的使用场景！</title>
</head>
<body>
	<div class="container">
		<div class="tutorial">
			<h3>PHP 标记官方简明教程； &lt;?php 和 ?&gt; 与 &lt;?php 的使用场景！</h3>
			<a href="https://secure.php.net/manual/zh/language.basic-syntax.phptags.php">
				<span>https://secure.php.net/manual/zh/language.basic-syntax.phptags.php</span>
			</a>
			<div class="text">
				<p>
					PHP 标记 ¶ <br>

					当解析一个文件时，PHP 会寻找起始和结束标记，也就是 &lt;?php 和 ?&gt;,<br>
					这告诉 PHP 开始和停止解析二者之间的代码。<br>
					此种解析方式使得 PHP 可以被嵌入到各种不同的文档中去，<br>
					而任何起始和结束标记之外的部分都会被 PHP 解析器忽略。<br>

					PHP 也允许使用短标记 &lt;? 和 ?&gt;，但不鼓励使用。<br>
					只有通过激活 php.ini 中的 short_open_tag 配置指令<br>
					或者在编译 PHP 时使用了配置选项 --enable-short-tags 时才能使用短标记。<br>

					如果文件内容是纯 PHP 代码，最好在文件末尾删除 PHP 结束标记。<br>
					这可以避免在 PHP 结束标记之后万一意外加入了空格或者换行符，<br>
					会导致 PHP 开始输出这些空白，而脚本中此时并无输出的意图。<br>
				</p>
			</div>
		</div>
		<div class="space">
			<hr>
			<p>&nbsp;</p>
			<hr>
		</div>
		<div class="code">
			<code>
				&lt;?php <br>
				echo "Hello world"; <br>

				// ... more code <br>

				echo "Last statement"; <br>

				// 脚本至此结束，并无 PHP 结束标记 <br>
			</code>
		</div>
	</div>
</body>
</html>
<?php
echo "Hello PHP7!";