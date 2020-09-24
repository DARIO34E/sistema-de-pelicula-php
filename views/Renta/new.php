<main class="container">
    <div class="row">
        <h1 class="col-12 d-flex jutify-content-center">Nueva</h1>
    </div>

    <section class="row mt-5">
        <div class="card w-50 m-auto">
            <div class="card-header container">
                <h2 class="m-auto">RENTA</h2>
            </div>

            <div class="card-body w-100">                
            <div class="form-group">
                    <label>PELICULA</label>
                    <select id="pelicula" class="form-control">
                        <option value="">Seleccione...</option><option value="">Mortal Kombat...</option><option value="">SMortal Kombat Legends: La venganza de Scorpion...</option><option value="">Legends:...</option>
                        <option value="">: La venganza	...</option><option value="">Scorpion...</option><option value="">diablo...</option><option value="">bestia...</option>
                        <option value="">cambios...</option><option value="">tu...</option><option value="">camino...</option><option value="">basta...</option>
                        <option value="">loco...</option><option value="">luego...</option><option value="">...</option>
                        <?php foreach($pelicula as $peliculal): ?>
                            <option value="<?php echo $pelicula->id ?>"><?php echo $pelicula->id?></option>
                        <?php endforeach ?>
                    </select>
                </div>   
                
                <label for="start">fecha inicio:</label>

                <input type="date" id="start" name="trip-start"
                    value="2018-07-22"
                    min="2018-01-01" max="2018-12-31">

                    <label for="start">fecha fin:</label>

                <input type="date" id="start" name="trip-start"
                    value="2018-07-22"
                    min="2018-01-01" max="2018-12-31">




                
                    <div class="col-md-4 mt-4">
                        <a href="#" class="btn btn-success" id="addElement">+</a>
                    </div>
                </div>                    

                

                <div class="form-group">
                    <button class="btn btn-primary" id="save">Guardar</button>
                </div>                
            </div>
        </div>
    </section>
</main>

<script src="assets/js/R.js"></script>