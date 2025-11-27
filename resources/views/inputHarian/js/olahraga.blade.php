<script>
    document.addEventListener("DOMContentLoaded", function() {

        $('#lainyaOlaharaga').prop('hidden', true);
        $('.olahraga-item').on('click', function() {
            let type = $(this).data('type');
            if (type == 'lainnya') {
                $('#lainyaOlaharaga').prop('hidden', false);
            } else {
                $('#lainyaOlaharaga').prop('hidden', true);
            }

        });


    });
</script>
