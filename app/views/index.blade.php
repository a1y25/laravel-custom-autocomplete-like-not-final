<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/jquery-ui.js') }}
</head>
<body>

	<div class="container">
		<input type="text" class="search">
		<div class="searchlist">
			<ul>
			</ul>
		</div>
	</div>


	<script>

		$('.search').keyup(function(e){

			$.ajax({
				url: 'products?s='+e.target.value
			}).success(function(data){
				$('.searchlist').show(300);
				$('.searchlist ul').empty();
				$.each(data,function(i, prd){
					$('.searchlist ul').append('<li>'+prd.title+'</li>');
				});

			});

		});

		$('.searchlist').on('click', 'li', function(){
			$('input').val($(this).text());

			$('.searchlist').hide(300);
		});



	</script>
</body>
</html>