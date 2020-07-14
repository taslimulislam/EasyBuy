$(document).ready(function (e) {
	$("#uploadForm").on('submit', (function (e) {
		e.preventDefault();
		$.ajax({
			url: "http://localhost/sms/views/imageUpload/upload.php",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function (data) {
				//alert(data);
				$("#targetLayer").html(data);
				$imgSrc = $("#img").attr("src");
				$("#proPic").val($imgSrc);

				$("#img").attr("src", "../../resources/" + $imgSrc);
				$("#msgSuccess").html("Uploaded successfully");
				//$("#msgSuccess").attr("style", "display:block");
				//alert($img);
			},
			error: function () {}
		});
	}));
});