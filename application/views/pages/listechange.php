    <section>
        <div class="container shadow-customer mt-5">
            <?php foreach($allechange as $eh){ ?>
                <div class="row pb-5">
                    <div class="col-5 text-center mt-3">                    
                        <div class="text-center shadow-lg m-auto p-4 mt-5 rounded-5" id="cardEntrada-1" style="background:linear-gradient(171deg, var(--bs-pink) 0%, var(--bs-indigo) 100%), var(--bs-purple);width:280px;">
                        <p class="fw-bold text-white pt-1 p-0 m-0">A l'utilisateur </p>
                        <img class="pt-2 w-50" src=" <?php echo base_url("assets/img/objects/".$eh['sary'].".jpg"); ?> ">    
                        <h3 class="text-center text-white pt-2"><?php echo $eh['Nom'] ?></h3>
                            <p class="fw-bold text-white pt-1 p-0 m-0">Subtitle</p>
                            <p class="fw-light text-white m-0"><?php echo $eh['Descriptions'] ?> </p>
                            <hr class="text-white">
                            
                        </div>
                    </div>
                    <div class="col-2 text-center m-auto">
                        <span><i class="fas fa-sync-alt" style="font-size:80px;"></i></span>
                        <div class="row mt-5">
                            <div class="col">
                                <a href="<?php echo site_url('Echange/RefuDemande/'.$eh['id_Echange']); ?>" class="btn btn-primary d-block w-100" data-bss-hover-animate="flash">
                                        Refuser
                                </a>
                            </div>
                            <div class="col">
                                <a href="<?php echo site_url('Echange/Confirme/'.$eh['id_Echange'].'/'.$eh['id_Object'].'/'.$eh['id_utilisateur'].'/'.$eh['id_Object_Utilisateur'].'/'.$eh['id_utilisateur_proprietaire']); ?>" class="btn btn-primary d-block w-100" data-bss-hover-animate="flash">
                                    Confirmer
                                </a>
                            </div>                            
                        </div>                      
                    </div>
                    <div class="col-5 text-center">
                        <div class="text-center shadow-lg m-auto p-4 mt-5 rounded-5" id="cardEntrada-2" style="background:linear-gradient(171deg, var(--bs-pink) 0%, var(--bs-indigo) 100%), var(--bs-purple);width:280px;">
                        <p class="fw-bold text-white pt-1 p-0 m-0">A l'autre utilisateur</p> 
                        <img class="pt-2 w-50" src=" <?php echo base_url("assets/img/objects/".$eh['img'].".jpg"); ?> ">    
                        <h3 class="text-center text-white pt-2"><?php echo $eh['Nom'] ?></h3>
                            <p class="fw-bold text-white pt-1 p-0 m-0">Subtitle</p>
                            <p class="fw-light text-white m-0"><?php echo $eh['Descriptions'] ?></p>
                            <hr class="text-white">
                            <div class="col-12"><a href="<?php echo site_url('Historique/ListeHistorique/'.$eh['id_Object_Utilisateur']); ?>" class="btn btn-primary d-block w-100" type="button" data-bss-hover-animate="flash">Historique</a></div>
                        </div>
                    </div>
                </div>   
            <?php } ?>  
        </div>         
    </section>