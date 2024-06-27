// script.js
document.getElementById("actionButton").addEventListener("click", function () {
    inhaltAusgeben();
});

function inhaltAusgeben() {
    const liste = [];
    var ausgabeParagraph = document.getElementById("output");
    ausgabeParagraph.innerHTML = "";
    var tabelle = document.getElementById("dataTable");
    var zaehler = 0;
    for (var i = 0, row; row = tabelle.rows[i]; i++) {
        for (var j = 0, col; col = row.cells[j]; j++) {
            liste.push(col.innerText + "<br>");
            ausgabeParagraph.innerHTML += liste[zaehler];
            zaehler++;
        }
    }    
}

