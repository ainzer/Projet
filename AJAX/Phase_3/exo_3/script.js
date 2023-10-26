function searchMovies() {
    // Récupérer la valeur du champ texte
    var movieName = document.getElementById('movieInput').value;

    // Vérifier si le champ est vide
    if (movieName === "") {
        alert("Veuillez entrer le nom d'un film.");
        return;
    }

    // Appeler l'API (remplacez l'URL par l'API de votre choix)
    var apiUrl = 'http://api.themoviedb.org/3/search/movie?api_key=f33cd318f5135dba306176c13104506a&query=' + encodeURIComponent(movieName);

    // Utiliser fetch pour faire une requête à l'API
    fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        var resultsContainer = document.getElementById('movieResults');
        resultsContainer.innerHTML = "<h2 class='mt-4'>Résultats pour '" + movieName + "':</h2>";

        // Utilisation de Bootstrap pour mettre en forme les résultats


        data.results.forEach((movie, index) => {
            // Construction de l'URL de l'image à partir du poster_path
            var posterUrl = `https://image.tmdb.org/t/p/w500${movie.poster_path}`;

            resultsContainer.innerHTML += `
                <div class=" col-md-4 d-flex justify-content-center">
                    <div class="card mt-4">
                          <img src="${posterUrl}" class="card-img-top mod-img" alt="${movie.title} Poster">
                        <div class="card-body">
                            <h5 class="card-title">${movie.title}</h5>
                            <p class="card-text">Date de sortie : ${movie.release_date}</p>
                            <p class="card-text">Note des utilisateurs : ${movie.vote_average}</p>
                        </div>
                    </div>
                </div>
            `;
        });

        if (rowOpened) {
            resultsContainer.innerHTML += "</div>";  // Fermer la dernière ligne si elle est ouverte
        }
    })
    .catch(error => {
        console.error('Erreur de recherche de films :', error);
    });
}


