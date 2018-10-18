<?php
$idEstadoAtivo = $estado->id_estado;
?>
 <script>
     $("#id_estado").change(function() {
         var estadoSelecionado = $("#id_estado :selected").val();
         $("#svg-map").find(".estado_mapa").each(function (){
             var id = $(this).attr("id");
             if(id == estadoSelecionado ){


             }
         });
     });

 </script>