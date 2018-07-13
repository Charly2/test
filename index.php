
<?
session_start();
if (!isset($_SESSION['id'])){
    header("Location: log.php");
}




?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="public/stylesheets/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.25.0/dist/sweetalert2.min.css">
  </head>
  <body>
  	<div class="contenido">
    <div class="form">
        <div class="titulo">
            <h1>Test de Productos <span>Rango <?=$_SESSION['id']?></span></h1>
       </div>
        <div class="form_control">
            <div class="input"><span>Id:</span>
                <input id="idP" type="number" placeholder="ID">
            </div>
            <div class="input_doble">
                <div class="input_60"><span>Nombre:</span>
                    <input id="nombre_i" placeholder="Nombre">
                </div>
                <div class="input_40"><span>Modelo:</span>
                    <input id="modelo" placeholder="Modelo">
                </div>
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
            <div class="input hide"><span>Especificaciones:</span>
                <textarea id="espe_i" placeholder="Especificaciones" rows="5" wrap="hard"></textarea>
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
            <div class="input_doble">
                <div class="input_50"><span>SKU :</span>
                    <input id="sku_i" placeholder="SKU">
                </div>
                <div class="input_50"><span>Codigo de Barras:</span>
                    <input id="codBar_i" placeholder="Codigo de Barras">
                </div>
            </div>
            <div class="input_doble">
                <div class="input_50"><span>Precio :</span>
                    <input id="precio_i" placeholder="Precio">
                </div>
                <div class="input_50"><span>Precio con descuento:</span>
                    <input id="precio_des_i" placeholder="Precio con descuento">
                </div>
            </div>
            <div class="input_doble">
                <div class="input_50"><span>Fecha de inicio :</span>
                    <input id="fechai_i" placeholder="Fecha de inicio">
                </div>
                <div class="input_50"><span>Fecha de fin:</span>
                    <input id="fechaf_i" placeholder="Fecha de fin">
                </div>
            </div>
            <div class="input_doble">
                <div class="input_50"><span>Member  :</span>
                    <input id="mem_i" placeholder="Member">
                </div>
                <div class="input_50"><span>Envio:</span>
                    <input id="envio_i" placeholder="Envio  ">
                </div>
            </div>
            <div class="input_doble">
                <div class="input_50"><span>Pais:</span>
                    <input id="pap_i" placeholder="Pais">
                </div>
                <div class="input_50"><span>Inventario:</span>
                    <input id="inventario_i" placeholder="Inventario  ">
                </div>
            </div>
            <div class="input_doble">
                <div class="input_50"><span>Condicion:</span>
                    <input id="condicion_i" placeholder="Condicion">
                </div>
                <div class="input_50"><span>Impuestos:</span>
                    <input id="impuestos_i" placeholder="Impuestos  ">
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
            <h1 id="nombre"> </h1>
            <h2 id="modelo"> </h2>
            <h2 id="marca"></h2></div>
        <div class="body">
            <div class="descrip">Descripción:
                <br>
                <p id="des"></p>
            </div>
            <div class="descrip hide">Especificaciones:
                <br>
                <p id="espe"></p>
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
            <div class="info-5">
                <div class="infoitem"><span>SKU</span>
                    <p id="sku"></p>
                </div>
                <div class="infoitem"><span>Cog Barras</span>
                    <p id="codBar"></p>
                </div>
                <div class="infoitem"><span>Inventario</span>
                    <p id="inventario"></p>
                </div>
                <div id="condicionCorr" class="infoitem"><span>Condición</span>
                    <p id="condicion"></p>
                </div>
                <div class="infoitem"><span>Pais </span>
                    <p id="pap"></p>
                </div>
            </div>
            <div class="info-5">
                <div class="infoitem"><span>Member </span>
                    <p id="mem"></p>
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

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="position: relative;">
        <div class="modal-dialog modal-dialog-centered w80" role="document">
            <div class="modal-content">

                <button type="button" class="cerra" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-body text-center">
                    <img src="" id="img_modal" alt="">
                </div>
                <button id="alim" onclick="elim()">Eliminar</button>

            </div>
        </div>
    </div>

    <a class="salir" href="salir.php"><i class="fas fa-times"></i></a>
    <script src="public/javascripts/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.25.0/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="public/javascripts/app.js"></script>

    <script>

        function elim(){
            var i = document.getElementById('img_modal').src;


            var item = Producto.img.findIndex(function(element) {
                return element == i;
            });

            console.log(item);

            if (item > -1) {
                Producto.img.splice(item, 1);
            }
            console.log(Producto.img)
            _updateIMG()
        }

        $(window).ready(function (e) {
            getData('dato.php?id=<?=explode('-',$_SESSION['id'])[0]?>');
        });
    </script>

  </body>
</html>