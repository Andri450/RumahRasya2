<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
<div class="row bo">
    <div class="sidenav col-md-4 d-sm-none d-md-block d-lg-block">
        <div class="login-main-text">
            <h2>Rumah Rasya<br> Login Page</h2>
            <p>Login untuk akses menu Admin.</p>
        </div>
    </div>
    <div class="main col">
        <div class="row">
            <div class="login-form">
                <form method="POST" action="<?= base_url('Login/cek') ?>">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email"
                        name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password"
                        name="pass">
                    </div>
                    <button type="submit" class="btn btn-black">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<style>

@font-face {
    font-family: Playfair;
    src: 'assets/fonts/PlayfairDisplay-Regular.ttf';
}

body {
    font-family: Playfair;
}

.bo{
    height: 100%;
}

.sidenav {
    /* height: 100%; */
    background-color: #333333;
    overflow-x: hidden;
    padding-top: 20px;
}

.login-form{
    margin-top: 20%;
    margin-left: 40px;
}

.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #333333;
    color: #fff;
}
</style>