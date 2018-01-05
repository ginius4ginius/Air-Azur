<html>
  <?php include_once('head.php')?>
  <body>
    <div id="container">
      <?php include_once('header.php')?>
      <div>
        <h1>Réservations</h1>
        <div>
          Filtres réservations: 
          <button id="btn_getlist" >Valider</button>
        </div>
          
      </div>
      <div id="reservation_list"></div>
    </div>
    <?php include_once('foot.php')?>
  </body>
  <script>
    
    function deleteRes(sId) {
      console.log( "delete %s", sId );
    }

    function editRes(sId) {
      console.log( "edit %s", sId );
    }    

    function getPdf(sId) {
      console.log( "get pdf %s", sId );
    }

    $( document ).ready(function() {
      console.log( "ready to show reservations!" );
      $( "#menu_res" ).addClass('active');

      $("#btn_getlist").click(function(){
        console.log( "getting reservations!" );
        //
        $.ajax({ url : '../controller/reservation.php?action=getList',
          //type : "POST",
          dataType : "html",
          success : function(data) {
            console.log( "ajax call success");
            $("#reservation_list").html(data);
          },
          error : function(data) { 
            console.log( "ajax call error" );
            $("#reservation_list").html(" Ajax Error");
          }
        });
      });
      //

    });

  </script>  
</html>


