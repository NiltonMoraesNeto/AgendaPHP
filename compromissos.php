<?php require_once("header.php");?>


<script>

	$(document).ready(function() {

	var calendar = $('#calendar').fullCalendar({
			
			editable: true,
			eventLimit: true,
			events: "events.php",
            selectable: true,
selectHelper: true,
select: function(start, end, allDay) {
 var title = prompt('Compromisso Título:');
 var startDia = prompt('Dia Início');
 var startMes = prompt('Mês Início - Digitar entre 01 à 12');
 var startAno = prompt('Ano Início');
 var startHora = prompt('Hora Início');
 var startMinuto = prompt('Minuto Início');
 var startSegundo = prompt('Segundo Início');
 var endDia = prompt('Dia Fim');
 var endMes = prompt('Mês Fim - Digitar entre 01 à 12');
 var endAno = prompt('Ano Fim');
 var endHora = prompt('Hora Fim');
 var endMinuto = prompt('Minuto Fim');
 var endSegundo = prompt('Segundo Fim');
 //var start = prompt('Data e Hora Início - Ex: 01/01/2016 10:00:00');
//var end = prompt('Data e Hora Fim - Ex: 01/01/2016 10:00:00');//2016/07/23 18:26:00 formato da data
 if (title) {
 start = (startAno + "/" + startMes + "/" + startDia + "/ " + startHora + ":" + startMinuto + ":" + startSegundo);
 //start = (start);
 end = (endAno + "/" + endMes + "/" + endDia + "/ " + endHora + ":" + endMinuto + ":" + endSegundo);
 //end = (end);
 //start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
 //end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
 $.ajax({
 url: 'add_events.php',
 data: 'title='+ title+'&start='+ start +'&end='+ end ,
 type: "POST",
 success: function(json) {
 alert('OK');
 }
 });
 calendar.fullCalendar('renderEvent',
 {
 title: title,
 start: start,
 end: end,
 allDay: allDay
 },
 true // make the event "stick"
 );
 }
 calendar.fullCalendar('unselect');
}			
			
		});
		
	});

</script>

<script>

	$(document).ready(function() {
		var initialLangCode = 'Português';

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agenda2Week,agenda2Day'
			},
			defaultDate: '2016-06-12',
			lang: initialLangCode,
			buttonIcons: false, // show the prev/next text
			weekNumbers: true,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			
		});

		// build the language selector's options
		$.each($.fullCalendar.langs, function(langCode) {
			$('#lang-selector').append(
				$('<option/>')
					.attr('value', langCode)
					.prop('selected', langCode == initialLangCode)
					.text(langCode)
			);
		});

		// when the selected option changes, dynamically change the calendar option
		$('#lang-selector').on('change', function() {
			if (this.value) {
				$('#calendar').fullCalendar('option', 'lang', this.value);
			}
		});
	});

</script>

<div id='top'>

		Idioma Calendário:
		<select id='lang-selector'></select>

	</div>
<body>

	<div id='calendar'></div>

</body>


<?php require_once("footer.php");?>