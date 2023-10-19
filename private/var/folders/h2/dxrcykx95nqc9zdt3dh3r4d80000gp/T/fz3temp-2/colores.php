<?php 
include_once("php/conexion.php");
if ($_GET["color"]){
$sql=new conectar();
$sql->mysqlsrv();
$queryd="select *,IF(color IS NULL or color = '', 'jpg.png', color) as Imagen2 from colores_zapatos where idcolores_zapatos=".$_GET["color"]."";
$resultadod=mysql_query($queryd) or die (mysql_error());
$rowd=mysql_fetch_array($resultadod);
}
?>
<!DOCTYPE html>
<html> 
  <head>
    <meta charset="utf-8">
  


     <link href="lib/kendoui/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="lib/kendoui/styles/kendo.default.min.css" rel="stylesheet" />
        <script src="lib/kendoui/js/jquery.min.js"></script>
    <script src="lib/kendoui/js/kendo.all.min.js"></script>
    <script src="lib/kendoui/js/cultures/kendo.culture.es-EC.min.js" type="text/javascript"> </script>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />   
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!-- Demo page code -->
    <style>
	h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 36px;
}
h2,
.h2 {
  font-size: 30px;
}
h3,
.h3 {
  font-size: 24px;
}
h4,
.h4 {
  font-size: 18px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 12px;
}
	</style>
    <style type="text/css">
        ul
        {
            display: block;
        }
        .textboxlist
        {
            cursor: text;
            width: 100%;
        }
        .textboxlist-ul
        {
            overflow: hidden;
            margin: 0;
            padding: 3px 4px 0;
            border: 1px solid #CCC;
            
        }
        .textboxlist-li
        {
            list-style-type: none;
            float: left;
            display: block;
            padding: 0;
            margin: 0 5px 3px 0;
            cursor: default;
        }
        .textboxlist-li-editable
        {
            border: 1px solid #fff;
        }
        .textboxlist-li-editable-input
        {
            border: 0;
            padding: 2px 0;
            padding-bottom: 0;
            height: 14px;
        }
        .textboxlist-li-editable-input:focus
        {
            outline: 0;
        }
        .textboxlist-li-box
        {
            position: relative;
            line-height: 18px;
            padding: 0 5px;
            border: 1px solid #CAD8F3;
            background: #DEE7F8;
            cursor: default;
        }
        .textboxlist-li-box-deletable
        {
            padding-right: 15px;
        }
        .textboxlist-li-box-deletebutton
        {
            position: absolute;
            right: 4px;
            top: 6px;
            display: block;
            width: 7px;
            height: 7px;
            font-size: 1px;
            background: url(  'img/close.gif' );
        }
        .textboxlist-li-box-deletebutton:hover
        {
            border: none;
            background-position: 7px;
            text-decoration: none;
        }
        div
        {
            display: block;
        }
    </style>
    <script language="javascript" type="text/javascript">

        $(document).ready(function () {
            var TypeHere = $("input[id$='TypeHere']");
            var txtValues = $("#txtValues");
            var liTypeHere = $("#liTypeHere");
            var mydivTextBox = $("#mydivTextBox");

            //Once the user clicks on div, set the focus on input box.
            mydivTextBox.click(function () {
                TypeHere.focus();
            });

           TypeHere.keypress(function (e) {
                switch (e.keyCode) {
                    case 188: // ','
                        // alert('done');
                        break;
                    default:
                        TypeHere.width(TypeHere.width() + 10);
                }
            });
            TypeHere.keyup(function (e) {
                switch (e.keyCode) {
                    case 8:  // Backspace
                        if (TypeHere.width() > 10) {
                            TypeHere.width(TypeHere.width() - 10);
                        }
                        break;
                    case 188: // ','
                        var myInputLength = TypeHere.val().length;
                        var myInputText = TypeHere.val().replace(',', ''); // remove ','
                        TypeHere.width(myInputLength * 6 + 15);
                        //Check for email validation.
                        //You can apply webservices for any type of validation.
                        
                        if (myInputText.length == 0) {
                            TypeHere.val('');
                            return false;
                        }
                        
                        //Create the list item on fly and apply the css
                        CreateLi(myInputText)
                        //Save into Textbox or HiddenField
                        var strValue = txtValues.val() + myInputText + ';';
                        $("#txtValues").val(strValue);
                        //Push the textbox to the right
                        TypeHere.width(myInputLength * 6 + 15);
                        //Make the input width to default and set as blank
                        liTypeHere.css('left', TypeHere.position().left + TypeHere.width() + 10);
                        TypeHere.val('');
                        TypeHere.width(10);
                        break;
                }
            });

            function CreateLi(strValue) {
                var strHTML = $("<li class='textboxlist-li textboxlist-li-box textboxlist-li-box-deletable'>" + strValue + "<a href='#' class='textboxlist-li-box-deletebutton' onClick='deltag($(this))'></a></li>");
                var size = $("#myListbox > li").size();
				
                if ($("#txtValues").val().length == 0) {
                    $("#myListbox").prepend(strHTML);
                }
                else {
				
                    $("#myListbox li:nth-child(" + size + ")").before($(strHTML));
                }

            }
        });
        //Adding a click event to a delete button.
        function deltag(e) {
            e.parent().remove();
			
            //Remove from the textbox of hidden field ...
            var txtValues = $("#txtValues");
            var strUpdate = txtValues.val();
			
            strUpdate = strUpdate.replace(e.parent().text() + ";", '');
            txtValues.val(strUpdate);

        };
    </script>
  </head>
  <body style="background:#FFFFFF">

                <table style="width:100%"><tr><td valign="top" style="padding:5px;width:100%">
                

                <h5>Nombre:</h5>
                <input id="descripcion" type="text" name="descripcion" value="<?php echo $rowd['nombre']; ?>" class="k-textbox" style="width: 100%; display:inline-block" /> <br> 
                
                                
                <h5>Imagen:</h5>
                <img id="image" style="width:250px; display:inline-block" src="images/<?php echo $rowd['Imagen2'] ?>"> 
                <input type="hidden" id="imagehidden" value="<?php echo $rowd['Imagen2'] ?>"><p></p>
                <div class="uploaddiv" style=" width:200px">
                <input name="archivo" id="upload" type="file"/>
                </div><br>
                <?php if ($_GET["color"]){?>
                    
                <?php $tallasa=explode(",",$rowd["tallas"]) ?>
                <h5>Tallas:</h5>
                 <select id="tallas" multiple="multiple" data-placeholder="Seleccione la talla...">
                    <?php for ($ta=20;$ta<=45;$ta++){ ?>
                    <option <?php if (in_array($ta,$tallasa)){ echo "selected"; } ?>><?php echo $ta ?></option>
                    
                    <?php } ?>
                </select>   
                <br>  
                    
                    
                <h5>Imagenes Slide:</h5>   
                <input name="archivo" id="slide" type="file"/>
                <div class="demo-section">
                    <div id="listView"></div>
                    <div id="pager" class="k-pager-wrap"></div>
                </div>
    			<p></p>
                <?php } ?>
                <?php if ($_GET["color"]){?>
                <button class="k-button" id="updateb" style="padding-top:5px">Update</button>
                <?php } else { ?>                
                <button class="k-button" id="guardar" style="padding-top:5px">Guardar</button>
                <?php } ?>
                
                </td></tr></table>
    </div>
<script type="text/x-kendo-template" id="template">
<div class="product">
	<img src="images/#= kendo.toString(imagen, 'n0') #" alt="#: imagen # image" />	
	<p>Arrastrar<a href="Javascript:"  onClick="deleteimg(#: idimagenes_zapatos #)"><i class="fa fa-times"></i></a></p>
</div>
</script> 
<script>
function deleteimg(idimg){
	$.ajax({
	  type: "GET",
	  url: 'php/delete.php',
	  data: {id:'imagenzapatos',idimg:idimg},
	  success: function(){ 	  		
	  		var listView = $("#listView").data("kendoListView");
			listView.dataSource.read(); 
	  },	
	});
}
$( "#limpiarc" ).click(function() {
  $("#image2").attr("src","images/jpg.png");
  $("#imagehidden2").val("")
});
$( "#updateb" ).click(function() {
    var tallas= $("#tallas").data("kendoMultiSelect");
  $.ajax({
	  type: "POST",
	  url: 'php/update.php',
	  data: {id:'colores_zapatos',talla:tallas.value().join(","),descripcion:$("#descripcion").val(),color:'<?php echo $_GET["color"] ?>',imagen:$("#imagehidden").val()},
	  success: function(){ 					
	  			alert ('El titulo y la descripcion se han actualizado')
				window.parent.$("#editwindow").data("kendoWindow").close(); 
			},	
	  error: function() {  alert( "Ha ocurrido un error" );}  
	});
});
$( "#guardar" ).click(function() {
  
  $.ajax({
	  type: "GET",
	  url: 'php/crear.php',
	  data: {id:'colores_zapatos',descripcion:$("#descripcion").val(),jerarquia:'<?php echo $_GET["jerarquia"] ?>',imagen:$("#imagehidden").val()},
	  success: function(){ 					
	  			alert ('Su registro ha sido grabado')
				window.parent.$("#editwindow").data("kendoWindow").close(); 
			},	
	  error: function() {  alert( "Ha ocurrido un error" );}  
	});
});
var onSelect = function(e) {
	if(e.files.length > 1) { 
            e.preventDefault();
            alert('Solo Puede escoger un archivo');
    }
    $.each(e.files, function(index, value) {
	  ok=[".jpg",".JPG",".gif",".GIF",".PNG",".png"]
      if($.inArray(value.extension,ok)==-1) {
        e.preventDefault();
        alert("Por favor cargue un archivo tipo imagen");
      }
    });
};
var onSelect2 = function(e) {
	if(e.files.length > 1) { 
            e.preventDefault();
            alert('Solo Puede escoger un archivo');
    } 
    
};
var onSuccess=function(e){
    
	$("#image").attr("src","images/"+e.response.newName+'?' + new Date().getTime());
	$("#imagehidden").val(e.response.newName)
}
var onSuccess3=function(e){
	$("#archivodiv").html(e.response.oldName);
	$("#archivohidden").val(e.response.newName+"/-/"+e.response.oldName)
}

var onSuccess2=function(e){
	$.ajax({
	  type: "GET",
	  url: 'php/crear.php',
	  data: {id:'imagenescolores',imagen:e.response.newName,color:'<?php echo $_GET["color"] ?>'},
	  complete: function(){ 
	  		var listView = $("#listView").data("kendoListView");
			listView.dataSource.read();;
	  },
	  
	});
}
function getFileInfo(e) {
	return $.map(e.files, function(file) {
		var info = file.name+'.'+file.extension;
		return info;
	}).join(", ");
}
$(document).ready(function() {
var defaultTools = kendo.ui.Editor.defaultTools;
defaultTools["insertParagraph"].options.shift = true;
$("#detalle").kendoEditor({
            tools: [
                "bold",
                "italic",
                "underline",
                "justifyLeft",
                "justifyCenter",
                "justifyRight",
                "justifyFull",
                "insertUnorderedList",
                "insertOrderedList",
                "indent",
                "outdent",
                "createLink",
                "unlink",
                "foreColor",
				"cleanFormatting",
            ]
        });
    
   
$("#tallas").kendoMultiSelect({
    autoClose: false
}).data("kendoMultiSelect");

kendo.bind($("#categoria"));
kendo.bind($("#propo"));
$("#slide").kendoUpload({
	async: {
		saveUrl: "php/subir-archivo.php",
		autoUpload: true,							
	},
	showFileList: false,
	select: onSelect2,
	upload: function (e) {
		var ext
		var date = new Date();
		$.each(e.files, function(index, value) {
		  ext=value.extension
		});		
		e.data = { id:"Subir",archivo:ext};
	},
	success: onSuccess2,
});	
 
var dsslide = new kendo.data.DataSource({
		transport: {
			read: {
				url: "php/read.php",
		dataType: "json",
		data:{id:"imagenescolores",idcolor:'<?php echo $_GET["color"] ?>'}
			}
		},
	});
$("#listView").kendoListView({
	dataSource: dsslide,
	template: kendo.template($("#template").html())
});
$("#listView").kendoSortable({
	filter: ">div.product",
	cursor: "move",
	placeholder: function(element) {
		return element.clone().css("opacity", 0.1);
	},
	hint: function(element) {
		return element.clone().removeClass("k-state-selected");
	},
	change: function(e) {

		var skip = dsslide.skip() || 0,					
			oldIndex = e.oldIndex +  skip,
			newIndex = e.newIndex + skip,
			data = dsslide.data(),
			dataItem = dsslide.getByUid(e.item.data("uid"));

			dsslide.remove(dataItem);
			dsslide.insert(newIndex, dataItem);
			
			data = dsslide.data();
			var x = JSON.stringify(data);
			//alert(x[0].idnoticiaimages)
			$.ajax({
			  type: "GET",
			  url: 'php/update.php',
			  data: {id:'indeximgzapatos',index:newIndex+1,paquetes:x},
			  //complete: function(){ alert (e.response)},	  
			});
	}
});
$("#upload").kendoUpload({
	async: {
		saveUrl: "php/subir-archivo.php",
		autoUpload: true,							
	},
	showFileList: false,
	select: onSelect,
	upload: function (e) {
		var ext
		var date = new Date();
		$.each(e.files, function(index, value) {
		  ext=value.extension
		});		
		e.data = { id:"Subir",archivo:ext};
	},
	success: onSuccess,
});
$("#archivo").kendoUpload({
	async: {
		saveUrl: "php/subir-archivo2.php",
		autoUpload: true,							
	},
	showFileList: false,
	select: onSelect2,
	upload: function (e) {
		var ext
		var date = new Date();
		$.each(e.files, function(index, value) {
		  ext=value.extension
		});		
		e.data = { id:"Subir",archivo:ext};
	},
	success: onSuccess3,
});		
$("#categoria").data('kendoDropDownList').value("<?php echo $rowd['categoria'] ?>");
<?php if ($rowd['categoria']){ ?>
$("#categoria").data('kendoDropDownList').enable(false);
<?php } ?>
$("#propo").data('kendoDropDownList').value("<?php echo $rowd['promopopular'] ?>");
});

</script>
<style>

.togglebox{
    z-index:2050;
    display:inline-block;
    border:1px solid #AAA;
    width:90px;
    height:26px;
    position:relative;
    left:4px;
    border-radius:0px;
    color:#FFF;
    font-weight:700;
    overflow:hidden;
    box-shadow:0 1px 0 #FFF;
}

.togglebox label{
    z-index:2050;
    width:200%;
    height:100%;
    line-height:30px;
    border-radius:.4em;
    position:absolute;
    top:0;
    left:0;
    z-index:1;
    font-size:1.1em;
    cursor:pointer;
    -webkit-transition:.12s;
    -moz-transition:.12s;
    transition:.12s;
}


.togglebox label::before{
    z-index:2050;
    content:'SI';
    width:62px;
    float:left;
    margin-right:-16px;
    padding-right:13px;
    text-align:center;
    background:#007FEA;
    text-shadow:0 -1px 0 #093B5C;
    box-shadow:0 4px 5px -2px rgba(0,0,0,0.3) inset;
}

.togglebox label b{
    z-index:2050;
    display:block;
    height:100%;
    width:30px;
    float:left;
    position:relative;
    z-index:1;
    border:1px solid #AAA;
    background:#F6F6F6;
    box-shadow:0 4px 0 -2px #F1F1F1 inset, 0 2em 2em -2em #AAA inset, 0 0 2px rgba(0,0,0,.5);
    border-radius:3px;
}

.togglebox label:hover b{
    z-index:2050;
    background:#E5E5E5;
}

.togglebox label::after{
    z-index:2050;
    content:'NO';
    width:62px;
    float:left;
    margin-left:-15px;
    padding-left:13px;
    text-align:center;
    color:#999;
    background:#FFF;
    box-shadow:0 4px 5px -2px rgba(0,0,0,0.3) inset;
}

.togglebox input:checked ~ label{
    z-index:2050;
    left:-60px;
}
</style>
<style scoped>
        .demo-section {
            border: 0;
            background: none;
        }
        #listView {
            padding: 10px;
            margin-bottom: -1px;
        }
        .product {
            float: left;
            position: relative;
            width: 111px;
            height: 170px;
            margin: 0;
            padding: 0;
        }
        .product img {
            width: 110px;
            height: 110px;
        }
		.product button {
            width: 110px;
			height:30px;
        }
        .product h3 {
            margin: 0;
            padding: 3px 5px 0 0;
            max-width: 96px;
            overflow: hidden;
            line-height: 1.1em;
            font-size: .9em;
            font-weight: normal;
            text-transform: uppercase;
            color: #999;
        }
        .product p {
            visibility: hidden;
        }
        .product:hover p {
			cursor:move;
            visibility: visible;
            position: absolute;
            width: 110px;
            height: 110px;
            top: 0;
            margin: 0;
            padding: 0;
			text-align:center;
            line-height: 110px;			           
            color:#FFFFFF;
            background-color: rgba(0,0,0,0.75);
            transition: background .2s linear, color .2s linear;
            -moz-transition: background .2s linear, color .2s linear;
            -webkit-transition: background .2s linear, color .2s linear;
            -o-transition: background .2s linear, color .2s linear;
        }
		.product:hover p a i {			
			color:#FFFFFF; position:absolute; margin:0px 15px        }
        .k-listview:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }
    </style>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
  
  </body>
</html>


