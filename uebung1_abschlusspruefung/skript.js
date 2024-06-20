//skript.js
document.addEventListener('DOMContentLoaded', function() {
    let knopf1 = document.getElementById('klickMich'); 
    knopf1.addEventListener('click', function() {
        alert('Knopf wurde geklickt!');
    });

    let knopf2 = document.getElementById('hoverMich');
    knopf2.addEventListener('mouseover', function() { 
        alert('Knopf wurde gehovt!'); 
    });

    let div = document.createElement('div');
    div.textContent = 'Dieser Text wird hinzugefügt.';
    document.body.appendChild(div); 
});