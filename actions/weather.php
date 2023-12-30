<h1>Weather</h1>

<script>

const api = "a1501bbfcee195edf793e17a49370f2b";
const req = "https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid={API key}";
const query = 'https://api.openweathermap.org/data/2.5/weather?lat=44.34&lon=10.99&appid=a1501bbfcee195edf793e17a49370f2b';
const url = 'https://api.openweathermap.org/data/2.5/weather?id=524901&lang=ru&appid=a1501bbfcee195edf793e17a49370f2b';


fetch(query).then((response) => {
    return response.json()
}).then((data) => {
    console.log(data);
})

</script>