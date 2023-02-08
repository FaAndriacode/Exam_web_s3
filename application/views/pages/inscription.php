<div class="container">
        <div class="row">
            <div class="col">
                <section class="getintouch">
                    <div class="container modern-form m-auto">
                        <div class="text-center">
                            <h4 style="color: #212529;font-size: 45px;">Inscription</h4>
                        </div>
                        <div class="modern-form__form-container">
                            <form action="<?php echo site_url('Login/insertInscription'); ?>" method = "post">
                                <div class="row">
                                    <div class="col col-contact">
                                        <div class="modern-form__form-group--padding-r form-group mb-3"><input class="form-control input input-tr" type="text" placeholder="First Name" name="prenom">
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-contact">
                                        <div class="modern-form__form-group--padding-l form-group mb-3"><input class="form-control form-control input input-tr" type="text" placeholder="Name" name="nom">
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col col-contact">
                                        <div class="modern-form__form-group--padding-r form-group mb-3"><input class="form-control input input-tr" type="email" placeholder="Email" name="email">
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-contact">
                                        <div class="modern-form__form-group--padding-r form-group mb-3"><input class="form-control input input-tr" type="password" placeholder="Password" name="pass">
                                            <div class="line-box">
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Submit Now</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>