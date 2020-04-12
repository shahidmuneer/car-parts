<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    <a class="navbar-brand" href="/">
                        <img src="images/logo.svg" alt="" width="140">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-10">
                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="<?php echo e(route('adList')); ?>">
                                      Sell
                                            <i class="fa fa-plus"></i>
                                        </a>
                                       
                                </li>
                                
                            <?php else: ?>
                                <li class="dropdown">
                                    <a href="/admin/home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            
                                               
                                                        
                                                
                                            

                                            
                                                
                                            
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\php projects\classified ads\Laravel-Classimax-Directory-2019\resources\views/partialsMainTable/topBar.blade.php ENDPATH**/ ?>