<?php
session_start();
include('inc/action/function.php');
include('inc/action/db.php');
?>
<!DOCTYPE Html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="inc/css/style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src='inc/js/script.js'></script>
        </head>
    <header>
        <?php 
            if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){
                sessionBanner();
            }else{
                banner();
            }
        ?>
    </header>
    <body>
        <div class="container" id="container">
            <div class="tableau">
                <?php
                    $sql = "SELECT * FROM cases";
                    $query=$db->query($sql);
                    $result = $query->fetchAll();
                    for($i=0;$i < 300;$i++){
                        if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])){
                        ?>
                            <div class='case <?=$result[$i]['statut'];?>' onclick='clicker(this)'><input type='hidden' readonly value="<?=$result[$i]['id'];?>"><div class='image'></div></div>
                        <?php
                        }else{
                        ?>
                        <div class='case <?=$result[$i]['statut'];?>' onclick='errorLogIn()'><div class='image'></div></div>
            <?php
                        }} 
                ?>
        </div>
        </div>
    </body>
    <script type="text/javascript">
        function clicker(data){
            var value = data.childNodes[0].value;
            var remain = document.getElementsByClassName('remaining')[0];
            var solde = document.getElementsByClassName('solde')[0];
            var rest = document.getElementsByClassName('rest')[0];
            if(remain.value > 0){
            $.ajax({
				type : 'POST',
	            url : "inc/action/selected.php",
	            data: "id="+value,
	            dataType: 'json',
	            contentType:"application/x-www-form-urlencoded",
	         	processData: true,
	            success: function(data){
                    console.log(data)
                    remain.value = data[0]['case'];
                    solde.value = data[1]['solde'];
                    rest.value = data[2]['remaining']
                    location.reload();
                    
	            },
	                			
	    	});
            }else{
                alert('Vous n\'avez plus de case ! Revenez demain ou achetez-en')
            }
        }
        function errorLogIn(){
            alert('Vous n\'êtes pas connecté')
        }
    </script>
</html>