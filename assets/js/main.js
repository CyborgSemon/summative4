function $ (ele) {
	return document.querySelector(ele);
}

function fixHeight () {
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
}
window.addEventListener('resize', fixHeight);

let toTopBtn = $('#toTop');

window.onscroll = loadScrollTopBtn;

try {
	$('#homeContainer').onscroll = loadScrollTopBtn;
} catch(err) {}

function loadScrollTopBtn () {
	try {
		if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
			toTopBtn.style.right = "2em";
		} else {
			toTopBtn.style.right = "-5em";
		}
	} catch(err) {}

	try {
		if ($('#homeContainer').scrollTop > 200) {
			toTopBtn.style.right = "2em";
		} else {
			toTopBtn.style.right = "-5em";
		}
	} catch(err) {}
}

$('#toTop').addEventListener('click', ()=> {
	$('#topNav').scrollIntoView();
});

try {
	$('#aboutUsButton').addEventListener('click', ()=> {
		$('#aboutUsSection').scrollIntoView();
	});
} catch(err) {}

try {
	let check = true;
	[].forEach.call(document.querySelectorAll('.item'), (e)=> {
		if (check) {
			$('#sideStickyImage').style.backgroundImage = `url(${e.dataset.imageLink})`;
			check = false;
		}
		e.addEventListener('mouseover', ()=> {
			$('#sideStickyImage').style.backgroundImage = `url(${e.dataset.imageLink})`;
		});
	});
} catch(err) {}

try {
	let slideIndex = 1;
	let testimonials = document.querySelectorAll('.testimonial');
	let dots = document.querySelectorAll('.dot');

	[].forEach.call(dots, (e)=> {
		e.addEventListener('click', ()=> {
			runSlide(slideIndex -= parseInt(e.dataset.slideNum));
		});
	});

	function runSlide (slideNum) {
		if (slideNum > testimonials.length) slideIndex = 1;
		if (slideNum < 1) slideIndex = testimonials.length;
		for (let i = 0; i < testimonials.length; i++) {
			testimonials[i].style.display = 'none';
		}
		for (let i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace('active', '');
		}
		testimonials[slideIndex-1].style.display = 'flex';
		dots[slideIndex-1].classList.add('active');
	}
	runSlide(1);
} catch(err) {}

loadScrollTopBtn();