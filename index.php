<? include 'header.php'; ?>
<div class="conteiner">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="conteiner-fluid">
            <a href="#Logo" class="navbar-brand ms-2"><img src="https://upload.wikimedia.org/wikipedia/commons/5/52/Free_logo.svg" alt="Bootstrap" width="100" height="55"></a>
        </div>
        <div class="collapse justify-content-center navbar-collapse">
            <ul class="nav nav-pills mb-2 " id="pills-tab" role="tablist">
                <li class="nav-item col-sm"><a href="#home" class="nav-link active" id="pills-home-tab" role="presentation" aria-selected="true">Home</a></li>
                <li class="nav-item col-sm"><a href="#about" class="nav-link " id="pills-about-tab" role="presentation" aria-selected="false">About</a></li>
                <li class="nav-item col-sm"><a href="#home" class="nav-link ">Contact</a></li>
            </ul>
        </div>
        <div class="justify-content-end">
            <a href="login.php" class="btn btn-outline-success m-2">Sign-in</a>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="carousel slide" id="carouselExampleControls">
            <div class="carousel-inner justify-content-center">
                <div class="carousel-item active ">
                    <img src="https://images.pexels.com/photos/5595519/pexels-photo-5595519.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height: 90vh;" alt="internetni ulang" class="d-block w-100">
                </div>
                <div class="carousel-item ">
                    <img src="https://images.pexels.com/photos/193021/pexels-photo-193021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height: 90vh;" alt="internetni ulang" class="d-block w-100">
                </div>
                <div class="carousel-item ">
                    <img src="https://images.pexels.com/photos/6166016/pexels-photo-6166016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height: 90vh;" alt="internetni ulang" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

</div>
<? include 'footer.php'; ?>