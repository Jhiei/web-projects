// Checkboxes
const sp_chkbox = document.querySelector('#chkbox-Special');
const cl_chkbox = document.querySelector('#chkbox-Classic');
const co_chkbox = document.querySelector('#chkbox-Cold');

// Sections
const sp_section = document.querySelector('#sp-section');
const cl_section = document.querySelector('#cl-section');
const co_section = document.querySelector('#co-section');

const drink_section = document.querySelectorAll('.drink-list-item');

sp_chkbox.addEventListener('change', function() {
    if(this.checked) {
        cl_section.style.display = 'none';
        co_section.style.display = 'none';
    }
    else {
        cl_section.style.display = 'block';
        co_section.style.display = 'block';
    }
})

cl_chkbox.addEventListener('change', function() {
    if(this.checked) {
        sp_section.style.display = 'none';
        co_section.style.display = 'none';
    }
    else {
        sp_section.style.display = 'block';
        co_section.style.display = 'block';
    }
})

co_chkbox.addEventListener('change', function() {
    if(this.checked) {
        cl_section.style.display = 'none';
        sp_section.style.display = 'none';
    }
    else {
        cl_section.style.display = 'block';
        sp_section.style.display = 'block';
    }
})