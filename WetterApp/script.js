function getWeather() {
    const stadt = document.getElementById("stadtname").value;
    const apiKey = "0e4194c846936b540bce21b6b2a47fb9";
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${stadt}&appid=${apiKey}&units=metric&lang=de`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const { temp, feels_like } = data.main;
            const beschreibung = data.weather[0].description;
            const stadtName = data.name;
            const land = data.sys.country;

            const wetterAnzeigen1 = `Das aktuelle Wetter in: ${stadtName}, ${land}: ${beschreibung}, ${temp}°C (gefühlt ${feels_like}°C)`;

            document.getElementById("wetter1").textContent = wetterAnzeigen1;
        })
        .catch(() => window.alert("Bitte einen Ort eingeben"));
};

function getWeatherForecast() {
    const stadt = document.getElementById("stadtname").value;
    const apiKey = "";
    const url = `https://api.openweathermap.org/data/2.5/forecast?q=${stadt}&appid=${apiKey}&units=metric&lang=de`;

    fetch(url)
    .then(response => response.json())
    .then(data => {
        console.log('hallo');
        const { temp, feels_like } = data.list[1].main;
        console.log('hallo2');
        const beschreibung = data.list[2].description;
        console.log('hallo3');
        const stadtName = data.city.name;
        console.log('hallo4');
        const land = data.city.country;
        console.log('hallo5');
        const wetterAnzeigen2 = `Das Wetter in: ${stadtName}, ${land}: ${beschreibung}, ${temp}°C (gefühlt ${feels_like}°C)`;
        console.log('hallo6');
        document.getElementById("wetter2").textContent = wetterAnzeigen2;
    })
    .catch(() => window.alert("Bitte einen Ort eingeben"));
};