
    <script type="text/javascript" src="js/moves.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/elephantMove.js"></script>

    <script>
        $(document).ready(function() {
            // $('.dropdown-trigger').dropdown();
            $('.tabs').tabs();

            $(".usertrigger").click(function(){
                $("#userprofilemenu").addClass("closed");
            });

            $(".game_sec").click(function(){
                $("#userprofilemenu").removeClass("closed");
            });
        });
    </script>
    
</body>
</html>