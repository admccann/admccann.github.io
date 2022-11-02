function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

//creates a new XMLHttpRequest, uses link and API key from RapidAPI
var request = new XMLHttpRequest();

request.open("GET", "https://dog-facts2.p.rapidapi.com/facts");
request.setRequestHeader(
  "X-RapidAPI-Key",
  "155601730fmsh4489c73674a329ep17e50ejsn3a4e4119167f"
);

//uses an onload function to parse the data using JSON and creates a variable to store it
request.onload = function () {
  var response = request.response;
  var parsedData = JSON.parse(response);
  var originalUrl = parsedData.facts;
  console.log(originalUrl);

  //usesgetElementById to pass the parsed data to the webpage
  document.getElementById("demo").innerHTML = originalUrl;
};

request.send();
