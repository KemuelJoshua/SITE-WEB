<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="custom.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <section class="bg-primary research">
        <h1 class="section-title">Capstone / Research</h1>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row g-2">
                <div class="col-lg-4 col-md-6 col-9 bg-primary">
                    <div class="card" href="index.php">
                        <img src="img/BG.jpg" alt="" class="capstone-image">
                        <div class="card-body">
                            <h5 class="card-title">In betweeners</h5>
                            <p class="card-text">A 2D game that is created using C# and Unity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-9 bg-primary">
                    <div class="card">
                        <img src="img/BG.jpg" alt="" class="capstone-image">
                        <div class="card-body">
                            <h5 class="card-title">In betweeners</h5>
                            <p class="card-text">A 2D game that is created using C# and Unity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-9 bg-primary">
                    <div class="card">
                        <img src="img/BG.jpg" alt="" class="capstone-image">
                        <div class="card-body">
                            <h5 class="card-title">In betweeners</h5>
                            <p class="card-text">A 2D game that is created using C# and Unity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-9 bg-primary">
                    <div class="card">
                        <img src="img/BG.jpg" alt="" class="capstone-image">
                        <div class="card-body">
                            <h5 class="card-title">In betweeners</h5>
                            <p class="card-text">A 2D game that is created using C# and Unity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-9 bg-primary">
                    <div class="card">
                        <img src="img/BG.jpg" alt="" class="capstone-image">
                        <div class="card-body">
                            <h5 class="card-title">In betweeners</h5>
                            <p class="card-text">A 2D game that is created using C# and Unity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-9 bg-primary">
                    <div class="card">
                        <img src="img/BG.jpg" alt="" class="capstone-image">
                        <div class="card-body">
                            <h5 class="card-title">In betweeners</h5>
                            <p class="card-text">A 2D game that is created using C# and Unity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="see-more">
            <button class="lagay mo nalang same sa iba HAHAHA" >See more</button>
        </div>
    </section>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
<style>
/* Di ko na pinalitan font pre */
.research {
    min-height: 70vh;
}
.section-title {
    color: #E3DADA;
    text-transform: uppercase;
    text-align: center;
    width: 100%;
    padding: 30px;
}

.card {
    position: relative;
    overflow: hidden;
    border-radius: 0px;
    margin: 0px;
    border: none;
    height: 500px;
} 


.capstone-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: all ease 0.3s;
}

.capstone-image:hover {
    transform: scale(1.3);
    cursor: pointer;
}

.card-body {
    position: absolute;
    bottom: 0;
    color: white;
    z-index: 1;
    width: 100%;

    &::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: linear-gradient(0deg, rgba(128,19,19, 1), rgba(128,19,19, 0));
        z-index: -1;
    }
}

.see-more {
    padding: 60px 0px 60px 0px;
    text-align: center;
}

@media(max-width: 768px){
    .row {
        display: flex;
        justify-content: center;
    }
}


</style>
</html>