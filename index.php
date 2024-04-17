<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dischi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="app">
        <div v-for="disco in dischi" :key="disco.title" class="disco">
            <img :src="disco.poster" alt="Poster">
            <h2>{{ disco.title }}</h2>
            <p>{{ disco.author }}</p>
            <p>{{ disco.year }}</p>
            <p>{{ disco.genre }}</p>
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
