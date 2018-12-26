<?php include "includes/header.php" ?>
    
    <div class="game_sec">
    
        <div class="left_sec">
        
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
            <div class="white box" id="r1c2"><img id="w-b1" class="white-piece" src="Images/w-bishop.png"></div>
            <div class="black box" id="r1c3"><img id="w-k1" class="white-piece" src="Images/w-knight.png"></div>
            <div class="white box" id="r1c4"><img id="w-q1" class="white-piece" src="Images/w-queen.png"></div>
            <div class="black box" id="r1c5"><img id="w-ki" class="white-piece" src="Images/w-king.png"></div>
            <div class="white box" id="r1c6"><img id="w-k2" class="white-piece" src="Images/w-knight.png"></div>
            <div class="black box" id="r1c7"><img id="w-b2" class="white-piece" src="Images/w-bishop.png"></div>
            <div class="white box" id="r1c8"><img id="w-r2" class="white-piece" src="Images/w-rook.png"></div>

        </div>
        
        </div>
        <!-- .left_sec -->

        <div class="right_sec">

            <div class="stepsbox">
                <div class="timer">
                    <span class="gametime">2:00</span>
                </div>

                <div class="stepsContainer" >
                    <h5 style="position: absolute; top:0;">User 1</h5>

                    <div class="steps" id="stepsshow">
                    <table>
                        <tr>
                            <th>Drag From</th>
                            <th>Drop To</th>
                        </tr>
                    </table>
                    <table id="stepstable">
                    </table>    
                    </div>

                    <h5 style="position: absolute; bottom:0;">User 2</h5>
                </div>


                <div class="timer">
                    <span class="gametime">2:00</span>
                </div>
            </div>
            <!-- .stepsbox -->
        
        </div>
        <!-- .right_sec -->

    </div>
    <!-- .game_sec -->




<?php include "includes/footer.php"


?>