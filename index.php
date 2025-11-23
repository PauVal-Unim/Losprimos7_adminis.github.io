<?php include 'includes/header.php'; ?>

<div class="p-5 mb-4 bg-light border-start border-primary border-5 rounded-3">
    <h1 class="display-5 fw-bold text-dark">⚙️ Chatarrería Los Primos 7: Empresa en Acción</h1>
    <p class="fs-4 text-secondary">Este sitio web es una aplicación práctica del Proceso Administrativo (P.O.D.C.) en un caso real de la industria del reciclaje, desarrollado para la asignatura de PROCESO ADMINISTRATIVO.</p>
</div>

<h2 class="text-center mb-4">Evidencia Operacional (Carrusel de Fotos)</h2>
<div id="carouselExampleIndicators" class="carousel slide mb-5 shadow" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        
        <div class="carousel-item active">
            <img src="assets/img/instalaciones.jpg" class="d-block w-100" alt="Evidencia 1">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                <h5>Instalaciones Principales</h5>
            </div>
        </div>
        
        <div class="carousel-item">
            <img src="assets/img/equipo.jpg" class="d-block w-100" alt="Equipo de Trabajo">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                <h5>Liderazgo y Equipo</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row align-items-stretch">
    <div class="col-lg-8">
        <h2>Historia y Contexto de Los Primos 7</h2>
        <p>La Chatarrería Los Hermanos 7 nació en Bogotá D. Con el tiempo, y motivados por los buenos resultados, decidieron abrir su segundo punto en Antonio Nariño, lo que les permitió ampliar su cobertura, atender a más personas y seguir generando empleo. Más adelante, sumaron un tercer punto en Los Mártires, consolidando a Los Hermanos 7 como una chatarrería reconocida en diferentes localidades de Bogotá. Pero la historia de Los Hermanos 7 no solo se trata de expansión y de economía. Desde sus inicios, la chatarrería ha tenido como objetivo principal aportar a la sostenibilidad, fomentando la cultura del reciclaje y demostrando que los negocios pueden ir de la mano con el cuidado del entorno.</p>
        <p>Hoy, la Chatarrería Los Hermanos 7 se destaca no solo por su labor comercial, sino también por el impacto social y ambiental que ha generado en Bogotá. La unión de tres personas con un sueño común se convirtió en una empresa familiar que refleja esfuerzo, compromiso y visión de futuro. Su historia es un ejemplo de cómo, a partir de la necesidad de buscar ingresos propios, también es posible contribuir al bienestar colectivo y a la protección del planeta.</p>  
        <h3 class="mt-4">Otras Evidencias Fotográficas</h3>
        <div class="row g-3">
            <div class="col-md-4">
                <img src="assets/img/botellas.jpg" class="img-fluid rounded shadow-sm img-evidencia" alt="Cobre clasificado">
                <p class="text-center small mt-1">Clasificación de Botellas</p>
            </div>
            <div class="col-md-4">
                <img src="assets/img/aluminio.jpg" class="img-fluid rounded shadow-sm img-evidencia" alt="Bloques de aluminio">
                <p class="text-center small mt-1">Clasificación de Aluminio</p>
            </div>
            <div class="col-md-4">
                <img src="assets/img/carton.jpg" class="img-fluid rounded shadow-sm img-evidencia" alt="Camión de recogida">
                <p class="text-center small mt-1">Clasificación de Carton</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card shadow-sm h-100">
            <div class="card-header bg-secondary text-white"> 
                <h3 class="h5 mb-0">El Proceso Administrativo (P.O.D.C.)</h3>
            </div>
            <div class="card-body">
                <ul class="list-unstyled"> 

                    <li class="pb-2">
                        <span class="fw-bold">Planeación:</span> 🧭 Dónde queremos llegar
                    </li>
                    <li class="pb-2">
                        <span class="fw-bold">Organización:</span> 🏗️ Cómo nos vamos a estructurar
                    </li>

                    <li class="pb-2">
                        <span class="fw-bold">Dirección:</span> 🗣️ Cómo lideramos e inspiramos
                    </li>

                    <li class="pb-2">
                        <span class="fw-bold">Control:</span> ✅ Cómo medimos y corregimos
                    </li>
                </ul>
                <a href="planeacion.php" class="btn btn-outline-primary w-100 mt-3">Ver Análisis Detallado</a>
            </div>
        </div>
    </div>
</div>

<div class="row my-5">
    <div class="col-12">
        <h2 class="text-center mb-4">📍 Ubicación Principal de Operaciones</h2>
        <div class="map-container shadow-lg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.318892603214!2d-74.10018282526102!3d4.714561195260505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84c9aaa2b4a9%3A0xf2a7b205798935a!2sCl.%2090b%20%2393-10%2C%20Bogot%C3%A1!5e0!3m2!1sen!2sco!4v1763335130081!5m2!1sen!2sco" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer">
            </iframe>
        </div>
        <div class="text-center mt-3">
            <p>Dirección Principal: Calle 90b #93-10, Engativa, Bogota D.C</p>
        </div>
    </div

    
</div>

<?php include 'includes/footer.php'; ?>