<?php include "header.php" ?>

<body id="page-top" class="index">
<?php include "nav.php" ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
               <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
								<div class="form-group">
									<div class="intro-lead-in">Selamat Datang</div>
									<div class="intro-heading">Twitder</div>
								</div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                <div class="panel-heading"><strong class="">Login</strong>

                </div>
                <div class="panel-body">
                    <form action="beranda.php" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                            </div>		
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>							
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                            </div>
							<p class="help-block text-danger"></p>		
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input type="checkbox" class="">Remember me</label>
                                </div>
								<p class="help-block text-danger"></p>		
                            </div>
							
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" href="beranda.php" class="btn btn-success btn-sm">Masuk</button>
                                <button type="reset" class="btn btn-default btn-sm">Ulangi</button>
                            </div>
							<p class="help-block text-danger"></p>		
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Belum terdaftar? <a href="beranda.php" class="">Daftar disini</a>
                </div>
            </div>
                            </div>                            
                        </div>
                    
            </div>
            </div>
            </div>
        </div>
	</header>
<?php include "footer.php" ?>