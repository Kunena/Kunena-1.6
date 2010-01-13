
/* Javascript file for default Kunena BlueEagle template */

/* Tabs class */
var JTabs = new Class({
	Implements: [Options, Events],

	options : {
		display: 0,
		onActive: function(title, description) {
			description.setStyle('display', 'block');
			title.addClass('open').removeClass('closed');
		},
		onBackground: function(title, description){
			description.setStyle('display', 'none');
			title.addClass('closed').removeClass('open');
		},
		titleSelector: 'dt',
		descriptionSelector: 'dd',
	},

    initialize: function(dlist, options){
		this.setOptions(options);
        this.dlist = document.id(dlist);
        this.titles = this.dlist.getElements(this.options.titleSelector);
        this.descriptions = this.dlist.getElements(this.options.descriptionSelector);
        this.content = new Element('div').inject(this.dlist, 'after').addClass('current');

        for (var i = 0, l = this.titles.length; i < l; i++){
            var title = this.titles[i];
            var description = this.descriptions[i];
            title.setStyle('cursor', 'pointer');
            title.addEvent('click', this.display.bind(this, i));
            description.inject(this.content);
        }

        if ($chk(this.options.display)) this.display(this.options.display);

        if (this.options.initialize) this.options.initialize.call(this);
    },

    hideAllBut: function(but) {
        for (var i = 0, l = this.titles.length; i < l; i++){
            if (i != but) this.fireEvent('onBackground', [this.titles[i], this.descriptions[i]]);
        }
    },

    display: function(i) {
        this.hideAllBut(i);
        this.fireEvent('onActive', [this.titles[i], this.descriptions[i]]);
    }
});

/* Slider functions */

/* Top profile box */
window.addEvent('domready', function() {
	var status = {
		'true': '<span class="close"></span>',
		'false': '<span class="open"></span>'
	};
	var myVerticalSlide = new Fx.Slide('kprofilebox');
	$('kprofilebox_toggle').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.toggle();
	});
	myVerticalSlide.addEvent('complete', function() {
		$('kprofilebox_status').set('html', status[myVerticalSlide.open]);
	});

});

/* Main forum list */
window.addEvent('domready', function() {
	var status = {
		'true': '<span class="close"></span>',
		'false': '<span class="open"></span>'
	};
	var myVerticalSlide = new Fx.Slide('kmainforum');
	$('kmainforum_toggle').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.toggle();
	});
	myVerticalSlide.addEvent('complete', function() {
		$('kmainforum_status').set('html', status[myVerticalSlide.open]);
	});

});

/* Who is online */
window.addEvent('domready', function() {
	var status = {
		'true': '<span class="close"></span>',
		'false': '<span class="open"></span>'
	};
	var myVerticalSlide = new Fx.Slide('whoisonline_tbody');
	$('kwhoisonline_toggle').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.toggle();
	});
	myVerticalSlide.addEvent('complete', function() {
		$('kwhoisonline_status').set('html', status[myVerticalSlide.open]);
	});

});

/* Member stats */
window.addEvent('domready', function() {
	var status = {
		'true': '<span class="close"></span>',
		'false': '<span class="open"></span>'
	};
	var myVerticalSlide = new Fx.Slide('frontstats_tbody');
	$('kstats_toggle').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.toggle();
	});
	myVerticalSlide.addEvent('complete', function() {
		$('kstats_status').set('html', status[myVerticalSlide.open]);
	});

});




