<!-- Footer -->

<footer class="sticky-footer bg-white fixed-buttom">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Pesantren Al-Quran Mah'ad Mataqu</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->


<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin untuk Logout ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" jika anda ingin keluar sekarang </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.4.4/randomColor.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js
"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.pkgd.min.js"></script>

<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/sb-admin-2.min.js"> </script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>



<!-- Page level custom scripts -->

<!-- AJAX dan JQ-->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);

    });




    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');


        $.ajax({
            url: "<?= base_url('admin/changeakses'); ?>",
            type: 'post',
            data: {
                'menuId': menuId,
                'roleId': roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/role_akses/'); ?>" + roleId;
            }
        });
    });
    $(function() {
        $('textarea').froalaEditor()
    });

    $(document).ready(function() {
        $('#table_id').DataTable();


    });
    var output = document.getElementById('output'),
        can = document.getElementById('c'),
        ctx = can.getContext('2d'),

        player = document.createElement('audio'),
        audio = document.createElement('audio'),
        context = new AudioContext(),
        analyser = context.createAnalyser(),
        animationFrame = null,

        sensitivity = 8,
        changeColor = true,
        lastFrequencyData = [];

    document.body.appendChild(player);
    source = context.createMediaElementSource(audio);
    source.connect(analyser);

    function stopEvent(event) {
        event.preventDefault();
        event.stopPropagation();
    }

    function windowResize() {
        can.width = window.innerWidth;
        can.height = window.innerHeight;
        ctx.fillStyle = randomColor({
            alpha: 0.1
        });
        ctx.strokeStyle = randomColor({
            alpha: 0.1
        });
    }
    window.onresize = windowResize;
    windowResize();

    /**
     * Reduce un array al tamaño deseado haciendo la media
     * de las partes que quedan.
     *
     * Ejemplo para tamaño 2:
     * [1, 1, 2, 2] => [1, 2]
     * [2, 4, 5, 5] => [3, 5]
     */
    function reduce(array, size) {
        if (size >= array.length) {
            return array;
        }
        var newArray = [],
            step = parseInt(array.length / size);

        for (var i = 0; i < array.length; i += step) {
            var sum = 0;
            for (var j = 0; j < step && (i + j) < array.length; j++) {
                sum += array[i + j];
            }
            newArray.push(parseInt(sum / step));
        }

        return newArray;
    }

    function calculateCoordinates(frequencyData, colWidth, colHeight) {
        return frequencyData.map((value, index) => ({
            x: parseInt(index * colWidth, 10),
            y: can.height - 10 - value * colHeight
        }));
    }

    function getDelta(frequencyData) {
        let delta = 0;
        let valueCount = 0;
        for (let i = 0; i < frequencyData.length; i++) {
            if (frequencyData[i] > sensitivity) {
                delta += Math.abs(frequencyData[i] - lastFrequencyData[i]);
                valueCount += 1;
            }
        }
        return parseInt(delta / valueCount, 10);
    }

    function renderFrame(audio, analyser) {
        const valueCount = Math.min(can.width / 10, 32);

        var colWidth = can.width / valueCount,
            colHeight = can.height / 255;

        var frequencyData = new Uint8Array(analyser.frequencyBinCount);
        analyser.getByteFrequencyData(frequencyData);
        reducedFrequencyData = reduce(frequencyData, valueCount);

        const points = calculateCoordinates(reducedFrequencyData, colWidth, colHeight);
        const delta = getDelta(frequencyData);
        lastFrequencyData = frequencyData;

        if (delta >= sensitivity && changeColor) {
            ctx.fillStyle = randomColor({
                alpha: 0.1
            });
            ctx.strokeStyle = randomColor({
                alpha: 0.1
            });
            changeColor = false;
            setTimeout(() => {
                changeColor = true
            }, 1000);
        }

        ctx.beginPath();
        ctx.moveTo(-10, points[0].y);
        for (var i = 1; i < points.length - 2; i++) {
            const p1 = points[i];
            const p2 = points[i + 1];
            const x1 = p1.x;
            const y1 = p1.y;
            const xc = parseInt((p1.x + p2.x) / 2, 10);
            const yc = parseInt((p1.y + p2.y) / 2, 10);
            ctx.quadraticCurveTo(x1, y1, xc, yc);
        }
        ctx.quadraticCurveTo(
            points[i].x,
            points[i].y,
            can.width + 10,
            points[i + 1].y
        );
        ctx.lineTo(can.width + 10, can.height);
        ctx.lineTo(-10, can.height);
        ctx.closePath();
        ctx.fill();
        ctx.stroke();

        if (audio.paused === false) {
            animationFrame = requestAnimationFrame(function() {
                renderFrame(audio, analyser);
            });
        }
    }

    function playAudio(url, name) {
        audio.autoplay = player.autoplay = true;
        audio.src = player.src = url;
        audio.play();
        player.play();
        $('h1').html(name);
        cancelAnimationFrame(animationFrame);
        renderFrame(audio, analyser);
    }

    function dropAudio(event) {
        stopEvent(event);
        var file = event.originalEvent.dataTransfer.files[0],
            url = URL.createObjectURL(file);
        playAudio(url, file.name);
    }

    $(window)
        .on('dragover', stopEvent)
        .on('dragenter', stopEvent)
        .on('drop', dropAudio);
</script>
</body>

</html>