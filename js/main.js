document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
    
    // Image preview for book cover upload
    const coverInput = document.getElementById('cover');
    if (coverInput) {
        coverInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const preview = document.getElementById('cover-preview');
                    if (!preview) {
                        const previewDiv = document.createElement('div');
                        previewDiv.id = 'cover-preview';
                        previewDiv.className = 'mt-2';
                        const previewImg = document.createElement('img');
                        previewImg.src = event.target.result;
                        previewImg.alt = 'Cover preview';
                        previewImg.style.maxHeight = '150px';
                        previewDiv.appendChild(previewImg);
                        coverInput.parentNode.appendChild(previewDiv);
                    } else {
                        preview.querySelector('img').src = event.target.result;
                    }
                };
                reader.readAsDataURL(file);
            }
        });
    }
    
    // Search functionality enhancement
    const searchForm = document.querySelector('.search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const searchInput = this.querySelector('input[name="search"]');
            if (searchInput.value.trim() === '') {
                e.preventDefault();
                searchInput.focus();
            }
        });
    }
});