const options = document.querySelectorAll('.option');
const dates = document.querySelectorAll('.date');
const ticket89f = document.getElementById('ticket-89f');
const ticket89f101f = document.getElementById('ticket-89f-101f');

options.forEach(option => {
    option.addEventListener('click', () => {
        options.forEach(o => o.classList.remove('active'));
        option.classList.add('active');

        if (option.id === 'standard') {
            ticket89f.style.display = 'block';
            ticket89f101f.style.display = 'none';
        } else if (option.id === 'combo') {
            ticket89f.style.display = 'none';
            ticket89f101f.style.display = 'block';
        }
    });
});

dates.forEach(date => {
    date.addEventListener('click', () => {
        dates.forEach(d => d.classList.remove('active'));
        date.classList.add('active');
    });
});
