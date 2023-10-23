<?php
include 'view/main/head.php'
?>
<div class="container">
        <div class="row justify-content-center mt-5">
   
            <div class="col-md-12">
                <h2>Register</h2>
                <form>
                    <div class="form-group">
                        <label for="registerUsername">Username</label>
                        <input type="text" class="form-control" id="registerUsername" placeholder="Choose a username">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" class="form-control" id="registerPassword" placeholder="Choose a password">
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>
    <?php
include 'view/main/fotter.php'
?>