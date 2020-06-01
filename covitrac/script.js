const api_url =
  "https://api.apify.com/v2/key-value-stores/lFItbkoNDXKeSWBBA/records/LATEST?disableRedirect=true";
async function getConfirmed() {
  const response = await fetch(api_url);
  const data = await response.json();
  const { infected, recovered, deceased, country } = data;

  console.log(data);

  document.getElementById("country").textContent = country;

  const countUp = new CountUp("infected", 0, infected, 0, 2.0);
  countUp.start();
  console.log("PH Infected " + infected);

  const countUp2 = new CountUp("recovered", 0, recovered, 0, 2.0);
  countUp2.start();
  console.log("PH Recovered " + recovered);

  const countUp3 = new CountUp("death", 0, deceased, 0, 2.0);
  countUp3.start();
  console.log("PH Deaths " + deceased);
}

const global_url = "https://api.covid19api.com/summary";
async function getSummary() {
  const response = await fetch(global_url);
  const data = await response.json();
  const {
    Global: { TotalConfirmed, TotalRecovered, TotalDeaths },
  } = data;

  console.log(data);

  const countUp4 = new CountUp("infected-global", 0, TotalConfirmed, 0, 2.0);
  countUp4.start();
  console.log("Total Infected " + TotalConfirmed);

  const countUp5 = new CountUp("recovered-global", 0, TotalRecovered, 0, 2.0);
  countUp5.start();
  console.log("Total Recovered " + TotalRecovered);

  const countUp6 = new CountUp("death-global", 0, TotalDeaths, 0, 2.0);
  countUp6.start();
  console.log("Total Deaths " + TotalDeaths);
}

async function getTableData() {
  const response = await fetch(global_url);
  const data = await response.json();
  const { Countries } = data;
  let output = "";
  Countries.forEach((c) => {
    output += "<tr>";
    output += "<td>" + c.Country + "</td>";
    output += "<td>" + c.TotalConfirmed + "</td>";
    output += "<td>" + c.NewConfirmed + "</td>";
    output += "<td>" + c.TotalRecovered + "</td>";
    output += "<td>" + c.NewRecovered + "</td>";
    output += "<td>" + c.TotalDeaths + "</td>";
    output += "</td>";
  });
  document.getElementById("globaldata").innerHTML = output;
}



getConfirmed();
getSummary();
getTableData();

