/**
 *
 * @author Raphael da Silva
 *
 */
;(function($){

	var openModal = function(){

		$('#project-info').on('click', function(){

			$('.modal').modal();

		});

	};

	var init = function(){

		openModal();

	};

	$(init);

})($);