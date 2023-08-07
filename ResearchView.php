<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <section class="research">
        <div class="container">
            <div class="header w-100">
                <h1 class="title">Lorem, ipsum dolor sit amet consectetur adipisicing.</h1>
                <h5 class="category bg-primary mt-3">Research Capstone</h5>
                <a class="text-center m-3">Admin | August 3, 2023</a>
                <div class="links text-center mb-2">
                    <i class="fab fa-facebook-f fa-2x m-2"></i>
                    <i class="fab fa-twitter fa-2x m-2"></i>
                    <i class="fab fa-facebook-messenger fa-2x m-2"></i>
                </div>
            </div>
            <div class="article-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore fuga et assumenda officia sapiente, quas necessitatibus odio tempora voluptatibus neque aperiam tenetur. Temporibus ex quos ab, magni odit maiores animi sequi tempore, neque eaque, quidem mollitia consequatur similique sapiente deleniti in ipsum voluptatem pariatur nobis esse maxime quod libero. Nostrum?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi voluptatem et tenetur iure incidunt optio sit earum voluptatum dolor, molestias possimus. Placeat labore odit voluptate obcaecati quas eum, voluptatem perspiciatis commodi rerum praesentium ullam eligendi nihil voluptas sint, ipsa repellat.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, reiciendis dolorum laudantium consectetur aperiam autem, doloribus dignissimos nisi delectus, voluptates laborum. Temporibus asperiores quasi eveniet fugiat nobis. Hic quod ullam numquam asperiores voluptatum natus, blanditiis voluptate nisi vero dignissimos quis doloribus ipsum, quasi repellendus facere delectus aliquam temporibus veritatis? Deleniti aut facere quasi doloribus tenetur odio nobis nostrum fugit cupiditate.</p>
            </div>
            <div class="row g-2">
                <div class="col-md-6 image">
                    <img src="img/game1.jpg" class="img-fluid image-1" alt="">
                </div>
                <div class="col-md-6 image">
                    <img src="img/game-2.jpg" class="img-fluid image-2" alt="">
                </div>
            </div>
            <div class="article-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore fuga et assumenda officia sapiente, quas necessitatibus odio tempora voluptatibus neque aperiam tenetur. Temporibus ex quos ab, magni odit maiores animi sequi tempore, neque eaque, quidem mollitia consequatur similique sapiente deleniti in ipsum voluptatem pariatur nobis esse maxime quod libero. Nostrum?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi voluptatem et tenetur iure incidunt optio sit earum voluptatum dolor, molestias possimus. Placeat labore odit voluptate obcaecati quas eum, voluptatem perspiciatis commodi rerum praesentium ullam eligendi nihil voluptas sint, ipsa repellat.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, reiciendis dolorum laudantium consectetur aperiam autem, doloribus dignissimos nisi delectus, voluptates laborum. Temporibus asperiores quasi eveniet fugiat nobis. Hic quod ullam numquam asperiores voluptatum natus, blanditiis voluptate nisi vero dignissimos quis doloribus ipsum, quasi repellendus facere delectus aliquam temporibus veritatis? Deleniti aut facere quasi doloribus tenetur odio nobis nostrum fugit cupiditate.</p>
            </div>
            <div class="how-to-use text-center p-3">
                <a class="text-center">Want to see?</a><br>
                <i class="fab fa-github fa-2x m-2"></i>
                <i class="fas fa-file-alt fa-2x m-2"></i>
            </div>
        </div>
    </section>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
<style>
.research {
    min-height: 70vh;
}

.header {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
a {
    text-decoration: none;
}
p {
    text-align: justify;
}

i:hover {
    cursor: pointer;
    transform: scale(1.1)
}

.title {
    text-transform: uppercase;
    text-align: center;
    width: 100%;
    padding: 30px;
}
.category {
    text-transform: uppercase;
    text-align: center;
    width: 100%;
    padding: 30px;
    padding:10px;
    color: #f0f0f0;
}
@media (min-width: 768px) {
    .row {
        min-height: 60vh;
    }
    .image {
        position: relative;
    }
    
    .image-1 {
        position: absolute;
        index: 1;
        left: 100px; 
        top: 50px;
        min-width: 450px;
    }

    .image-2 {
        position: absolute;
        right: 100px; 
        top: 150px;
        min-width: 450px;
    }
}



</style>
</html>