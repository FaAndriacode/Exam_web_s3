
        <div class="row">
            <div class="col-md-8">
                <h4>Ajouter une nouvelle catégorie:</h4>
                <form action="<?php echo site_url('GestionCategorie/insertCategorie'); ?>" method="post">
                    <div class="form-group">
                        <label for="nom">Nouveau catégorie</label>
                        <input type="text" name="nom" class="form-control">
                        <input type="submit" value="Ajouter" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h4>Listes des catégories existant: </h4>
                <?php foreach($allcategory as $category){ 
                    foreach($category as $cat){?>
                    <form action="<?php echo site_url('GestionCategorie/updateCategorie'); ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" name="idCat" value="<?php echo $cat['id_Categorie']; ?>">
                            <input type="text" name="newValue" value="<?php echo $cat['Nom']; ?>" class="form-control">
                            <input type="submit" value="Mise à jour" class="btn btn-success">
                        </div>
                    </form>                                        
                <?php }
            } ?>
            </div>
        </div>
    </div>
</body>
</html>