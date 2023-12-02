<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>To Do List</title>
</head>

<body>
    <div id="app">
        <div class="wrapper">
            <div class="container">
                <h1>To Do List</h1>
                <ul class="list-group mb-3">
                    <li v-for="(item,index) in list" class="list-group-item" :class="(item.active)? '':'text-decoration-line-through'" @click="signTask(index)">{{item.text}}</li>
                </ul>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="New Task"
                        aria-label="Recipient's username" aria-describedby="button-addon2" v-model="newTask.text">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" @click="postItem">Add</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="JS/script.js"></script>
</body>

</html>