<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Template_1.1</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Accordion.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Banner-Heading-Image-images.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Dark-icons-1.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Dark-icons.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Gamanet_Breadcrumb_bs5.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Modern-Contact-Form.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navbar-Right-Links-icons.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navbar-With-Button-icons.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?> ">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Search-Input-responsive.css');?>">
</head>

<body>
    <header>
        <section class="banner-customer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-light navbar-expand-md py-3">
                            <div class="container">
                                <a class="navbar-brand d-flex align-items-center" href="#">
                                    <span><img src="<?php echo base_url('assets/img/fav.png'); ?>"></span>
                                    <span>&nbsp;E-Commerce</span>
                                </a>
                                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                                    <span class="visually-hidden">Toggle navigation</span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navcol-1">
                                    <form class="navbar-nav ms-auto" action="<?php echo site_url('RechercheFiltre/selectFiltre'); ?>" method="post">
                                        <li class="nav-item mx-2">
                                            <div class="float-start float-md-end mt-5 mt-md-0 search-area">
                                                <i class="fas fa-search float-start search-icon"></i>
                                                <input class="float-start float-sm-end custom-search-input"  name="motCle" type="search" placeholder="Rechercher">
                                            </div>
                                        </li>
                                        <li class="nav-item"><select class="form-select">
                                                <optgroup label="Categorie">
                                                    <?php foreach($allcategory as $category){
                                                        foreach($category as $cat){ ?>
                                                           <option value="<?php echo $cat['id_Categorie']; ?>"><?php echo $cat['Nom']; ?></option>
                                                        <?php }
                                                    } ?>  
                                                </optgroup>
                                            </select>
                                        </li>
                                        <li class="nav-item mx-2"><button class="btn btn-primary" type="submit">Search</button></li>
                                    </form>
                                </div>
                                <div class="collapse navbar-collapse" id="navcol-2">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Acceuil'); ?>">HOME</a></li>
                                        <li class="nav-item dropdown"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">AUTRE</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?php echo site_url('Login/endSession'); ?>">Log Out</a>
                                                <a class="dropdown-item" href="#">Liste Demande</a>
                                                <a class="dropdown-item" href="<?php echo site_url('Acceuil/Mycategory'); ?>">Mes Produit</a>
                                                <a class="dropdown-item" href="<?php echo site_url('Echange/ListeChange'); ?>">Notifications <span class="badge text-bg-secondary"><?php echo count($allechange['allechange']);  ?></span></a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('acceuil/category'); ?>">CATEGORIES</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </header>