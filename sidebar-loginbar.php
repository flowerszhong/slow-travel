
<?php if(is_user_logged_in()): ?>

<div id="wp-custom-admin-bar-my-account" class="menupop with-avatar">
<a href="http://10.1.43.52:1988/slowtravel/members/flowerszhong/profile/edit/" title="我的帐户">
您好，
<?php global $current_user;
      get_currentuserinfo();

      echo $current_user->user_login;
?>
	</a>

	
</div>

<?php else: ?>
<div class="">
	<a class="btn btn-signup" href="">
		登录
	</a>

	<a class="btn btn-register" href="">
		注册
	</a>

	<a class="social-btn btn-qq" href="">
		QQ登录
	</a>

	<a class="social-btn btn-weibo" href="">
		微博登录
	</a>

	<a class="social-btn btn-renren" href="">
		人人网登录
	</a>

	<a class="btn-more" href="">
		更多
	</a>

</div>
<?php endif;?>