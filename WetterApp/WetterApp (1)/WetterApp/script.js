function getWeather() {
    const stadt = document.getElementById("stadtname").value;
    const apiKey = "";
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${stadt}&appid=${apiKey}&units=metric&lang=de`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const { temp, feels_like } = data.main;
            const beschreibung = data.weather[0].description;
            const stadtName = data.name;
            const land = data.sys.country;

            const wetterAnzeigen = `Das aktuelle Wetter in: ${stadtName}, ${land}: ${beschreibung}, ${temp}°C (gefühlte ${feels_like}°C)`; // Der String soll ausgegeben werden

            document.getElementById("ausgabe").textContent = wetterAnzeigen; // hier wird ausgegeben
        })
        .catch(() => window.alert("Bitte einen Ort eingeben"));
}