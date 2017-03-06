$(document).ready(function() {
	var changeSides = function() {
		$('.ui.shape')
		.eq(0).shape('flip over').end()
		.eq(1).shape('flip over').end()
		.eq(2).shape('flip back').end()
		.eq(3).shape('flip back').end();
	},
	validationRules = {
		firstName: {
			identifier  : 'email',
			rules: [
				{
					type   : 'empty',
					prompt : 'Please enter an e-mail'
				},
				{
					type   : 'email',
					prompt : 'Please enter a valid e-mail'
				}
			]
		}
	};
	$('.ui.dropdown').dropdown({
		on: 'hover'
	});
	$('.ui.form').form(validationRules, {
		on: 'blur'
	});
	$('.masthead .information').transition('scale in', 1000);
	
	$('.ui.card').popup();
	$('.ui.checkbox').checkbox();
	$('.masthead').visibility({
		once: false,
		onBottomPassed: function() {
			$('.fixed.menu').transition('fade in');
		},
		onBottomPassedReverse: function() {
			$('.fixed.menu').transition('fade out');
		}
	});
	$('.ui.sidebar').sidebar('attach events', '.toc.item');
	$('.ui.checkbox').checkbox();
	$('.ui.list').list();

	setInterval(changeSides, 3000);
});
