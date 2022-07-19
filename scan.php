
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>QR Code Scanner</title>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=description content="QR Code Scanner is the fastest and most user-friendly web application.">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="QR Scanner" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#e4e4e4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="QR Scanner" />
    <meta name="msapplication-TileColor" content="#e4e4e4" />
    <meta name="msapplication-TileImage" content="https://qrcodescan.in/images/touch/mstile-150x150.png" />
    <meta name="theme-color" content="#e4e4e4" />
    <link rel="apple-touch-icon" href="https://qrcodescan.in/images/touch/apple-touch-icon.jpg" />
    <link rel="icon" type="image/png" href="https://qrcodescan.in/images/touch/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="https://qrcodescan.in/images/touch/favicon-16x16.png" sizes="16x16" />
    <link rel="shortcut icon" href="https://qrcodescan.in/images/touch/favicon.ico">
    <link rel="manifest" href="https://qrcodescan.in/manifest.json">
    <link rel="stylesheet" href="https://qrcodescan.in/bundle.css">
    <link rel="preload" as="script" href="https://qrcodescan.in/decoder.js">
  </head>
  <body>
    <div class="app__layout">
      <!-- Header -->
      <header class="app__header">
      </header>

      <main class="app__layout-content">
        <video autoplay></video>

        <!-- Dialog for result  -->
        <div class="app__dialog app__dialog--hide">
          <div class="app__dialog-content">
            <h1>Apakah Anda Yakin Memilih Meja Ini?</h1>
            
            <input type="text" id="result" style="display: none;">
          </div>
          <div class="app__dialog-actions">
            <button type="button" class="app__dialog-open" onclick="MyFunction()" style="display: block;">Yakin</button><br>
            <button type="button" class="app__dialog-close" id="close">Batalkan</button>
          </div>
        </div>

        <div class="app__dialog-overlay app__dialog--hide"></div>

       

        <div class="app__infodialog-overlay app__infodialog--hide"></div>

        <!-- Snackbar -->
        <div class="app__snackbar"></div>
      </main>
    </div>
    <div class="app__overlay">
      <div class="app__overlay-frame"></div>
      <!-- Scanner animation -->
      <svg class="app__scanner-img"  width="310" height="310" viewBox="0 0 215 215" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Artboard" transform="translate(-146.000000, -58.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g id="scanner" transform="translate(146.000000, 58.000000)">
              <path d="M169.272388,200.559701 L169.272388,194.141791 L169.272388,200.559701 Z M206.977612,169.272388 L213.395522,169.272388 L206.977612,169.272388 Z M197.751866,196.548507 L195.386866,194.380056 L197.751866,196.548507 Z M177.294776,215 C182.766045,215 188.646455,214.846772 193.977332,213.800653 C199.295373,212.757743 204.460187,210.752948 208.139254,206.739347 L203.409254,202.402444 C201.047463,204.977631 197.426959,206.583713 192.741884,207.503078 C188.07125,208.420037 182.731549,208.58209 177.294776,208.58209 L177.294776,215 Z M208.139254,206.739347 C211.515877,203.057071 213.159664,197.946007 214.013246,192.871045 C214.876455,187.740728 215,182.195653 215,177.294776 L208.58209,177.294776 C208.58209,182.153134 208.452127,187.240933 207.684384,191.806474 C206.907015,196.426567 205.543209,200.074347 203.409254,202.402444 L208.139254,206.739347 L208.139254,206.739347 Z M200.559701,37.7052239 L194.141791,37.7052239 L200.559701,37.7052239 Z M196.548507,9.22574627 L194.380056,11.5907463 L196.548507,9.22574627 Z M215,37.7052239 C215,32.2339552 214.846772,26.3535448 213.800653,21.0226679 C212.757743,15.7046269 210.752948,10.5398134 206.739347,6.86074627 L202.402444,11.5907463 C204.977631,13.9525373 206.583713,17.573041 207.503078,22.2581157 C208.420037,26.9295522 208.58209,32.2684515 208.58209,37.7052239 L215,37.7052239 Z M206.739347,6.86074627 C203.057071,3.48412313 197.946007,1.84033582 192.871045,0.986753731 C187.740728,0.123544776 182.195653,5.32907052e-15 177.294776,5.32907052e-15 L177.294776,6.41791045 C182.153134,6.41791045 187.240933,6.54787313 191.806474,7.31561567 C196.426567,8.09298507 200.074347,9.45759328 202.402444,11.5915485 L206.739347,6.86074627 Z M6.41791045,169.272388 L12.8358209,169.272388 L6.41791045,169.272388 Z M37.7052239,206.977612 L37.7052239,213.395522 L37.7052239,206.977612 Z M10.4291045,197.751866 L12.597556,195.386866 L10.4291045,197.751866 Z M-2.39808173e-14,177.294776 C-2.39808173e-14,182.766045 0.152425373,188.646455 1.19934701,193.977332 C2.24225746,199.295373 4.24705224,204.460187 8.26065299,208.139254 L12.597556,203.409254 C10.0223694,201.047463 8.41628731,197.426959 7.49692164,192.741884 C6.57996269,188.07125 6.41791045,182.731549 6.41791045,177.294776 L-2.39808173e-14,177.294776 Z M8.26065299,208.139254 C11.9429291,211.515877 17.0539925,213.159664 22.1289552,214.013246 C27.2600746,214.876455 32.8051493,215 37.7052239,215 L37.7052239,208.58209 C32.8468657,208.58209 27.7590672,208.452127 23.1943284,207.684384 C18.5734328,206.907015 14.925653,205.543209 12.597556,203.409254 L8.26065299,208.139254 L8.26065299,208.139254 Z M37.7052239,6.41791045 L37.7052239,12.8358209 L37.7052239,6.41791045 Z M9.22574627,10.4291045 L11.5907463,12.597556 L9.22574627,10.4291045 Z M37.7052239,0 C32.2339552,0 26.3535448,0.152425373 21.0226679,1.19934701 C15.7046269,2.24225746 10.5398134,4.24705224 6.86074627,8.26065299 L11.5907463,12.597556 C13.9525373,10.0223694 17.573041,8.41628731 22.2581157,7.49692164 C26.9295522,6.57996269 32.2684515,6.41791045 37.7052239,6.41791045 L37.7052239,0 Z M6.86074627,8.26065299 C3.48412313,11.9429291 1.84033582,17.0539925 0.986753731,22.1289552 C0.123544776,27.2600746 -1.42108547e-14,32.8051493 -1.42108547e-14,37.7052239 L6.41791045,37.7052239 C6.41791045,32.8468657 6.54787313,27.7590672 7.31561567,23.1943284 C8.09298507,18.5734328 9.45759328,14.925653 11.5915485,12.597556 L6.86074627,8.26065299 Z" id="Shape"></path>
            </g>
          </g>
        </g>
      </svg>
      <div class="custom-scanner">
      </div>
      <div class="app__help-text"></div>
    </div>
    

    <script async src="https://cdn.jsdelivr.net/npm/pwacompat@2.0.6/pwacompat.min.js" integrity="sha384-GOaSLecPIMCJksN83HLuYf9FToOiQ2Df0+0ntv7ey8zjUHESXhthwvq9hXAZTifA"
      crossorigin="anonymous">
    </script>
    <script src="lib/qrcode/bundle.js?v=2"></script>
  
        <audio id="beepAudio">
            <source src="audio/beep.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    
      <input type="hidden" id="command" value="<?php echo $_GET['p']; ?>">

  </body>

  <script type="text/javascript" src="https://e-lpj.ukmldkmajelisjihad.org/admin/assets/js/jquery-1.12.2.min.js"></script>
  <script type="text/javascript">
    function MyFunction() {
      
    var type    = $("#command").val();
    var result  = $("#result").val();

    window.location.href = "scan-get.php?meja="+result;

    }
  </script>
</html>
