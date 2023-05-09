const showCorrespondingHeros = () => {
  const xhr = new XMLHttpRequest();
  const name = document.getElementById("name").value;

  // IN CASE OF ERROR
    xhr.onerror = function() {
    document.getElementById("characterSection").innerHTML = '<h2 id="characterMainTitle">An error has occured, check connection.</h2>';
  }
  // INCASE OF NO ERROR load
  xhr.onload = function(){
    var responseJSON = JSON.parse(xhr.response);
    console.log(responseJSON);
    // const characterAttributes = responseJSON.results;
    let html = "";
    html += "<div class='row'>";
    if (responseJSON.response == "success") {
      responseJSON.results.forEach((element) => {
        html += `
        <div class="col-4" style="margin-top: 50px;">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" onclick="showDetails(${element.id})" src="${element.image.url}">
            <div class="card-body">
              <span>
                <h5 class="card-title" onclick="showDetails(${element.id})" style="color: black; font-size: 1.2rem; line-height: 1.5rem;font-family: 'Bebas Neue', cursive;">
                  ${element.name}
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <i id="${element.id}" class="fa-solid fa-plus icon" onclick="addFavourite(${element.id})" style:"align-items: right; cursor:pointer"></i>
                </h5>
              </span>
            </div>
          </div>
        </div>`
      });
      }
      document.getElementById("cards-group").innerHTML = html;
  }

      xhr.open("GET", `https://www.superheroapi.com/api.php/586069776286026/search/${name}`, true);

      xhr.send();
}


// CHARACTER
function character() {
    // SO THAT THE URL CAN HAVE THE NAME INPUT AND ITS VALUE
    let urlQueryParameters = new URLSearchParams(window.location.search),
      queryParameterName = urlQueryParameters.get("name"),
      name = document.getElementById("name").value; 
    if (queryParameterName !== null && queryParameterName !== "") {
      document.getElementById("name").value = queryParameterName;
      connection();
    } else if (name !== null && name !== "") {
      document
        .getElementById("connectionForm")
        .addEventListener("submit", connection);
        
    } 
  }
// CONNECTION
function connection() {
    const xhr = new XMLHttpRequest();
    const name = document.getElementById("name").value;
    const params = "name=" + name;
    

  
  // INCASE OF NO ERROR load
      xhr.onload = function(){
          var responseJSON = JSON.parse(xhr.response);


          
      }

      xhr.open("GET", `https://gateway.marvel.com/v1/public/characters?${params}&ts=1&apikey=01302fe8616347c6decaf8fc30e088f9&hash=ba81f8fdf7e1f5233e29dc5a8d5a227a`, true);

      xhr.send();
    }

  