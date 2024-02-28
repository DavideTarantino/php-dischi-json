<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Php dischi</title>
</head>
<body>
    <div id="app">
        <div id="card" v-for="(element, index) in discArray" :key="index">
            <img :src="element.poster" alt="img">
            <p id="title"><strong>{{ element.title }}</strong></p>
            <p>{{ element.author }}</p>
            <p><strong>{{ element.year }}</strong></p> 
        </div>
    </div>

    <!-- Link ad Axios -->
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    
    <!-- Link a Vue -->
    <script src="https://unpkg.com/vue@3"></script>
    
    <!-- Link a Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Link al file js -->
    <script src="./js/main.js"></script>
</body>
</html>