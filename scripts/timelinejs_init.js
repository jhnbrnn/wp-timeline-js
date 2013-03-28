(function($) {

	var timelineDeets = {
		"timeline": {
			"headline": "This timeline",
			"type": "default",
			"text": "<p>Intro body text!</p>",
			"startDate": "2000",
			"date": [
				{
					"startDate": "2000,01,01",
					"endDate": "2000,01,02",
					"headline":"Y2K",
					"text":"The most anticlimactic!"
				}
			]
		}
	};

	$.ajax({
		url: '/api/get_post/?post_id=1&custom_fields=wpaut',
		dataType: "json",
		success: function(data, textStatus, jqXHR) {
			//console.log(data.post);
			timelineDeets.timeline.date.push({
				"startDate": "2001,01,01",
				"headline": data.post.title,
				"text": data.post.excerpt,
				"asset": {
					"media": data.post.thumbnail,
				}
			});
			createStoryJS({
				type: 'timeline',
				width: '100%',
				height: '600',
				source: timelineDeets,
				embed_id: 'my-storyline',
				debug: true
			});
		}
	});

	$(document).ready(function() {

	});

})(jQuery);