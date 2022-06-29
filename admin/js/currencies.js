var from = "";
var to = "";
var curr = from + "_" + to;

function getFrom() {
  from = document.getElementById("currFrom").value;

  console.log(from);
  return true;
}

function getTo() {
  to = document.getElementById("currTo").value;
  console.log(to)
  return true;
}

function getCurr() {
  if (from == "" || to == "") {
    document.querySelector("#from_to_text").innerHTML = "Please, select both currencies."
  } else {
    curr = from + "_" + to;

    var settings = {
      "url": `https://free.currconv.com/api/v7/convert?q=${curr}&apiKey=609a7b48f3c11d3b982b`,
      "method": "GET",
      "timeout": 0,
    };

    $.ajax(settings).done(function (response) {
      document.querySelector("#value").innerHTML = response.results[curr].to + " " + response.results[curr].val;
      document.querySelector("#from_to_text").innerHTML = "Conversion from " + response.results[curr].fr + " to " + response.results[curr].to;

    });
  }
}