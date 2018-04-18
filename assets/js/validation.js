const axios = require('axios');

let name = document.getElementById('name');
let validationResult1 = document.getElementById('validation-result1');
const validateName = function () {
    axios.post(validationResult1.dataset.path, {input: name.value})
        .then(function (response) {
            if (response.data.valid) {
                validationResult1.innerText = ":)";
            } else {
                validationResult1.innerText = ":(";
            }
        })
        .catch(function (error) {
            validationResult1.innerText = 'Error: ' + error;
        });
};

name.onkeyup = validateName;
name.onchange = validateName;

let team = document.getElementById('team');
let validationResult2 = document.getElementById('validation-result2');
const validateTeam = function () {
    axios.post(validationResult2.dataset.path, {input: team.value})
        .then(function (response) {
            if (response.data.valid) {
                validationResult2.innerText = ":)";
            } else {
                validationResult2.innerText = ":(";
            }
        })
        .catch(function (error) {
            validationResult2.innerText = 'Error: ' + error;
        });
};

team.onkeyup = validateTeam;
team.onchange = validateTeam;