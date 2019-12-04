// This will allow us to use 100vh with mobile devices
function fixHeight () {
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
}
window.addEventListener('resize', fixHeight);


function $ (ele) {
	return document.querySelector(ele);
}

try {
	$('#aboutUsButton').addEventListener('click', ()=> {
		$('#aboutUsSection').scrollIntoView();
	});
} catch(err) {}
