        <?php 
        $page_id = null;
        $comp_model = new SharedController;
        ?>
        <div  class=" py-5">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 comp-grid">
                        <div class="">
                            <div class="fadeIn animated mb-4">
                                <div class="text-capitalize">
                                    <h2 class="text-capitalize">Welcome To <?php echo SITE_NAME ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        
                        <div  class="bg-light p-3 animated fadeIn page-content">
                            <div>
                                <h4><i class="fa fa-key"></i> User Login</h4>
                                <hr />
                                <?php 
                                $this :: display_page_errors(); 
                                ?>
                                <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                                    <div class="input-group form-group">
                                        <input placeholder="Username" name="username"  required="required" class="form-control" type="text"  />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <input  placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
                                        </div>
                                    </div>
                                    <div class="row clearfix mt-3 mb-3">
                                        <div class="col-6">
                                            <label class="">
                                                <input value="true" type="checkbox" name="rememberme" />
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                            <i class="load-indicator">
                                                <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                            </i>
                                            Login <i class="fa fa-key"></i>
                                        </button>
                                    </div>
                                    <hr />
                                    <div class="text-center">
                                        Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                        <i class="fa fa-user"></i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 comp-grid">
                        <div class=""><!DOCTYPE html>
                            <html>
                                <head>
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    </head>
                                    <body>
                                        <h1>The picture element</h1>
                                        <p>Resize the browser window to load different images.</p>
                                        <img src="assets/img/img_girl.jpg"alt="gif"style="width:700px;height:="80px;>
                                        </body>
                                    </html>
                                    <!DOCTYPE html>
                                    <html>
                                        <head>
                                            <style>
                                                div {
                                                background-color: white;
                                                }
                                                div.first {
                                                opacity: 0.1;
                                                }
                                                div.second {
                                                opacity: 0.3;
                                                }
                                                div.third {
                                                opacity: 0.6;
                                                }
                                            </style>
                                        </head>
                                        <body>
                                            <h1>Our services</h1>
                                            <p>When using the opacity property to add transparency to the background of an element, all of its child elements become transparent as well. This can make the text inside a fully transparent element hard to read:</p>
                                            <div class="first">
                                                <h1>opacity 0.1</h1>
                                            </div>
                                            <div class="second">
                                                <h1>opacity 0.3</h1>
                                            </div>
                                            <div class="third">
                                                <h1>opacity 0.6</h1>
                                            </div>
                                            <div>
                                                <h1>opacity 1 (default)</h1>
                                            </div>
                                        </body>
                                    </html>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                