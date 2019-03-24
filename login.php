<?php include_once('header.php'); ?>
<main>
        <section >
            <div class="container">
                <div class="row">
                    <div class="col m3">
                        
            <div class="col m3">
                </div>
                    </div>
                    <form class="col s12 m6 " align="center" id="form1" name="form1" method="GET">
                        <div class="row">
                            <div class="card">
                                <div class="card-image" align="center">
                                    <img src="img/back_2.jpg" height="300">
                                    <span align="center" class="card-title">
                                        <h3 align="center">Iniciar sesión</h3>
                                    </span>
                                </div>
                                <div class="card-content">

                                    <div class="input-field">
                                        <input type="text" name="mail" id="mail">
                                        <label for="mail">Correo electrónico</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name="password" id="password">
                                        <label for="password">Contraseña</label>
                                    </div>

                                </div>
                                <div class="card-action" align="right">
                                    <a class="btn orange white-text" id="sub_info"
                                        onclick="document.getElementById('form1').submit(); return false;"
                                        name="sub_info" href="">Enviar</a>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>
<?php include('footer.php');?>