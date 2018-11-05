const img = document.querySelector('img');
    
window.addEventListener('mousemove', (e) => {
    img.style.setProperty('--x-light',`${e.clientX - 1920}px`);
    img.style.setProperty('--y-light',`${e.clientY - 1080}px`);
});