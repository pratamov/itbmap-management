function row_fluid(label, description, image_src){
	var dom = '<li class="span4 thumbfix">'
		+'<div class="thumbnail">'
		+'<img data-src="'+image_src+'" alt="">'
		+'<div class="caption">'
		+'<h5>'+label+'</h5>'
		+'<p>'+description+'</p>'
		+'<p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>'
		+'</div>'
		+'</div>'
		+'</li>';
	return dom;
}

function get_ip() {
    if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
    else xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

    xmlhttp.open("GET","http://api.hostip.info/get_html.php",false);
    xmlhttp.send();

    hostipInfo = xmlhttp.responseText.split("\n");

    for (i=0; hostipInfo.length >= i; i++) {
        ipAddress = hostipInfo[i].split(":");
        if ( ipAddress[0] == "IP" ) return ipAddress[1];
    }

    return false;
}
