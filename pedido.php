<?php
include("header.php");
?>

<div id="sideMenu">
    <div class="row fade-in-image">
        <div align="center" class="col-xs-12 col-sm-12 col-md-12">
            <div class="modal-dialog text-center">
                <div class="col-xs-12 col-sm-12 col-md-12 main-section">
                    <div class="card modal-content" style="margin-left: auto;" style="width: auto;" style="height: 1000px;">
                        <h2 style="margin-top: auto; margin-bottom: 2rem" class="card-title">Aqui podrás seleccionar los Ingredientes para tu Pastel</h2>

                        <form class="my-form">
                            <div class="mb-3">
                                <label> Escoge el Sabor del Pan</label>
                                <select id="selectIdPan" name="saborPan">
                                    <option selected disabled>---- Sabores de Pan ----</option>
                                    <option>Vainilla</option>
                                    <option>Chocolate</option>
                                    <option>Naranja</option>
                                    <option>Elote</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label> Escoge el Sabor del Relleno</label>
                                <select id="selectIdRelleno" name="saborRelleno">
                                    <option selected disabled>---- Sabores de Relleno ----</option>
                                    <option>Fresa</option>
                                    <option>Frambuesa</option>
                                    <option>Durazno</option>
                                    <option>Zarzamora</option>
                                    <option>Queso</option>
                                    <option>Crema Batida</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label> Escoge el Sabor del Relleno</label>
                                <select id="selectIdCantidad" name="cantidadPersonas">
                                    <option selected disabled>---- Cantidad de Personas ----</option>
                                    <option>15</option>
                                    <option>25</option>
                                    <option>100</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Escoge la Cobertura</label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Chocolate
                                </label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Durazno
                                </label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Fresa
                                </label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                <label class="form-check-label" for="flexRadioDefault4">
                                    Betún
                                </label>
                            </div>

                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">Frase</span>
                                    <input id="idFrase" name="frase" type="text" class="form-control">
                                </div>

                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">Correo</span>
                                    <input id="idFrase" name="frase" type="mail" class="form-control">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">Telefono</span>
                                    <input id="idFrase" name="frase" type="Phone" class="form-control">
                                </div>
                            </div>
                            <textarea placeholder="Message"></textarea>
                            <br>
                            <br>

                            <button class="btn btn-danger" type="reset" style="margin-bottom: 2rem;" style="margin-right: 2rem;" >Empezar de nuevo</button>
                            <button class="btn btn-primary" type="submit" style="margin-bottom: 2rem;" style="margin-left: 2rem;">Arma Tu Pastel ¡¡¡</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="js/pedido.js"></script>