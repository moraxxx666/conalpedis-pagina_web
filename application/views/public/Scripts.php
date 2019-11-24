<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        //Slider
        var elems = document.querySelectorAll('.slider');
        var instances = M.Slider.init(elems, {});
        //Responsive menu
        var elems2 = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems2, {});
        //Dropdown menu
        var elems3 = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems3, {
            coverTrigger: false
        });
        //AgrandarImagenes
        var elems = document.querySelectorAll('.materialboxed');
        var instances = M.Materialbox.init(elems, {});
        //Collapsible
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems, {});
        // Select forms
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, {});
    });
</script>
<?php if ($this->session->flashdata('mensaje')) { ?>
    <script>
        M.toast({
            html: '<?php echo $this->session->flashdata('mensaje'); ?>'
        });
    </script>
<?php } ?>
<script>
    let floating = document.querySelectorAll('.fixed-action-btn');
    M.FloatingActionButton.init(floating, {
        hoverEnabled: false,

    });
</script>
<script>
    let donde = $("*");
    var sizeFuenteActual = donde.css('font-size');

    function AumentarLetra() {

        var sizeFuenteActual = donde.css('font-size');
        var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
        var sizeFuenteNuevo = sizeFuenteActualNum * 1.2;
        donde.css('font-size', sizeFuenteNuevo);

    }

    function ReducirLetra() {

        var sizeFuenteActual = donde.css('font-size');
        var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
        var sizeFuenteNuevo = sizeFuenteActualNum * 0.8;
        donde.css('font-size', sizeFuenteNuevo);

    }

    function pantallaCompleta() {
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen()
        }
        if (document.documentElement.msRequestFullscreen) {
            document.documentElement.msRequestFullscreen()
        }
        if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen()
        }
        if (document.documentElement.webkitRequestFullScreen) {
            document.documentElement.webkitRequestFullScreen()
        }
        if (typeof window.ActiveXObject !== "undefined") {
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}")
            }
        }
    }

    function decir() {
        let cuerpo = document.getElementsByTagName('main');
        var utterance = new SpeechSynthesisUtterance(cuerpo[0].innerText);
        speechSynthesis.speak(utterance);
    }
</script>

</body>

</html>