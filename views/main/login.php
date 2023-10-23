<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    <h2 id="formTitle">Login</h2>
                </div>
                <div class="card-body">
                    <form id="loginForm" action="models/main/log" method="POST" class="seminor-login-form">
                        <div class="form-group">
                            <label style="float:left" for="loginUsername">Username</label>
                            <input name="usernamelog" type="text" class="form-control" id="loginUsername" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label style="float:left" for="loginPassword">Password</label>
                            <input name="passlog" type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                        </div>
                        <div id="logrusalt">

                        </div>
                        <button name="btnlog" type="submit" class="btn btn-primary">Login</button>




                    </form>
                    <form id="registerForm"  action="models/main/reg" method="POST" class="seminor-login-form" style="display: none;">
                        <div class="form-group">
                            <label style="float:left" for="registerUsername">Username</label>
                            <input name="username" type="text" class="form-control" id="registerUsername" placeholder="Choose a username">
                        </div>
                        <div class="form-group">
                            <label style="float:left" for="registerPassword">Password</label>
                            <input name="password" type="password" class="form-control" id="registerPassword" placeholder="Choose a password">
                        </div>
                        <div class="form-group">
                            <label style="float:left" for="registerRePassword">re-enter password</label>
                            <input name="re_password" type="password" class="form-control" id="registerRePassword" placeholder="re-enter your password">
                        </div>
                        <div id="regrusalt">

                        </div>
                   
                        <button name="btnsendreg" type="submit" class="btn btn-success float-center">Register</button>
                    </form>
                </div>
                <div class="card-footer">
                    <p>Don't have an account? <a href="#" id="toggleForm">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


