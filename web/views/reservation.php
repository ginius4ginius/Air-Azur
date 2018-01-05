<html>
  <?php include_once('head.php')?>
  <body>
    <div id="container">
      <?php include_once('header.php')?>
      <div>
        <h1>Réservations</h1>
        <div id="reservation_list">
        </div>          
      </div>
    </div>
    <?php include_once('foot.php')?>
  </body>
  <script>
    
    function deleteRes(gnc_id, rsr_num) {
      console.log( "delete %s, %s", gnc_id, rsr_num );
      if(confirm("Voulez-vous vraiment supprimer cette réservation ?")) {
        console.log( "delete %s, %s", gnc_id, rsr_num );
        //
        $.ajax({ url : '../controller/reservation.php?action=delete',
        //type : "POST",
        data: { gnc_id : gnc_id, rsr_num : rsr_num },
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
      }
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
      //
    });

  </script>  
</html>


