function aktuellesWetterAbrufen() {
    var stadt = document.getElementById("stadtname").value;
    const apiKey = "0e4194c846936b540bce21b6b2a47fb9";
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${stadt}&appid=${apiKey}&units=metric&lang=de`;

    if (document.getElementById("stadtname").value == '') {
        window.alert("Bitte geben Sie einen Ort ein!");
    };

    fetch(url)
        .then(response => response.json())
        .then(data => {
            aktuellesWetter(data);
        })
        .catch(fehler => console.error(fehler));
};

function aktuellesWetter(aw) {
    var temperaturMitBeschreibung = aw.weather[0].description + ", " + aw.main.temp + " °C";
    var gefuehlteTemperatur = "Fühlt sich an wie " + aw.main.feels_like + " °C";
    var ortMitLand = aw.name + ", " + aw.sys.country;
    var icon = aw.weather[0].icon;
    var wetterIcon = `https://openweathermap.org/img/wn/${icon}@2x.png`;

    document.getElementById("ergebnisAktuell").style.display = "flex";
    document.getElementById("temperaturAktuell").textContent = temperaturMitBeschreibung;
    document.getElementById("ortMitLandAktuell").textContent = ortMitLand;
    document.getElementById("gefuehlteTemperatur").textContent = gefuehlteTemperatur;
    document.getElementById("wetterIconAktuell").src = `${wetterIcon}`;
    document.getElementById("wetterIconAktuell").style.display = "block";
    document.getElementById("ergebnisPrognose").style.display = "none";
};

function wetterVorhersageAbrufen() {
    var stadt = document.getElementById("stadtname").value;
    const apiKey = "0e4194c846936b540bce21b6b2a47fb9";
    const url = `https://api.openweathermap.org/data/2.5/forecast?q=${stadt}&appid=${apiKey}&units=metric&lang=de`;

    if (document.getElementById("stadtname").value == '') {
        window.alert("Bitte geben Sie einen Ort ein!");
    };

    fetch(url)
        .then(response => response.json())
        .then(data => {
            wetterVorhersage(data);
        })
        .catch(fehler => console.error(fehler));
};

function wetterVorhersage(wv) {
    const vorhersagen = {};
    var zaehler = 0;
    var referenzUhrzeit = wv.list[0].dt;

    wv.list.forEach(wert => {
        if (referenzUhrzeit == wert.dt) {
            vorhersagen[zaehler] = wert;
            zaehler++;
            referenzUhrzeit = referenzUhrzeit + 86400
        }
    });

    for (var tage in vorhersagen) {
        const array = vorhersagen[tage]
        var ortMitLandVorhersage = wv.city.name + ", " + wv.city.country;
        var temperaturPrognose = array.main.temp;
        var datumUndUhrzeit = array.dt_txt;
        var iconPrognose = array.weather[0].icon;
        var wetterIconPrognose = `https://openweathermap.org/img/wn/${iconPrognose}@2x.png`;
        document.getElementById("wetterIconPrognose" + tage).src = `${wetterIconPrognose}`;
        document.getElementById("ortMitLandPrognose" + tage).textContent = ortMitLandVorhersage;
        document.getElementById("temperaturPrognose" + tage).textContent = "Temperatur: " + temperaturPrognose + " °C";
        document.getElementById("datumUndUhrzeitPrognose" + tage).textContent = "Datum: " + datumUndUhrzeit;
        document.getElementById("ergebnisPrognose" + tage).style.display = "flex";
    }
    document.getElementById("ergebnisPrognose").style.display = "flex";
    document.getElementById("ergebnisAktuell").style.display = "none";
}