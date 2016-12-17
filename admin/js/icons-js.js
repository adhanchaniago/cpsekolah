

    $(function() {
		$('.icon_code').each(function() {
			$(this).val('').next('.icon_addon').html('');
		});
		$('.icon_code').each(function() {
		});
		$('.icon_list li').on('click',function(e) {
			e.preventDefault();
			var $this = $(this);
			var $code = $this.children('span').length ? $(this).children('span').attr('class'):$(this).children('i').attr('class');
			window.opener.document.getElementById('input').value='<i class="'+$code+'"></i>';
			window.opener.document.getElementById('input2').value='<i class="'+$code+'"></i>';
			window.close();

		});
	})
