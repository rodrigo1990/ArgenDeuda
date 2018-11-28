'use strict';

(function() {

var verto;
var cur_call;
var online_visible=false;
var call2Number = null;
var nocon = true;  // no se conecta hasta que se hace click en dial
var autocall = false;

var callbacks = {

    onMessage: function(verto, dialog, msg, data) {
    	
    	console.log("***** onMessage ****"); 
 
        switch (msg) {
	        case $.verto.enum.message.pvtEvent:
	            break;
	        case $.verto.enum.message.info:
	            break;
	        case $.verto.enum.message.display:
	            break;
	        default:
	            break;
	        }
    },

    onDialogState: function(d) {
    	
    	console.log("***** onDialogState ****"); 
      	console.dir(d.state);
    	
        cur_call = d;
	
        switch (d.state) {
	        case $.verto.enum.state.ringing:
	            display("Call From: " + d.cidString());	
	            break;
	        case $.verto.enum.state.trying:
	        case $.verto.enum.state.early:
	             displayCalling();
	             break;
	        case $.verto.enum.state.active:
	            display("Hablando");
	            break;
	        case $.verto.enum.state.hangup:        	
	            display("");
		case $.verto.enum.state.destroy:
	            cur_call = null;
		    displayReady2Call();
	            break;
	        case $.verto.enum.state.held:
	            break;
	        default:
	            display("");
	            break;
        }
    },
    
    onWSLogin: function(v, success) {
    	console.log("***** onWSLogin ****"); 
	cur_call = null;
	if(success && nocon) {
		nocon = false;
		docall();
	} else {
		online(success);
	}

    },
    
    onWSClose: function(v, success) {
    	console.log("***** onWSClose ****"); 

    	online(false);
    },

    onEvent: function(v, e) {
        console.debug("GOT EVENT", e);
    },
};

function online(b){
	online_visible=b;
	if(online_visible) {
		displayReady2Call();
	} else {
		displayNoConnection();
	}
}


function docall() {
    if(verto) {
	cur_call = verto.newCall({
		destination_number: call2Number,
		caller_id_name: "Click2Call",
		useVideo: false,
		useStereo:false,
		user_agent: "click2call"
	});
    } else {
	initVerto();
    }
}

function display(l) {
	console.log(l);
	if( $("#click2call_msgdiv").length ) { 
		$("#click2call_msgdiv").html(l);
	}
}

function displayCalling() {
	$("body").css("overflow-y","hidden");
	$(".callBkground").fadeIn();
	$("#click2call_callbtn").hide();
	$("#click2call_hupbtn").show();
}

function displayReady2Call() {
	$("#click2call_callbtn").show();
	$("#click2call_hupbtn").hide();
}

function displayNoConnection() {
	$("#click2call_callbtn").hide();
	$("#click2call_hupbtn").hide();
}


function initVerto() {
    if(verto != null) {
	return;
    }

    var strUser = $('#click2call_user').val();
    var strDomain = $('#click2call_domain').val();
    var strPassword = $('#click2call_password').val();
    call2Number = $('#click2call_number').val();
    if(strUser == null || strDomain == null || strPassword == null || call2Number == null) {
    	alert("Debe configuarar Usuario,Password,Dominio y numero de destino");
    	return;
    }

    var strHost = $('#click2call_host').val() || "ws://webrtc.anura.com.ar:9083";
    
    verto = new $.verto({
        login: strUser+"@"+strDomain,
        passwd: strPassword,
        socketUrl: strHost,
        tag: "webcam",
        iceServers: false // stun
    },callbacks);

}

function init() {
	
    console.log("**** init **** ");

    displayNoConnection();

    if(!isWebRTCSupported()) {
	$("#click2call").hide();
	console.log("El browser no soporta WebRTC");
	return;
    }

    nocon =  !($('#click2call_nocon').val() != null);
    if(nocon) {
    	online(true);
    } else {
	initVerto();
    }
    
    $("#click2call_callbtn").click(function() {
	displayCalling();
	if(nocon) {
		initVerto();
	} else {
        	docall();
	}
        return false;
    });
    
    $("#click2call_hupbtn").click(function() {

    	$(".callBkground").fadeOut();
    	$("body").css("overflow-y","scroll");
    	if(cur_call != null) {
	        verto.hangup();
	        cur_call = null;
    	}
    	return false;
    });

    // autocall
    autocall = $('#click2call_autocall').val() != null;
    if(autocall) {
	displayCalling();
        if(nocon) {
                initVerto();
        } else {
                docall();
        }
    }


}

function isWebRTCSupported() {
	return navigator.getUserMedia || navigator.mozGetUserMedia || navigator.webkitGetUserMedia || navigator.msGetUserMedia;
}


$(document).ready(function() {
    init();
});

})(); // end wrap f