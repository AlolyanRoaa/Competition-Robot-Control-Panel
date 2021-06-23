<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>Panel Control interface</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <section class="sec">
            
            <form action="db.in.php" method="post">
                <div class="toggle"></div>
                 <div class="wrap"> 
                     <div class="item">
                         <input type="submit" value="Forward" id="forward" name="forward" class="on-top">
                     </div>
                     <div class="item">
                         <input type="submit" value="Left" id="left" name="left" class="on-lin">
                     </div>
                     
                     <div class="item">
                         <input type="submit" value="Stop" id="stop" name="stop" class="on-lin" >
                     </div>
                     
                     <div class="item">
                         <input type="submit" value="Right" id="right" name="right" class="on-lin">
                     </div>
                     
                     <div class="item">
                         <input type="submit" value="Backward" id="backward" name="backward" class="on-down">
                     
                     </div>
                  </div>
            
            
            
            </form>
        </section>
    
    <script>
        const sec = document.querySelector('.sec');
        const toggle = document.querySelector('.toggle');
        toggle.onclick = function(){
            sec.classList.toggle('dark');
        }
    </script>
    
    
    
    
    </body>

</html>