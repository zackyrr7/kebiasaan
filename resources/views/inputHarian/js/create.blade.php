<script>
    document.querySelectorAll('.day-item').forEach(item => {
        item.addEventListener('click', function() {

            // ubah warna item aktif
            document.querySelectorAll('.day-item').forEach(i => i.classList.remove('active'));
            this.classList.add('active');

            let id = this.dataset.day;

            // sembunyikan semua include
            document.querySelectorAll('.day-section').forEach(sec => sec.classList.add('d-none'));

            // tampilkan include terpilih
            document.querySelector('#content-' + id).classList.remove('d-none');
        });
    });
</script>
