// aufgabe.js
document.addEventListener('DOMContentLoaded', function() {
    // Bestehende Funktionalität: Text ändern
    let aenderButton = document.getElementById('aenderButton');
    aenderButton.addEventListener('click', function() {
        let textElement = document.getElementById('text');
        textElement.textContent = 'Der Text wurde geändert!';
    });
    // Funktion für neuen Text
    let neuerButton = document.getElementById('neuerButton');
    neuerButton.addEventListener('click', function() {
        let paragraph = document.createElement('p');
        paragraph.textContent = 'Neuer Text!';
        document.body.appendChild(paragraph);
    });
});