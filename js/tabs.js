(function($) {
$(function() {
	$('ul.tabs').delegate('li:not(.current)', 'click', function() {
		$(this).addClass('current').siblings().removeClass('current')
			.parents('div.section').find('div.box').hide().eq($(this).index()).fadeIn(150);
	})
})
})(jQuery)
	// Печать этого документа
var browser_name = navigator.appName;
function printit(){
	if (browser_name == "Netscape") {
	    window.print();
	} else {
	    var WebBrowser = '<object id="WebBrowser1" width=0 height=0 classid="clsid:8856F961-340A-11D0-A96B-00C04FD705A2"></object>';
	    document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
	    WebBrowser1.ExecWB(6, 2);}
}
