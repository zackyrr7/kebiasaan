<script>
    document.addEventListener("DOMContentLoaded", function() {


        $('#upJam').on('click', function() {
            var jam = parseInt($('#jam').val());
            jam = jam + 1;
            if (jam > 23) {
                jam = 0;
            }
            let format = jam.toString().padStart(2, '0');
            $('#jam').val(format);

        })
        $('#downJam').on('click', function() {
            var jam = parseInt($('#jam').val());
            jam = jam - 1;
            if (jam < 0) {
                jam = 23;
            }
            let format = jam.toString().padStart(2, '0');
            $('#jam').val(format);

        })
        $('#upMenit').on('click', function() {
            var menit = parseInt($('#menit').val());
            menit = menit + 5;
            if (menit > 59) {
                menit = 0;
            }
            let format = menit.toString().padStart(2, '0');
            $('#menit').val(format);

        })
        $('#downMenit').on('click', function() {
            var menit = parseInt($('#menit').val());
            menit = menit - 5;
            if (menit < 0) {
                menit = 55;
            }
            let format = menit.toString().padStart(2, '0');
            $('#menit').val(format);

        })
    });
</script>
