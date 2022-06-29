var settings = {
  "url": "https://openexchangerates.org/api/latest.json?app_id=112b377dae4a423db1f572c287b69d75",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {
    var select = document.getElementById("rec_mode");
for(var index in response.rates) {
    select.options[select.options.length] = new Option([index], index);
}
});