<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
<div id="app" class="container mt-4">
        <div class="row">
            <div v-for="disco in dischi" :key="disco.title" class="col-md-4 mb-4">
                <div class="card">
                    <img :src="disco.poster" class="card-img-top" alt="Poster">
                    <div class="card-body">
                        <h5 class="card-title">{{ disco.title }}</h5>
                        <p class="card-text">{{ disco.author }}</p>
                        <p class="card-text">{{ disco.year }}</p>
                        <p class="card-text">{{ disco.genre }}</p>
                    </div>
                </div>
            </div>
        <!-- <div class="add-disco">
            <h2>Aggiungi un nuovo disco:</h2>
            <input type="text" v-model="newDisco.title" placeholder="Titolo">
            <input type="text" v-model="newDisco.author" placeholder="Autore">
            <input type="text" v-model="newDisco.year" placeholder="Anno">
            <input type="text" v-model="newDisco.poster" placeholder="URL Poster">
            <input type="text" v-model="newDisco.genre" placeholder="Genere">
            <button @click="addDisco">Aggiungi</button>
        </div> -->
    </div>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>
