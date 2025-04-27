// public/js/form.js
document.addEventListener('DOMContentLoaded', function() {
    // Form validation
    const form = document.getElementById('entryForm');
    
    if (form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });

        // Auto-format section input to uppercase
        const sectionInput = document.getElementById('section');
        if (sectionInput) {
            sectionInput.addEventListener('input', function() {
                this.value = this.value.toUpperCase();
            });
        }

        // Validate student ID (8 digits)
        const studentIdInput = document.getElementById('student_id');
        if (studentIdInput) {
            studentIdInput.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, '').slice(0, 8);
            });
        }
    }

    // Show success message if exists
    const successAlert = document.querySelector('.alert-success');
    if (successAlert) {
        setTimeout(() => {
            successAlert.style.display = 'none';
        }, 5000);
    }
});