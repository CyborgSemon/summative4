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

try {
	let check = true;
	[].forEach.call(document.querySelectorAll('.item'), (e)=> {
		if (check) {
			document.getElementById('sideStickyImage').style.backgroundImage = `url(${e.dataset.imageLink})`;
			check = false;
		}
		e.addEventListener('mouseover', ()=> {
			document.getElementById('sideStickyImage').style.backgroundImage = `url(${e.dataset.imageLink})`;
		});
	});
} catch(err) {}