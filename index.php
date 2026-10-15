<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 text-center">
                    <h1 class="card-title mb-2 fw-bold text-primary" display-5>Qual o seu Signo ?<h1>
                        <p class="text-muted mb-4 fs-6">Informe a data de nascimento para consultar as caracteristicas do seu signo zodíaco</p>

                        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
                            <div class="mb-4 text-center">
                                <label for="data_nascimento" class="form-label fw-bold text-secondary fs-5 d-block mb-2">Data de Nascimento</label>
                                <input type="date" class="form-control form-contrl-lg text-center mx-auto" id="data_nascimento" name="data_nascimento" style="max-width: 320px;" require>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 shadow-sm mt-2">Consultar Signo</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>