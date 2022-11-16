<?php
include 'koneksi.php';
?>
 
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	    <link rel="icon" href="#">
		<title>Ajax Live Search - www.dewankomputer.com</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<nav class="navbar navbar-dark bg-primary">
		  <a class="navbar-brand" href="index.php" style="color: #fff;">
		    Dewan Komputer
		  </a>
		</nav>

		<div class="container">
			<h2 align="center" style="margin: 30px;">Live Search Engine</h2>
	        <div class="row mb-3">
			    <div class="col-sm-3">
			        <div class="form-group form-inline">
			            <label>Jurusan</label>
			            <select name="s_jurusan" id="s_jurusan" class="form-control">
			                <option value=""></option>
			                <option value="Sistem Informasi">Sistem Informasi</option>
			                <option value="Teknik Informatika">Teknik Informatika</option>
			            </select>
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group form-inline">
			            <label>Keyword</label>
			            <input type="text" name="s_keyword" id="s_keyword" class="form-control">
			        </div>
			    </div>
			</div>
			<hr>
			<div class="data" id="data"></div>
	    </div>
	    <script src="js/jquery.min.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				load_data();
				function load_data(jurusan, keyword, page)
				{
					$.ajax({
						method:"POST",
						url:"data.php",
						data: {jurusan: jurusan, keyword:keyword, page:page},
						success:function(hasil)
						{
							$('.data').html(hasil);
							$('#data').html(hasil);
						}
					});
			 	}
			 	$(document).on('click', '.halaman', function(){
	            	var page = $(this).attr("id");
	            	var jurusan = $("#s_jurusan").val();
		    		var keyword = $("#s_keyword").val();
					load_data(jurusan, keyword, page);
	        	});
				$('#s_keyword').keyup(function(){
					var page = $(this).attr("id");
					var jurusan = $("#s_jurusan").val();
		    		var keyword = $("#s_keyword").val();
					load_data(jurusan, keyword, page);
				});
				$('#s_jurusan').change(function(){
					var page = $(this).attr("id");
					var jurusan = $("#s_jurusan").val();
		    		var keyword = $("#s_keyword").val();
					load_data(jurusan, keyword, page);
				});
			});
		</script>
	</body>
</html>