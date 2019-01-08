
<?php 
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['uid']))
    exit(header("location: login.php"));


include "includes/onlineheader.php" 


?>

<div class="game_sec" >
        <button class="startgamebtn btn" onclick="startgame(showIdx)" > Start Game</button>

        <div class="left_sec">
            <h5 style="padding-left: 12%;">Users List</h5>
            <hr style="border: 1px solid lightgrey;">
            <ul id="usrdisplay"></ul>
        
        </div>
    
        <div class="mid_sec">
        
        <div class="chessboard">

            <div class="white box" id="r8c1"><img id="b-r1" class="black-piece" src="Images/b-rook.png"></div>
            <div class="black box" id="r8c2"><img id="b-k1" class="black-piece" src="Images/b-knight.png"></div>
            <div class="white box" id="r8c3"><img id="b-b1" class="black-piece" src="Images/b-bishop.png"></div>
            <div class="black box" id="r8c4"><img id="b-q1" class="black-piece" src="Images/b-queen.png"></div>
            <div class="white box" id="r8c5"><img id="b-ki" class="black-piece" src="Images/b-king.png"></div>
            <div class="black box" id="r8c6"><img id="b-b2" class="black-piece" src="Images/b-bishop.png"></div>
            <div class="white box" id="r8c7"><img id="b-k2" class="black-piece" src="Images/b-knight.png"></div>
            <div class="black box" id="r8c8"><img id="b-r2" class="black-piece" src="Images/b-rook.png"></div>

            <!--2nd row    !-->
            <div class="black box" id="r7c1"><img id="b-p1" class="black-piece" src="Images/b-pawn.png"></div>
            <div class="white box" id="r7c2"><img id="b-p2" class="black-piece" src="Images/b-pawn.png"></div>
            <div class="black box" id="r7c3"><img id="b-p3" class="black-piece" src="Images/b-pawn.png"></div>
            <div class="white box" id="r7c4"><img id="b-p4" class="black-piece" src="Images/b-pawn.png"></div>
            <div class="black box" id="r7c5"><img id="b-p5" class="black-piece" src="Images/b-pawn.png"></div>
            <div class="white box" id="r7c6"><img id="b-p6" class="black-piece" src="Images/b-pawn.png"></div>
            <div class="black box" id="r7c7"><img id="b-p7" class="black-piece" src="Images/b-pawn.png"></div>
            <div class="white box" id="r7c8"><img id="b-p8" class="black-piece" src="Images/b-pawn.png"></div>

            <!-- 3rd row !-->
            <div class="white box" id="r6c1"></div>
            <div class="black box" id="r6c2"></div>
            <div class="white box" id="r6c3"></div>
            <div class="black box" id="r6c4"></div>
            <div class="white box" id="r6c5"></div>
            <div class="black box" id="r6c6"></div>
            <div class="white box" id="r6c7"></div>
            <div class="black box" id="r6c8"></div>

            <!-- 4th row !-->
            <div class="black box" id="r5c1"></div>
            <div class="white box" id="r5c2"></div>
            <div class="black box" id="r5c3"></div>
            <div class="white box" id="r5c4"></div>
            <div class="black box" id="r5c5"></div>
            <div class="white box" id="r5c6"></div>
            <div class="black box" id="r5c7"></div>
            <div class="white box" id="r5c8"></div>

            <!-- 5th row !-->
            <div class="white box" id="r4c1"></div>
            <div class="black box" id="r4c2"></div>
            <div class="white box" id="r4c3"></div>
            <div class="black box" id="r4c4"></div>
            <div class="white box" id="r4c5"></div>
            <div class="black box" id="r4c6"></div>
            <div class="white box" id="r4c7"></div>
            <div class="black box" id="r4c8"></div>

            <!-- 6th row !-->
            <div class="black box" id="r3c1"></div>
            <div class="white box" id="r3c2"></div>
            <div class="black box" id="r3c3"></div>
            <div class="white box" id="r3c4"></div>
            <div class="black box" id="r3c5"></div>
            <div class="white box" id="r3c6"></div>
            <div class="black box" id="r3c7"></div>
            <div class="white box" id="r3c8"></div>

            <!-- 7th row !-->
            <div class="white box" id="r2c1"><img id="w-p1" class="white-piece" src="Images/w-pawn.png"></div>
            <div class="black box" id="r2c2"><img id="w-p2" class="white-piece" src="Images/w-pawn.png"></div>
            <div class="white box" id="r2c3"><img id="w-p3" class="white-piece" src="Images/w-pawn.png"></div>
            <div class="black box" id="r2c4"><img id="w-p4" class="white-piece" src="Images/w-pawn.png"></div>
            <div class="white box" id="r2c5"><img id="w-p5" class="white-piece" src="Images/w-pawn.png"></div>
            <div class="black box" id="r2c6"><img id="w-p6" class="white-piece" src="Images/w-pawn.png"></div>
            <div class="white box" id="r2c7"><img id="w-p7" class="white-piece" src="Images/w-pawn.png"></div>
            <div class="black box" id="r2c8"><img id="w-p8" class="white-piece" src="Images/w-pawn.png"></div>

            <!-- 8th row !-->
            <div class="black box" id="r1c1"><img id="w-r1" class="white-piece" src="Images/w-rook.png"></div>
            <div class="white box" id="r1c2"><img id="w-b1" class="white-piece" src="Images/w-knight.png"></div>
            <div class="black box" id="r1c3"><img id="w-k1" class="white-piece" src="Images/w-bishop.png"></div>
            <div class="white box" id="r1c4"><img id="w-q1" class="white-piece" src="Images/w-queen.png"></div>
            <div class="black box" id="r1c5"><img id="w-ki" class="white-piece" src="Images/w-king.png"></div>
            <div class="white box" id="r1c6"><img id="w-k2" class="white-piece" src="Images/w-bishop.png"></div>
            <div class="black box" id="r1c7"><img id="w-b2" class="white-piece" src="Images/w-knight.png"></div>
            <div class="white box" id="r1c8"><img id="w-r2" class="white-piece" src="Images/w-rook.png"></div>

        </div>
        
        </div>
        <!-- .left_sec -->

        <div class="right_sec">
            <div class="stepsbox">
                <span style="margin-bottom: 100px;">Game ID - 
                <span id="gameidx"></span>
                </span>
                <div style="margin-bottom: 50px;">
                    <form method="post" id="gameidform">
                        <input type="text" placeholder="Enter Game ID" style="border: 1px solid grey; height: 2em; width:45%"> 
                        <button type="submit" style="height:2em;">Sub</button>
                    </form>
                </div>
              

                <div class="stepsContainer" >
                    
                    <div class="stepsControlBtns">
                        <!-- <button type="button"  value="backward" id="skip_prev_btns" onclick="return forward()">
                            <i class="material-icons">skip_previous</i>
                        </button>
                        <button type="button"  value="forward" id="skip_next_btns" onclick="return backward()">
                            <i class="material-icons">skip_next</i>
                        </button> -->
                        
                        <?php if (isset($_GET['gameid'])): ?>

                        <button type="button" value="forward" class="btn" onclick="return rewindgame(<?= $_GET['gameid'] ?>)">
                            Replay Game
                        </button>

                        <?php endif; ?>

                    </div>
                    <hr style="margin:0">
                    <div class="steps" id="stepsshow">
                    <table>
                        <tr>
                            <th>Drag From</th>
                            <th>Drop To</th>
                            <th>Drag Ele</th>
                        </tr>
                    </table>
                    <table id="stepstable">
                    </table>    
                    </div>
                </div>


              
            </div>
            <!-- .stepsbox -->
        
        </div>
        <!-- .right_sec -->

    </div>
    <!-- .game_sec -->
    <script>
        // $(document).ready(()=>{
        document.addEventListener("DOMContentLoaded", function(){

            $ = jQuery;
            showIdx = function(id){
                
                $("#gameidx").html(id)
            }
            $("form").on("submit", function(ev){
                ev.preventDefault();
                gameId = $("#gameidform input").val();
                // startgame(myid,showIdx);
                prepare_pieces();
                // return false;
                
            })  
            data = [];
                moveInt = setInterval(function() {
                    console.log("AllidMoves")
                    $.post("./database/allidmoves.php", {gameid: gameId})
                    .always(function(d){
                        console.log("came inside d:"+d);
                        d = JSON.parse(d);
                        // console.log(d.data)
                        if(d.data.length%2)
                            turn = 1;
                        else
                            turn = 0;
                            random_move();
                        if(data.length != d.data.length){
                            // strMove = curMove.dragFrom + curMove.dropto;
                            
                            for(i = data.length-1; i < d.data.length; i++){
                                if(i==-1)i=0;
                                curMove = d.data[i];  

                                theAmazingMover(curMove.dragfrom, curMove.dropto)
                            }
                            console.log(curMove.dragfrom, curMove.dropto)
                           
                            // afunction("r2")
                            // {"id":"1048","uid":"8","gameid":"24","dragfrom":"r2c6","dropto":"r4c6","dragele":"w-p6"}
                        }
                        data.push( curMove);
                    })
                }, 500);
               
                
            })

            function theAmazingMover(from, to){      
                console.log(from)
                var from_img = document.getElementById(from);
                var to_img = document.getElementById(to);
                console.log(from_img, to_img)
                var piece_id = document.getElementById(from_img.childNodes[0].id);

                console.log("to_img:" +to_img);
                console.log(from_img);
                console.log(piece_id);
                
                piece_id.remove(piece_id);
                
                
                var fur_node = to_img.appendChild(piece_id);
                console.log("fur_node:" +fur_node);
                
                var parent = document.getElementById(to_img.id);

                console.log("parent moving: " +parent.id);
                if(parent)
                child = document.getElementById(parent.childNodes[0].id)
                if(parent != null)
                {
                    parent.replaceChild(fur_node,child);
                }

                console.log("delet: "+piece_id);
            }
            </script>




<?php include "includes/onlinefooter.php"


?>