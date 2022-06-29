const fs = require('fs');
var axios = require('axios');

var config = {
  method: 'get',
  url: 'https://currency-converter5.p.rapidapi.com/currency/convert',
  params: { format: 'json', from: 'USD', to: 'BRL', amount: '1' },
  headers: {
    'X-RapidAPI-Key': 'YOUR-API',
    'X-RapidAPI-Host': 'currency-converter5.p.rapidapi.com'
  }
};

axios(config)
  .then(function (response) {
    // convert JSON object to string
    const data = JSON.stringify(response.data);

    // write JSON string to a file
    fs.writeFile('usd.json', data, (err) => {
      if (err) {
        throw err;
      }
      console.log("JSON data is saved.");
    });
  })
  .catch(function (error) {
    console.log(error);
  });

