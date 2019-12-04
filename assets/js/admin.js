window.onload = ()=> {
    let templateName = ['templates/diagonal.php', 'templates/sticky.php'];
    let currentTemplate = document.getElementById('inspector-select-control-0');
	let currentTemplateValue = '';
	let metabox = document.getElementById('categoriesId');

	if (currentTemplate.value) {
		currentTemplateValue = currentTemplate.value;
	} else {
		currentTemplateValue = '';
	}

    if (templateName.includes(currentTemplateValue)) {
        metabox.style.display = 'block';
    }

    currentTemplate.addEventListener('change', (e)=> {
		currentTemplateValue = currentTemplate.value;
		if (templateName.includes(currentTemplateValue)) {
            metabox.style.display = 'block';
        } else {
            metabox.style.display = 'none';
        }
    });
};