<div class="main_box">
    <div id="map_container">
        <div id="map_header">

            
            <h3>Sintetik</h3>
            <h5>Cauta un teren pentru fotbal.</h5>

            <img src="http://studiosnear.me/img/logo.png">
            <div id="invalid-postcode" class="ui-state-error message" style="display:none;">Introduceti o adresa</div>
            <div id="invalid-category" class="ui-state-error message" style="display:none;">Selectati categoria</div>
            <div class="message"></div>
        </div>
    </div>


    <form action="results.php" method="post" class="form_index" id="studioForm">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-home"></i></span><input type="text" name="StudioFullAddress" class="form-control address" id="address" placeholder="Introduceti o adresa" onChange="GeocodePostCode()" data-h5-errorid="invalid-postcode" required>
        </div>

        <div class="input-group range-slide">
            <span class="input-group-addon"><i class="fa fa-dot-circle-o"></i></span>
            <input type="range" name="StudioRadius" min="1" max="6" value="2" id="fader" step="1" onchange="outputUpdate(value)" list="volsettings" required>
            <datalist id="volsettings">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
            </datalist>

            <span class="fader"><output for="fader" id="volume">2 km</output></span>

            <script>
                function outputUpdate(vol) {
                    document.querySelector('#volume').value = vol + ' km';
                }
            </script>
        </div>

        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-bars"></i></span>
            <select class="form-control address" name="StudioCategory"  data-h5-errorid="invalid-category" required>
                <option value="">Selectati o categorie</option>
                <option value="all">Toate</option>
                <option value="advertising">Tenis cu piciorul</option>
                <option value="advertising">5 vs 5</option>
                <option value="digital">6 vs 6</option>
                <option value="marketing">7 vs 7</option>
                <option value="pr">9 vs 9</option>
                <option value="branding">11 vs 11</option>
            </select>

        </div>

        <!--
        <div class="input-group hidden-xs hidden-sm">
                    <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                <select class="form-control address" name="StudioCategory"  data-h5-errorid="invalid-category" required>
                <option value="all">All</option>
                <option value="advertising">Advertising</option>
                <option value="digital">Digital</option>
                <option value="marketing">Marketing</option>
                <option value="pr">PR</option>
                <option value="branding">Branding</option>
        </select>
        
        </div>
        -->

        <input type="hidden" id="lat" name="StudioLat" />
        <input type="hidden" id="long" name="StudioLong"/>

        <input type="submit" value="GO" class="btn btn-primary" id="btn_submit">
    </form>

</div>