    <section>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($allhistorique as $hs){ ?>
                            <tr>
                                <td><?php echo $hs['nom']; ?> </td>
                                <td><?php echo $hs['prenom']; ?> </td>
                                <td><?php echo $hs['dateJ']; ?> </td>
                            </tr>
                        <?php } ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </section>