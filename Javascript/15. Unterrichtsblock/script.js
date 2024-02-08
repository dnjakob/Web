// Aufgabe 1

function textInhaltAendern() {
    document.getElementById('meinElement').textContent = "Hallo Welt!";
};

// Aufgabe 2

function textFarbeAendern() {
    document.getElementById('farbText').style.color = 'red';
};

// Aufgabe 3

function paragraphErzeugen() {
    const paragraph = document.createElement("p");
    paragraph.textContent = "Ein neuer Paragraph";
    document.body.appendChild(paragraph);
};

// Aufgabe 4

const meinKnopf = document.getElementById('meinButton');
meinKnopf.addEventListener("click", (event) => {
    window.alert("Button wurde geklickt!");
});

// Aufgabe 5

function hinterGrundFarbeAendern() {
    const liste = document.getElementsByClassName("hintergrundFarbe");
    for (let objekt of liste) {
        objekt.style.backgroundColor = "yellow";
    };
};

// JSON

const abfrage = new XMLHttpRequest();
abfrage.onload = function() {
  const meinObjekt = JSON.parse(this.responseText);
  document.getElementById("demo").innerHTML = meinObjekt.name;
}
abfrage.open("GET", "https://webentwicklerkurs.de/wp-content/uploads/2023/01/json_beispiel.json");
abfrage.send();