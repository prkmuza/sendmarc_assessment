$("#Explore").click(function(){
    document.getElementById("Explore").style.borderLeft = "solid #6495CB";
	document.getElementById("ExploreIcon").style.opacity = "1";
	document.getElementById("Explore").style.color = "#6495CB";
	document.getElementById("Days").style.borderLeft = "none";
	document.getElementById("DaysIcon").style.opacity = "0.1";
	document.getElementById("Days").style.color = "#CBCBCB";
	document.getElementById("Profile").style.borderLeft = "none";
	document.getElementById("ProfileIcon").style.opacity = "0.1";
	document.getElementById("Profile").style.color = "#CBCBCB";
	document.getElementById("Tray").style.borderLeft = "none";
	document.getElementById("TrayIcon").style.opacity = "0.1";
	document.getElementById("Tray").style.color = "#CBCBCB";
	document.getElementById("TrayedBy").style.borderLeft = "none";
	document.getElementById("TrayedByIcon").style.opacity = "0.1";
	document.getElementById("TrayedBy").style.color = "#CBCBCB";
	
	if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}else {
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function (){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('MainContent').innerHTML =xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET', '../MainContent/Explore.php', true);
		xmlhttp.send();
	
});

$("#Days").click(function(){
    document.getElementById("Explore").style.borderLeft = "none";
	document.getElementById("ExploreIcon").style.opacity = "0.1";
	document.getElementById("Explore").style.color = "#CBCBCB";
	document.getElementById("Days").style.borderLeft = "solid #6495CB";
	document.getElementById("DaysIcon").style.opacity = "1";
	document.getElementById("Days").style.color = "6495CB";
	document.getElementById("Profile").style.borderLeft = "none";
	document.getElementById("ProfileIcon").style.opacity = "0.1";
	document.getElementById("Profile").style.color = "#CBCBCB";
	document.getElementById("Tray").style.borderLeft = "none";
	document.getElementById("TrayIcon").style.opacity = "0.1";
	document.getElementById("Tray").style.color = "#CBCBCB";
	document.getElementById("TrayedBy").style.borderLeft = "none";
	document.getElementById("TrayedByIcon").style.opacity = "0.1";
	document.getElementById("TrayedBy").style.color = "#CBCBCB";
	
	if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}else {
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function (){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('MainContent').innerHTML =xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET', '../MainContent/Days.php', true);
		xmlhttp.send();
		location.reload();
	
});

$("#Profile").click(function(){
    document.getElementById("Explore").style.borderLeft = "none";
	document.getElementById("ExploreIcon").style.opacity = "0.1";
	document.getElementById("Explore").style.color = "#CBCBCB";
	document.getElementById("Days").style.borderLeft = "none";
	document.getElementById("DaysIcon").style.opacity = "0.1";
	document.getElementById("Days").style.color = "#CBCBCB";
	document.getElementById("Profile").style.borderLeft = "solid #6495CB";
	document.getElementById("ProfileIcon").style.opacity = "1";
	document.getElementById("Profile").style.color = "#6495CB";
	document.getElementById("Tray").style.borderLeft = "none";
	document.getElementById("TrayIcon").style.opacity = "0.1";
	document.getElementById("Tray").style.color = "#CBCBCB";
	document.getElementById("TrayedBy").style.borderLeft = "none";
	document.getElementById("TrayedByIcon").style.opacity = "0.1";
	document.getElementById("TrayedBy").style.color = "#CBCBCB";
	
	if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}else {
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function (){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('MainContent').innerHTML =xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET', '../MainContent/Profile.php', true);
		xmlhttp.send();
});

$("#Tray").click(function(){
    document.getElementById("Explore").style.borderLeft = "none";
	document.getElementById("ExploreIcon").style.opacity = "0.1";
	document.getElementById("Explore").style.color = "#CBCBCB";
	document.getElementById("Days").style.borderLeft = "none";
	document.getElementById("DaysIcon").style.opacity = "0.1";
	document.getElementById("Days").style.color = "#CBCBCB";
	document.getElementById("Profile").style.borderLeft = "none";
	document.getElementById("ProfileIcon").style.opacity = "0.1";
	document.getElementById("Profile").style.color = "#CBCBCB";
	document.getElementById("Tray").style.borderLeft = "solid #6495CB";
	document.getElementById("TrayIcon").style.opacity = "1";
	document.getElementById("Tray").style.color = "#6495CB";
	document.getElementById("TrayedBy").style.borderLeft = "none";
	document.getElementById("TrayedByIcon").style.opacity = "0.1";
	document.getElementById("TrayedBy").style.color = "#CBCBCB";
	
	if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}else {
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function (){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('MainContent').innerHTML =xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET', '../MainContent/Tray.php', true);
		xmlhttp.send();
});

$("#TrayedBy").click(function(){
    document.getElementById("Explore").style.borderLeft = "none";
	document.getElementById("ExploreIcon").style.opacity = "0.1";
	document.getElementById("Explore").style.color = "#CBCBCB";
	document.getElementById("Days").style.borderLeft = "none";
	document.getElementById("DaysIcon").style.opacity = "0.1";
	document.getElementById("Days").style.color = "#CBCBCB";
	document.getElementById("Profile").style.borderLeft = "none";
	document.getElementById("ProfileIcon").style.opacity = "0.1";
	document.getElementById("Profile").style.color = "#CBCBCB";
	document.getElementById("Tray").style.borderLeft = "none";
	document.getElementById("TrayIcon").style.opacity = "0.1";
	document.getElementById("Tray").style.color = "#CBCBCB";
	document.getElementById("TrayedBy").style.borderLeft = "solid #6495CB";
	document.getElementById("TrayedByIcon").style.opacity = "1";
	document.getElementById("TrayedBy").style.color = "#6495CB";
	
	if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}else {
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function (){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('MainContent').innerHTML =xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET', '../MainContent/TrayedBy.php', true);
		xmlhttp.send();
	
});