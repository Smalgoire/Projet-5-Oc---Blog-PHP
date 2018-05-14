<?php require('header.php'); ?>

    <section><br>

                    <?php
                    //On organise les donnees retournées par la bdd ($posts) dans une forme utilisable ($data) via fetch()
                    while ($data = $posts->fetch()) //fetch renvoie false lorsque tout a été passé en revue et la boucle se termine
                    {
                    ?>
                        
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12">

                                        
                                        <h3><?php echo ($data['title']) ?></h3>
                                        <p><?php echo ($data['chapo']) ?></p>
                                        <p><em>Dernière modification le <?php echo ($data['last_update']) ?></em></p>
                                        <p><a href="HomePage.php" class="btn btn-success btn-lg">Lire l'article</a></p>                      
                            </div>
                          </div>
                        </div>          

                    <?php
                    }
                    $posts->closeCursor(); //fin de traitement de la requête
                    ?>

                </div>
            </div>
        </div>

    </section>         


<?php require('footer.php'); ?>

