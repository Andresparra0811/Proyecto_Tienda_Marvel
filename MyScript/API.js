const publicKey = '';
const privateKey = 'TU_CLAVE_PRIVADA';
const ts = Date.now();
const hash = md5(ts + privateKey + publicKey);
const characterName = 'Spider-Man';

const url = `http://gateway.marvel.com/v1/public/characters?name=${characterName}&ts=${ts}&apikey=${publicKey}&hash=${hash}`;

fetch(url)
  .then(response => response.json())
  .then(data => {
    // Utiliza la respuesta de la API de Marvel para mostrar información sobre los personajes en tu aplicación.
  })
  .catch(error => console.log(error));

  