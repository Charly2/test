<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="public/stylesheets/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
  </head>
  <body>
  	<div class="contenido">
    <div class="form">
        <div class="titulo">
            <h1>Test de Productos</h1></div>
        <div class="form_control">
            <div class="input"><span>Id:</span>
                <input id="idP" type="number" placeholder="ID">
            </div>
            <div class="input"><span>Nombre:</span>
                <input id="nombre_i" placeholder="Nombre">
            </div>
            <div class="input"><span>Marca:</span>
                <input id="marca_i" placeholder="Marca">
            </div>
            <div class="input"><span>Descripción:</span>
                <textarea id="des_i" placeholder="Descripción" rows="5" wrap="hard"></textarea>
            </div>
            <div class="input"><span>Caracteristicas:</span>
                <textarea id="carac_i" placeholder="Caracteristicas" rows="5" wrap="hard"></textarea>
            </div>
            <div class="input_doble">
                <div class="input_50"><span>Color:</span>
                    <input id="color_i" placeholder="Color">
                </div>
                <div class="input_50"><span>Categoria:</span>
                    <input id="cat_i" placeholder="Categoria">
                </div>
            </div>
            <div class="input_doble">
                <div class="input_60"><span>Medidas :</span>
                    <input id="medida_i" placeholder="Medida">
                </div>
                <div class="input_40"><span>Peso:</span>
                    <input id="peso_i" placeholder="Peso">
                </div>
            </div>
            <div class="botones">
                <button id="rejected"><i class="fas fa-times"></i></button>
                <button id="accepted"><i class="fas fa-check"></i></button>
            </div>
        </div>
    </div>
    <div id="producto" class="producto">
        <div class="header">
            <h1 id="nombre"></h1>
            <h2 id="marca"></h2></div>
        <div class="body">
            <div class="descrip">Descripción:
                <br>
                <p id="des"></p>
            </div>
            <div class="caracte">
                <p>Caracteristicas:</p>
                <ul id="carac"></ul>
            </div>
            <div class="info-4">
                <div class="infoitem"><span>Color</span>
                    <p id="color"></p>
                </div>
                <div id="medidaCorr" class="infoitem"><span>Medida</span>
                    <p id="medida"></p>
                </div>
                <div class="infoitem"><span>Peso</span>
                    <p id="peso"></p>
                </div>
                <div class="infoitem"><span>Categoria</span>
                    <p id="cat"></p>
                </div>
            </div>
            <div class="info-4">
                <div class="infoitem"><span>Precio</span>
                    <p id="precio"></p>
                </div>
                <div class="infoitem"><span>Precio C/Descuendo</span>
                    <p id="precioD"></p>
                </div>
                <div class="infoitem"><span>Fecha Inicio</span>
                    <p id="fechai"></p>
                </div>
                <div class="infoitem"> <span>Fecha Fin</span>
                    <p id="fechaf"></p>
                </div>
            </div>
            <div class="info-4">
                <div class="infoitem"><span>SKU</span>
                    <p id="sku"></p>
                </div>
                <div class="infoitem"><span>Cog Barras</span>
                    <p id="codBarr"></p>
                </div>
                <div class="infoitem"><span>Inventario</span>
                    <p id="inventario"></p>
                </div>
                <div id="condicionCorr" class="infoitem"><span>Condición</span>
                    <p id="condicion"></p>
                </div>
            </div>
            <div class="info-5">
                <div class="infoitem"><span>Member </span>
                    <p id="member"></p>
                </div>
                <div id="medidaCorrP" class="infoitem"><span>Medida Paquete</span>
                    <p id="medidap"></p>
                </div>
                <div class="infoitem"><span>Peso Paquete</span>
                    <p id="pesop"></p>
                </div>
                <div class="infoitem"><span>Impuestos</span>
                    <p id="impuestos"></p>
                </div>
                <div class="infoitem"> <span>Envio Gratis</span>
                    <p id="envio"> </p>
                </div>
            </div>
            <div id="fotos"></div>
            <div id="foto_info"></div>
            <div id="fotos_none" style="display:none"> </div>
        </div>
    </div>
</div>
<script src="public/javascripts/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="public/javascripts/app.js"></script>

  </body>
</html>