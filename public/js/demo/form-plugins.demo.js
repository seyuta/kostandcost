/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.3.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.3/admin/
*/

// IE8 browser support
if (!Array.prototype.indexOf) {
	Array.prototype.indexOf = function(elt /*, from*/) {
    	var len = this.length >>> 0;
    	var from = Number(arguments[1]) || 0;
    	from = (from < 0) ? Math.ceil(from) : Math.floor(from);
    	if (from < 0)
      		from += len;

    	for (; from < len; from++) {
      		if (from in this && this[from] === elt)
        		return from;
    	}
    	return -1;
	};
}
if(typeof String.prototype.trim !== 'function') {
	String.prototype.trim = function() {
		return this.replace(/^\s+|\s+$/g, ''); 
	}
}


var handleDatepicker = function() {
	$('#datepicker-default').datepicker({
		todayHighlight: true
	});
	$('#datepicker-inline').datepicker({
		todayHighlight: true
	});
	$('.input-daterange').datepicker({
		todayHighlight: true
	});
	$('#datepicker-disabled-past').datepicker({
		todayHighlight: true
	});
	$('#datepicker-autoClose1').datepicker({
		todayHighlight: true,
		autoclose: true,
		format: 'yyyy-mm-dd'
	});
	$('#datepicker-autoClose2').datepicker({
		todayHighlight: true,
		autoclose: true,
		format: 'yyyy-mm-dd'
	});
};

var handleFormPasswordIndicator = function() {
	"use strict";
	$('#password-indicator-default').passwordStrength();
	$('#password-indicator-visible').passwordStrength({targetDiv: '#passwordStrengthDiv2'});
};

var handleJqueryAutocomplete = function() {
	var availableTags = [
		'ActionScript',
		'AppleScript',
		'Asp',
		'BASIC',
		'C',
		'C++',
		'Clojure',
		'COBOL',
		'ColdFusion',
		'Erlang',
		'Fortran',
		'Groovy',
		'Haskell',
		'Java',
		'JavaScript',
		'Lisp',
		'Perl',
		'PHP',
		'Python',
		'Ruby',
		'Scala',
		'Scheme'
	];
	$('#jquery-autocomplete').autocomplete({
		source: availableTags
	});
};

var handleBootstrapCombobox = function () {
	$('.combobox').combobox();
};

var handleSelectpicker = function() {
	$('.selectpicker').selectpicker('render');
};

var handleSelect2 = function() {
	$(".default-select2").select2({
		dropdownParent: $("#modal-dialog")
	});
	$(".default1-select2").select2();
	$(".multiple-select2").select2({
		placeholder: "Select one or more",
		dropdownParent: $("#modal-dialog")
	});
};

var FormPlugins = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleDatepicker();
			handleFormPasswordIndicator();
			handleJqueryAutocomplete();
			handleBootstrapCombobox();
			handleSelectpicker();
			handleSelect2();
		}
	};
}();