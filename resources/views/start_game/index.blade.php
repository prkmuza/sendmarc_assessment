

@include('layouts.includes.head')

<main class="mdl-layout__content">



  <div class="site-content">

   <div class="container">

     <div class="mdl-grid site-max-width" style="min-width: 300px;">

      <h3 style="width:100%;"> 
        <text style="color:#1E3D79;">Home</text> &nbsp; <i class="fas fa-angle-right" style="    font-size: 18px;"></i> &nbsp; Start Game
      </h3>


    <div class="player_items_width" style="float:left;margin-right: 10px; border-right: solid 1px #000; padding-right: 10px;">

       <div style="float:right;max-width:48%;">
        Player 1
       </div>
       <div style="clear:both;"></div>
      <div id="player_1_score" style="float:right;max-width:48%;font-weight: 600;">
        Score (<text id="player_1_score_text">Love All</text>)
      </div>
       <div style="clear:both;"></div>
      <div id="player_1_points" style="float:right;max-width:48%;font-weight: 600;">
        Points: <text id="player_1_points_text">0</text>
      </div>

    </div>

    <div class="player_items_width" style="float:right;">

       <div style="float:left;width:48%;">
        Player 2
       </div>
       <div style="clear:both;"></div>
      <div id="player_2_score" style="float:left;width:48%;font-weight: 600;">
        Score (<text id="player_2_score_text">Love All</text>)
      </div>
       <div style="clear:both;"></div>
      <div id="player_2_points" style="float:left;width:48%;font-weight: 600;">
        Points: <text id="player_2_points_text">0</text>
      </div>

    </div>

      <div style="clear:both;"></div>

    <div style="width:98%;min-height:300px;background-color: green;max-height: 330px;">

        <div id="courtImg" style="min-width:150px;background-color: #207516;margin:0 auto;height: 100%;text-align: center;">
           <img src="{{ asset('SiteImages/court.png') }}" height="100%">
        </div>

        <div id="scoreboardResponse" style="width:150px;background-color: #fff;color:#000;margin:0 auto;height: 23px; margin-top: 20px;padding:5px;text-align: center;font-weight: 600;bottom: 70px; position: relative;">
        </div>

    </div>

    <div style="clear:both;"></div>

    <div style="float:left;width:48%; border-right:solid 1px #000;">

       <div id="player_1_addpoint" class="points_btn" style="float:right;margin-right:20px;" onclick="addpoint(1);">
        + Add Point
       </div>
       <div id="player_1_addpoint_loading"  style="float:right;margin-right:20px;display:none;">
        ...
       </div>

       <div style="clear:both;"></div>

    </div>

    <div style="float:right;width:48%;">

       <div id="player_2_addpoint" class="points_btn" style="float:left;margin-left:20px;" onclick="addpoint(2);">
        + Add Point
       </div>
       <div id="player_2_addpoint_loading"  style="float:left;margin-left:20px;display:none;">
        ...
       </div>

       <div style="clear:both;"></div>

    </div>

    <div style="clear:both;"></div>

        <div style="float:right;width:96%;">

           <div id="Reset_Game_btn" class="points_btn" style="margin:0 auto;width:110px;" onclick="ResetGame();">
            &#8635; Reset Game
           </div>

        </div>

    </div>


</div>

        </div>

<script>

  function addpoint(PlayerID){

    
    $("#player_"+PlayerID+"_addpoint").hide();
    $("#player_"+PlayerID+"_addpoint_loading").show();
    $("#player_"+PlayerID+"_addpoint_loading").html("<img src='{{ asset('SiteImages/loading.gif') }}'  height='30px;'> Working...");

  var TotalPlayer1Points =  $("#player_1_points_text").html();

    var TotalPlayer2Points =  $("#player_2_points_text").html();
       
                    var xhttp4 = new XMLHttpRequest();
              xhttp4.onreadystatechange = function() {
              if (xhttp4.readyState == 4 && xhttp4.status == 200) {

                $("#player_"+PlayerID+"_addpoint").show();
                $("#player_"+PlayerID+"_addpoint_loading").hide();

              var responseText = xhttp4.responseText;

                // Parse JSON response
                var JsonObject = JSON.parse(responseText);

                 $("#scoreboardResponse").html(JsonObject.scoreboard);
                 $("#player_1_points_text").html(JsonObject.player1.points);
                 $("#player_2_points_text").html(JsonObject.player2.points);
                 $("#player_1_score_text").html(JsonObject.player1.points_text);
                 $("#player_2_score_text").html(JsonObject.player2.points_text);

                 if(JsonObject.isComplete){
                  $("#player_1_addpoint").hide();
                  $("#player_2_addpoint").hide();
                 }

                }

            };
            xhttp4.open("GET", "/api/add_point/"+PlayerID+"/"+TotalPlayer1Points+"/"+TotalPlayer2Points, true);
            xhttp4.send();

  }

  function ResetGame(){

      $("#player_1_addpoint").show();
      $("#player_2_addpoint").show();

       $("#player_1_points_text").html("0");
       $("#player_2_points_text").html("0");
       $("#player_1_score_text").html("Love All");
       $("#player_2_score_text").html("Love All");

       $("#scoreboardResponse").html("");

  }

</script>        

@include('layouts.includes.foot')