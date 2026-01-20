window.onload = () => { console.log("Loaded!"); }


document.querySelectorAll("path").forEach(path => {
	path.onmouseenter = function() {
		path.fill = "red";
	}
	path.onmouseleave = function() {
		path.fill = "initial";
	}
});