function loadTemplate(templatePath, targetSelector) {
    fetch(templatePath)
        .then(response => response.text())
        .then(template => {
            const targetElement = document.querySelector(targetSelector);
            if (targetElement) {
                targetElement.innerHTML = template;
            }
        })
        .catch(error => {
            console.error('Error loading template:', error);
        });
}

// Load header and footer templates
loadTemplate('./js/header_footer_template/header.html', '#header');
loadTemplate('./js/header_footer_template/footer.html', '#footer');
