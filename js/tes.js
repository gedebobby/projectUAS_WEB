$(document).ready(function() {

	$("#search-barang").on('keyup', function() {

		//$('#tabel').load('barangbangke.php?keyword=' + $('#search-barang').val());
		var text = $(this).val();
		$.ajax({
			//url:"data-barang.php",
			url:"data/databarang.php",
			method:"post",
			data:{barang:text},
			success:function(response){
				$('#tabel').html(response);
			}


		});

	});

	$("#search-suplier").on('keyup', function() {

		var text = $(this).val();
		$.ajax({
			url:"data/datasuplier.php",
			method:"post",
			data:{suplier:text},
			success:function(response){
				$('#tabel-suplier').html(response);
			}


		});

	});




});