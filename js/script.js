
function menu()
{
	if(window.innerWidth < 1200){
				
		document.getElementById("menu").classList.toggle("active");
		document.getElementById("head").classList.toggle("now");
	}
}


function link(lnk)
{
	window.location.href = lnk;
}

function newtab(url)
{
	window.open(url, '_blank').focus();
}