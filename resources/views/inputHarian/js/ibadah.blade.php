<script>
    document.addEventListener("DOMContentLoaded", function() {

        $('#lainyaPop').prop('hidden', true);
        $('.ibadah-item').on('click', function() {
            let type = $(this).data('type');
            if (type == 'lainnya') {
                $('#lainyaPop').prop('hidden', false);
            } else {
                $('#lainyaPop').prop('hidden', true);
            }

        });


    });
</script>
