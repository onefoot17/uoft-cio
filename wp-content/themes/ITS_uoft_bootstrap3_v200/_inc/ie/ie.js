/***************************************************
  Message for outdated browser users : IE8 -
****************************************************/
jQuery(function($) {
	$("#outdated-ie").append('<div class="container"><p>Did you know that your Internet Explorer is out of date? To get the best possible experience, upgrade to a newer version.</p><div><a class="btn" href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">Check here for latest IE versions</a></div></div>');
	$("#outdated-ie").addClass('oudated-ie-show');
	$("#outdated-ie").slideDown();
	$("#outdated-ie .close").click(function () {
	$("#outdated-ie").slideUp();
	});
});
