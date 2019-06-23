<div class="container">

    <!-- Outer Row -->
    <br><br><br>
    <div class="pull-left-2 fixed-top" >
        <div class="col-lg-5">

            <div class=" ">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <br><br><br>
                                <div class="text-center">
                                    <img src= "he.png" class="transparent" alt="user-image"><br><br>
                                    
                                    <!-- <h3 class="h4 text-black mb-2 font-size 14px "><strong>LOGIN PAGE</strong></h3> -->
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                  <!--   <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="npm" name="npm" placeholder="NPM" value="<?= set_value('npm'); ?>">
                                        <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div> -->

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class=" bg-gradient-primary btn-user btn-block">
                                        <a class="small text-white">
                                        Login
                                    </button>
                                </form>
                                <br>
                                <div class="text-center">
                                    <a class="small text-purple" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                </div>
                                <!-- <div class="text-center">
                                    <a class="small text-purple" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
