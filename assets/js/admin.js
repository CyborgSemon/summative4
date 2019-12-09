window.onload = ()=> {
    try {
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
    } catch(err) {}

    try {
        let textInput = document.getElementById('testimonialPersonTextInput');
        textInput.addEventListener('input', ()=> {
            if (textInput.value.split(' ').length > 10) {
                document.getElementById('publish').disabled = true;
                document.getElementById('maxError').style.display = 'inline';
            } else {
                document.getElementById('publish').disabled = false;
                document.getElementById('maxError').style.display = 'none';
            }
        });
    } catch(err) {}
}