const api_url =
  "https://api.apify.com/v2/key-value-stores/lFItbkoNDXKeSWBBA/records/LATEST?disableRedirect=true";
async function getConfirmed() {
  const response = await fetch(api_url);
  const data = await response.json();
  const { infected, recovered, deceased, country } = data;

  document.getElementById("country").textContent = country;

  const countUp = new CountUp("infected", 0, infected, 0, 1.8);
  countUp.start();

  const countUp2 = new CountUp("recovered", 0, recovered, 0, 1.8);
  countUp2.start();

  const countUp3 = new CountUp("death", 0, deceased, 0, 1.8);
  countUp3.start();

  document.getElementById("recovered").textContent = recovered;
  console.log(data);
}

const global_url = "https://api.covid19api.com/summary";
async function getSummary() {
  const response = await fetch(global_url);
  const data = await response.json();
  const {
    Global: { TotalConfirmed, TotalRecovered, TotalDeaths },
  } = data;

  const countUp4 = new CountUp("infected-global", 0, TotalConfirmed, 0, 1.8);
  countUp4.start();

  const countUp5 = new CountUp("recovered-global", 0, TotalRecovered, 0, 1.8);
  countUp5.start();

  const countUp6 = new CountUp("death-global", 0, TotalDeaths, 0, 1.8);
  countUp6.start();

  console.log(TotalConfirmed);
}

getConfirmed();
getSummary();
