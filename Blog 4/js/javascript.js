function init() {//On load function
	setSize();
	setHandlers();
	phpInit();
}

function setSize() {//Set size function
	
}

function setHandlers(){//Set handlers function
	/* Header */
	$("#header .glyphicon").fastClick(function(){
		if($("#header #h_nav").attr("data-expand") == "true"){//Collapse menu
			$("#header #h_nav").attr("data-expand", "false");
			$("#header .glyphicon").removeClass('current');
		} else if($("#header #h_nav").attr("data-expand") == "false"){//Expand Menu
			$("#header #h_nav").attr("data-expand", "true");
			$("#header .glyphicon").addClass('current');
		}
	});
}