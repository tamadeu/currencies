const fs = require('fs');
var axios = require('axios');

var config = {
  method: 'get',
  url: 'https://currency-converter5.p.rapidapi.com/currency/convert',
  params: {format: 'json', from: 'EUR', to: 'BRL', amount: '1'},
  headers: {
    'X-RapidAPI-Key': '2c1f1fd5b0msh90e814d2f53ffdfp13ff59jsne91558ed4fc5',
    'X-RapidAPI-Host': 'currency-converter5.p.rapidapi.com'
  }
};

axios(config)
  .then(function (response) {
    // convert JSON object to string
    const data = JSON.stringify(response.data);

    // write JSON string to a file
    fs.writeFile('eur.json', data, (err) => {
      if (err) {
        throw err;
      }
      console.log("JSON data is saved.");
    });
  })
  .catch(function (error) {
    console.log(error);
  });

