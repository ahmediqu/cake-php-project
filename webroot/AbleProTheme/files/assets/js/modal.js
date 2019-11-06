  'use strict';
$(document).ready(function () {
	//success message
	document.querySelector('.alert-success-msg').onclick = function(){
		swal("Good job!", "You clicked the button!", "success");
	};

	//Alert confirm
	document.querySelector('.alert-confirm').onclick = function(ev){
		swal({
					title: "Are you sure?",
					text: "",
					type: "warning",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Yes, delete it!",
					closeOnConfirm: false
				},
				function (res) {
				    if (res)
				    {
				        swal("Deleted!", "Your data has been deleted.", "success");
				    }
					
				});
	};

	$(document).on('show.bs.modal', '.modal', function (event) {
	        //ClearAddBox();
			var zIndex = 1040 + (10 * $('.modal:visible').length);
			$(this).css('z-index', zIndex);
			setTimeout(function() {
				$('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
			}, 0);
		});
	});
  