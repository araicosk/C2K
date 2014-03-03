<?php include('../templates/header.php'); ?>
<div id="areatrabajo">
   <div id="h2empresa1"> Tienda Virtual C2K (beta 1)</div>
   
   <div id="ShopContenedor" class="fluid">
   
    <div id="ShopMenu" class="fluid">
      
      <div id="A2" class="fluid ShopItem">
     
      <div id="A2anim" class="fluid ItemAnim">
      <div>
        Este es el contenido de la etiqueta Div de diseno "ItemAnim"
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logoadministrador.png" alt=""/></p>   
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        Este es el contenido de la etiqueta Div de diseno "ItemAnim"
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logocontafiscal.png" alt=""/></p>  
      </div>
      </div>
      
      
      <div id="Nom" class="fluid ShopItem">
        <div id="Nanim" class="fluid ItemAnim">
      <div>
        Este es el contenido de la etiqueta Div de diseno "ItemAnim"
       </div> 
      </div>
      <div class="fluid ShopItemContent">
        <p><img src="../imagenes/lgs128/logonomina.png" alt=""/></p>
        </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/acfdi_2.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logobancos.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logocrm.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logofe.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logologista.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logobv.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logopv.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logopr.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logochecador.png" alt=""/></p>  
      </div>
      </div>
      
      <div id="CF" class="fluid ShopItem">
     
      <div id="CFanim" class="fluid ItemAnim">
      <div>
        <p>Este es el contenido de la etiqueta Div de diseno "ItemAnim"</p>
       </div> 
      </div>
         <div class="fluid ShopItemContent">
           <p><img src="../imagenes/lgs128/logoca.png" alt=""/></p>  
      </div>
      </div>
      
      
    </div>
  </div>
    
   
</div>

<script>
$(function(){
		$("#CF").hover( function(){
			$("#CFanim").animate({ height: "toggle"}, 1000)
	$("#CFanim").css( {"display": "block",
	"border-color": "#ff0000",
	});				
	});	
	
	$("#Nom").hover( function(){
			$("#Nanim").animate({ width: "toggle"})
	$("#Nanim").css( {"display": "block",
	"border-color": "#0000ff",
	});				
	});	
	
	
			
});

</script>

<script>
$(function(){
		$("#menuEmpresa").addClass("seleccionado");
					
				
});

</script>
<?php include('../templates/footer.php'); ?>