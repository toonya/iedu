<div class="sidebar-contact hidden-sm hidden-xs">
	<div class="item-list">
		<?php if( get_option( 'qr-code' ) ):; ?>
		<div class="item wx">
			<a href="#"></a>
			<div class="pop">
				<h3>扫描咨询</h3>
				<div class="qrcode">
					<img src="<?php echo esc_attr( get_option( 'qr-code' ) ); ?>" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	    <?php endif; ?>
	    <?php if( get_option( 'qq-contact' ) ):; ?>
		<div class="item qq">
			<a href="#"></a>
			<div class="pop">
				<?php  
				$qq_server = get_option( 'qq-contact' );
				if( $qq_server ){
					$qq_server = preg_split ("/\s+/", $qq_server);

					foreach ($qq_server as $key => $value) {
						//echo '<a href="tencent://message/?uin='.esc_attr( $value ).'&Site=qq&Menu=yes">QQ客服'.($key+1).'</a>';
						//echo '<a href="http://wpa.qq.com/msgrd?v=3&uin='.esc_attr( $value ).'&site=qq&menu=yes">QQ客服'.($key+1).'</a>';
						echo '<a href="tencent://message/?Menu=yes&uin='.esc_attr( $value ).'&Site=uedcss&Service=300&sigT=45a1e5847943b64c6ff3990f8a9e644d2b31356cb0b4ac6b24663a3c8dd0f8aa12a595b1714f9d45">QQ客服'.($key+1).'</a>';
						//echo '<a href="http://wpa.qq.com/msgrd?v=3&uin=330792203&site=qq&menu=yes">QQ客服'.($key+1).'</a>';
					}
				}

				?>
			</div>
		</div>
		<?php endif; ?>
		<?php if( get_option( 'phone-number' ) ):; ?>
		<div class="item phone">
			<a href="#"></a>
			<div class="pop">
				<a href="tel:<?php echo esc_attr( get_option( 'phone-number' ) ); ?>"><?php echo esc_html( get_option( 'phone-number' ) ); ?></a>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>