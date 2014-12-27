var booked_dates = [
	'25-12-2014',
	'26-12-2014',
	'27-12-2014'
	
]


$(document).ready(function(){
	$('.calendar').datepicker({
		format: 'dd/mm/yyyy',
		beforeShowDay: function(date){
			console.log(date)

			var str = date.getDate()+'-'+(date.getMonth()+1)+'-'+date.getFullYear();
		
			if(booked_dates.indexOf(str) !== -1){
				return 'booked disabled'
			}
			return '';
		}
	})
	.find('.table-condensed')
	.removeClass('table-condensed')
	.addClass('table')

})