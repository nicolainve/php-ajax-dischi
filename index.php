<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="./dist/css/app.css">

</head>

<body>

    <div id="app">
        <header class="main-header">
            <div class="container">
                <img src="./images/logo.png" alt="Spotify">
            </div>
        </header>
    
        <main class="main-content">
            <div class="container">
                <select v-model="actualGenre" id="filter" @change="filter">
                    <option value="">All</option>
                    <option v-for="filter in filters" :value="filter">{{ filter }}</option>
                </select>
                <ul class="album-list">
                        <li v-for="cd in cds">
                            <img :src="cd.poster" alt="cd.title">
                            <h2>{{ cd.title }}</h2>
                            <h3>{{ cd.author }}</h3>
                            <h4>{{ cd.year }}</h4>
                            <h3>{{ cd.genre }}</h3>
                        </li>
                </ul>
            </div>
        </main>
    </div>


    <script src="./dist/js/app.js"></script>
    
</body>
</html>