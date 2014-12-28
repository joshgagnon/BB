var booked_dates = [];

$(document).ready(function(){
	var manage_mode = window.location.href.indexOf('manage') > -1;
	$('.calendar').datepicker({
		format: 'dd/mm/yyyy',
		beforeShowDay: function(date){
			var date_str = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
		
			if(booked_dates.indexOf(date_str) !== -1){
				if(manage_mode){
					return 'booked';
				}
				return 'booked disabled';
			}
			return '';
		}
	})
	$('.calendar').on('changeDate', function(e){
		$('.calendar .active').removeClass('active')
	})
	.find('.table-condensed')
	.removeClass('table-condensed')
	.addClass('table');

	$.get('dates')
		.then(function(dates){
			for(var i =0;i<dates.length;i++){
				booked_dates.push(dates[i].date_string);
			}
			$('.calendar').datepicker('update');
		});

	if(manage_mode){
		 $('.calendar').on('changeDate', function(e){
		 	var date = e.date;
		 	var date_str = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
		 	if(booked_dates.indexOf(date_str) === -1){
		 		booked_dates.push(date_str);
		 		$.post('/dates', {book: [date_str]});
		 	}
		 	else{
		 		booked_dates.splice(booked_dates.indexOf(date_str) ,1);
		 		$.post('/dates', {unbook: [date_str]});
		 	}

        	$('.calendar').datepicker('update');
    	});
	}

})