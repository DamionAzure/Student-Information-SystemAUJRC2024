const gradeRadios = document.querySelectorAll('input[name="grade"]');
const grade11Options = document.getElementById('grade11-options');
const grade12Options = document.getElementById('grade12-options');

gradeRadios.forEach(radio => {
    radio.addEventListener('change', () => {
        if (radio.value === '11') {
            grade11Options.style.display = 'block';
            grade12Options.style.display = 'none';
        } else if (radio.value === '12') {
            grade11Options.style.display = 'none';
            grade12Options.style.display = 'block';
        }
    });
});