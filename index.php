<?php
error_reporting(0);
include 'pengaturan.php';
include 'fungsi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?php echo $nama_website;?></title>
        <meta name="description" content="<?php echo $info_website;?>" />
		<meta name="robots" content="index,follow"/>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
		<?php include 'histats.txt'; ?>
		<script src="/api.js" type='text/javascript'></script>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="/"><?php echo $nama_website;?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/sitemap.xml">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="/assets/happy-shopping.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light"><?php echo $tagline_website;?></h1>
                    <p><?php echo $info_website;?></p>
                    
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0"></p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"></h2>
                            <p class="card-text"><?php foreach ($ID1 as $idx=>$val){?><a href="/?prod=<?=$val?>&uid=<?=RandomString();?>"><?=$val?>, </a><?php }?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"></h2>
                            <p class="card-text"><?php foreach ($ID2 as $idx=>$val){?><a href="/?prod=<?=$val?>&uid=<?=RandomString();?>"><?=$val?>, </a><?php }?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title"></h2>
                            <p class="card-text"><?php foreach ($ID3 as $idx=>$val){?><a href="/?prod=<?=$val?>&uid=<?=RandomString();?>"><?=$val?>, </a><?php }?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->		
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>		        
    </body>
</html>
