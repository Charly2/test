/**
 * Created by Juan Carlos on 05/02/2018.
 */
var Producto = {};
var Images = [];
var flag = false;
var Principal = [];
var Contenido = [];

$( "#idP" ).change(function() {
    let a = $( "#idP" ).val();
    var url  = 'dato.php?id='+a;
    getData(url);

});



function updateImg(){
    Array.prototype.slice.call(document.getElementById("fotos").children).map((i)=>{
        let a = i.naturalHeight +"px x " + i.naturalWidth+"px";
        addCaracteristicas(a,"foto_info");
        console.log(a)
    });
}


function getData(url){
    
    limpiar();
    limpiar_auto();
    Producto = null;
    $.get(url,function (data,status) {
        console.log(data)
        if (data=="sinmasnull"){
            alert("sin mas");
        } else {
                Producto = data;
                Producto.img = new Array();

                Images = [];
                Principal = [];
                Contenido = [];
                flag = true;
                console.dir(data)
                $( "#idP" ).val(Producto.id);
                setTimeout(function(){ print(data) }, 300);
                console.dir(Producto);


        }


    });

}


function print(data) {
    limpiar();

    document.getElementById("producto").style.opacity = 1;
    cargar("#nombre","nombre");
    cargar("#marca","marca");
    cargar("#modelo","modelo");
    cargar("#des","descripcion");
    cargar("#espe","especificaciones");
    $('#carac_i').val(Producto.carac);
    Producto.carac.split('.').map(dato=>addCaracteristicas(dato,'carac'));
    cargar("#color","color");
    cargar("#medida","medidas");
    cargar("#peso","peso");
    cargar("#cat","cat");
    cargar("#precio","precio");
    cargar("#precioD","precio_des");
    cargar("#fechai","fechaini");
    cargar("#fechaf","fechafin");
    $( "#fechai_i" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#fechaf_i" ).datepicker({ dateFormat: 'yy-mm-dd' });
    cargar("#sku","sku")
    cargar("#codBar","codBar")
    cargar("#inventario","inventario");
    cargar("#condicion","condicion");
    cargar("#mem","mem");
    cargar("#medidap","medidaPaq");
    cargar("#pesop","pesoPaq");
    cargar("#impuestos","impu");
    cargar("#envio","envio");
    cargar("#pap","pais");

    Producto.gal.split(',').map((e)=>{
        addfotos(e);
        addfotosNone(e);

    })



}


function _updateIMG(){
    var ca = document.getElementById('fotos');
    $('#exampleModalCenter').modal('hide')
    ca.innerHTML ="";
    Producto.img.map((e)=>{
        addfotos(e,false);
        addfotosNone(e,false);

    })

}

$('#fotos').hover(function(){
    if(flag){
        updateImg();
        flag= false;
    }
})



function cargar(s,key){
    let valor = Producto[key];
    $(s).html(valor);
    $(s+'_i').val(valor)  
}

function addCaracteristicas(dato,tipo) {
    var ca = document.getElementById(tipo);
    var a = document.createElement('li');
    a.innerHTML = dato;
    ca.appendChild(a);
}

function addfotos(dato,f=true) {
    var ca = document.getElementById('fotos');
    var a = document.createElement('img');
    a.src = dato;
    a.onclick = function(){
        document.getElementById('img_modal').src=this.src;
        $('#exampleModalCenter').modal('show')
    };
    if (f){
        Producto.img.push(dato);
    }

    ca.appendChild(a);
}

function limpiar() {
    document.getElementById("producto").style.opacity = 0;
    document.getElementById('fotos').innerHTML = "";
    document.getElementById('carac').innerHTML = "";

}
function limpiar_auto(){
    document.getElementById('fotos_none').innerHTML = "";
    document.getElementById('foto_info').innerHTML = "";
}

function addfotosNone(dato,f=true) {
    var ca = document.getElementById('fotos_none');
    var a = document.createElement('img');
    a.src = dato;
    //console.dir(a)
    if (f) {
        Images.push[a];
    }
    ca.appendChild(a);
}



let sNombre = $('#nombre_i');
sNombre.keypress(()=>{update(sNombre , "nombre")});
sNombre.keyup(()=>{update(sNombre , "nombre")});
sNombre.change(()=>{update(sNombre , "nombre")});

let sMarca = $('#marca_i');
sMarca.keypress(()=>{update(sMarca ,"marca")});
sMarca.keyup(()=>{update(sMarca ,"marca")});
sMarca.change(()=>{update(sMarca, "marca")});

let sDes = $('#des_i');
sDes.keypress(()=>{update(sDes ,"descripcion")});
sDes.keyup(()=>{update(sDes ,"descripcion")});
sDes.change(()=>{update(sDes, "descripcion")});

let sCarac = $('#carac_i');
sCarac.keypress(()=>{update(sCarac ,"carac")});
sCarac.keyup(()=>{update(sCarac ,"carac")});
sCarac.change(()=>{update(sCarac, "carac")});

let sColor = $('#color_i');
sColor.keypress(()=>{update(sColor ,"color")});
sColor.keyup(()=>{update(sColor ,"color")});
sColor.change(()=>{update(sColor, "color")});


let sMedida = $('#medida_i');
sMedida.keypress(()=>{update(sMedida ,"medidas")});
sMedida.keyup(()=>{update(sMedida ,"medidas")});
sMedida.change(()=>{update(sMedida, "medidas")});


let sPeso = $('#peso_i');
sPeso.keypress(()=>{update(sPeso ,"peso")});
sPeso.keyup(()=>{update(sPeso ,"peso")});
sPeso.change(()=>{update(sPeso, "peso")});



let sCat = $('#cat_i');
sCat.keypress(()=>{update(sCat ,"cat")});
sCat.keyup(()=>{update(sCat ,"cat")});
sCat.change(()=>{update(sCat, "cat")});

let sPrecio = $('#precio_i');
sPrecio.keypress(()=>{update(sPrecio ,"precio")});
sPrecio.keyup(()=>{update(sPrecio ,"precio")});
sPrecio.change(()=>{update(sPrecio, "precio")});

let sPrecioD = $('#precioD_i');
sPrecioD.keypress(()=>{update(sPrecioD ,"precio_des")});
sPrecioD.keyup(()=>{update(sPrecioD ,"precio_des")});
sPrecioD.change(()=>{update(sPrecioD, "precio_des")});

let sFechai = $('#fechai_i');
sFechai.keypress(()=>{update(sFechai ,"fechaini")});
sFechai.keyup(()=>{update(sFechai ,"fechaini")});
sFechai.change(()=>{update(sFechai, "fechaini")});

let sFechaf = $('#fechaf_i');
sFechaf.keypress(()=>{update(sFechaf ,"fechafin")});
sFechaf.keyup(()=>{update(sFechaf ,"fechafin")});
sFechaf.change(()=>{update(sFechaf, "fechafin")});

let sSku = $('#sku_i');
sSku.keypress(()=>{update(sSku ,"sku")});
sSku.keyup(()=>{update(sSku ,"sku")});
sSku.change(()=>{update(sSku, "sku")});


let sCodBarr = $('#codBar_i');
sCodBarr.keypress(()=>{update(sCodBarr ,"codBar")});
sCodBarr.keyup(()=>{update(sCodBarr ,"codBar")});
sCodBarr.change(()=>{update(sCodBarr, "codBar")});

let sInventario = $('#inventario_i');
sInventario.keypress(()=>{update(sInventario ,"inventario")});
sInventario.keyup(()=>{update(sInventario ,"inventario")});
sInventario.change(()=>{update(sInventario, "inventario")});

let sCondicion = $('#condicion_i');
sCondicion.keypress(()=>{update(sCondicion ,"condicion")});
sCondicion.keyup(()=>{update(sCondicion ,"condicion")});
sCondicion.change(()=>{update(sCondicion, "condicion")});

let sMember = $('#mem_i');
sMember.keypress(()=>{update(sMember ,"mem")});
sMember.keyup(()=>{update(sMember ,"mem")});
sMember.change(()=>{update(sMember, "mem")});

let sMedidaP = $('#medidap_i');
sMedidaP.keypress(()=>{update(sMedidaP ,"medidaPaq")});
sMedidaP.keyup(()=>{update(sMedidaP ,"medidaPaq")});
sMedidaP.change(()=>{update(sMedidaP, "medidaPaq")});

let sPesoP = $('#pesop_i');
sPesoP.keypress(()=>{update(sPesoP ,"pesoPaq")});
sPesoP.keyup(()=>{update(sPesoP ,"pesoPaq")});
sPesoP.change(()=>{update(sPesoP, "pesoPaq")});

let sImpuestos = $('#impuestos_i');
sImpuestos.keypress(()=>{update(sImpuestos ,"impu")});
sImpuestos.keyup(()=>{update(sImpuestos ,"impu")});
sImpuestos.change(()=>{update(sImpuestos, "impu")});

let sEnvio = $('#envio_i');
sEnvio.keypress(()=>{update(sEnvio ,"envio")});
sEnvio.keyup(()=>{update(sEnvio ,"envio")});
sEnvio.change(()=>{update(sEnvio, "envio")});

let Spap = $('#pap_i');
Spap.keypress(()=>{update(Spap ,"pais")});
Spap.keyup(()=>{update(Spap ,"pais")});
Spap.change(()=>{update(Spap, "pais")});







function update(s,sa) {
    Producto[sa] = s.val();
    print(Producto);
}

function dellCm(se){
    let str = Producto[se];
    console.log(str);
    arr = str.split(" ", 10);
    if(arr[5]=="cm"){
        let str = arr[0]+arr[1]+arr[2]+arr[3]+arr[4];
        Producto[se] = str;
    }
    print(Producto);
}



$('#rejected').on('click',function(){
    delete Producto['Condicion'];
    var stringIMG = "";
    for (var i = 0;i<Producto.img.length;i++){
        stringIMG+=Producto.img[i];
        if (i<(Producto.img.length)-1){
            stringIMG+=',';
        }
    }




    Producto.gal=stringIMG;
    delete Producto['img'];
    console.dir(Producto);
    $.ajax({
        type: "POST",
        url: "malos.php",
        data: Producto,
        success: function(e){
            console.log(e);
            if (e==1){

                console.log();
                var a = parseInt(Producto.id)+1;
                var url  = 'dato.php?id='+a;
                getData(url);
            } else{
                alert("incorecto")
            }
        }
    });
});



$('#accepted').click(function (e) {
    delete Producto['Condicion'];
    var stringIMG = "";
    for (var i = 0;i<Producto.img.length;i++){
        stringIMG+=Producto.img[i];
        if (i<(Producto.img.length)-1){
            stringIMG+=',';
        }
    }

    Producto.gal=stringIMG;
    delete Producto['img'];
    $.ajax({
        type: "POST",
        url: "buenos.php",
        data: Producto,
        success: function(e){
            console.log(e);
            if (e==1){
                alert("corecto")

                var a = parseInt(Producto.id)+1;
                var url  = 'dato.php?id='+a;
                getData(url);
            } else{
                alert("incorecto")
            }
        }
    });
});

/*$('#accepted').on('click',function(){
alert(11);

    $.ajax({
        type: "POST",
        url: "buenos.php",
        data: Producto,
        success: function(e){
            console.log(e);
        }
      });
});*/

/*
function corregirImg(){
    if($('#img_1_valor').val()==1){
        if(Producto.Galeria__Principal != "") {
            Principal.push(Producto.Galeria__Principal);
        }
    }else{
        if(Producto.Galeria__Principal != "") {
            Contenido.push(Producto.Galeria__Principal);
        }
    }
    if($('#img_2_valor').val()==1){
        if(Producto.Galeria_contenido != "") {
            Principal.push(Producto.Galeria_contenido);
        }

    }else{
        if(Producto.Galeria_contenido != "") {
            Contenido.push(Producto.Galeria_contenido);
        }

    }
    if($('#img_3_valor').val()==1){
        if(Producto.Imagen1 != "") {
            Principal.push(Producto.Imagen1);
        }

    }else{
        if(Producto.Imagen1 != "") {
            Contenido.push(Producto.Imagen1);
        }

    }
    if($('#img_4_valor').val()==1){
        if(Producto.Imagen2 != "") {
            Principal.push(Producto.Imagen2);
        }

    }else{
        if(Producto.Imagen2 != "") {
            Contenido.push(Producto.Imagen2);
        }

    }
    if($('#img_5_valor').val()==1){
        if(Producto.Imagen3 != "") {
            Principal.push(Producto.Imagen3);
        }

    }else{
        if(Producto.Imagen3 != "") {
            Contenido.push(Producto.Imagen3);
        }


    }
    armaGaleria();
}


function armaGaleria(){
    let strPrincipal="";
    let c = 0;
    if(Principal.length > 0){
        Principal.map((i)=>{

            let aux =',';
            if((c == Principal.length-1)) {
                aux = '';
            }
            strPrincipal = strPrincipal + i +aux;
            c++;

        });
    }else{
        strPrincipal="";
     }
    

    var strContenido="";
     c = 0;
     if(Contenido.length > 0){
        Contenido.map((i)=>{
            let aux =',';
            if((c == Contenido.length-1)) aux = '';     
            strContenido = strContenido + i +aux;
            c++;
        });
     }else{
        strContenido="";
     }
    
    Producto.Galeria__Principal =  strPrincipal;
    Producto.Galeria_contenido = strContenido;
    Producto.Imagen1="";
    Producto.Imagen2="";
    Producto.Imagen3="";
    console.dir(Producto)
}

function quitarcomillas(selector) {
    let a= $(selector).val()
    let b = a.split(" ")
    console.log(b[b.length-1] = b[b.length-1].replace('\"',""));
    b[0]=b[0].replace('\"',"")
    let str= "";
    b.map((e)=>{
        var a = e +" ";
        str +=a;
    });
    return str;

}

$("#des").click(function () {
    var a = quitarcomillas("#des_i");
    Producto.des = a;
    print(Producto)
});

$("#carac").click(function () {
    var a = quitarcomillas("#carac_i");
    Producto.carac = a;
    print(Producto)
});

*/