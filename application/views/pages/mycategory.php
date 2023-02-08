    <div class="container">
        <section class="m-5">
            <div class="row">
                <div class="col-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 mx-auto">
                                <div class="shadow accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header bg-white border-0 shadow-sm" id="headingOne">
                                            <h6 class="mb-0 font-weight-bold"><a class="text-uppercase d-block position-relative text-dark collapsible-link py-2" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">CATEGORIES</a></h6>
                                        </div>
                                        <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                                            <div class="card-body p-5">
                                                <?php foreach($allcategory as $category){
                                                    foreach($category as $cat){ ?>
                                                        <p class="font-weight-light m-1"><?php echo $cat['Nom']; ?></p>      
                                                    <?php }
                                                } ?>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-white border-0 shadow-sm" id="headingTwo">
                                            <h6 class="mb-0 font-weight-bold"><a class="text-uppercase d-block position-relative collapsed text-dark collapsible-link py-2" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">FILTRE</a></h6>
                                        </div>
                                        <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse show">
                                            <div class="card-body p-5">
                                                <p class="font-weight-light m-0">uid single-origin coffee nulla assumenda shoreditch et.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                <p class="text-warning fs-2">Mes objects</p>
                <div class="card-group">
                        <?php foreach($myObject as $object){ 
                            foreach($object as $ob){ ?>
                            <div class="col-4 p-3">
                                <img class="card-img-top" src=" <?php echo base_url("assets/img/objects/".$ob['img'].".jpg"); ?> ">
                                <div class="card-body p-5">
                                    <h4 class="card-title">Nom : <?php echo $ob['Nom']; ?></h4>
                                    <p class="card-text">Desciption : <?php echo $ob['Descriptions']; ?></p>
                                    <p class="card-text">Prix : <?php echo $ob['Prix']; ?>Ar</p>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </section>
    </div>