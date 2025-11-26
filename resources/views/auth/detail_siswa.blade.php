<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto mt-10 max-w-md">
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl font-semibold mb-4 text-center">Lengkapi Detail Siswa</h2>

            {{-- <form action="{{ route('siswa.storeDetail') }}" method="POST"> --}}
            @csrf

            <div class="mb-4">
                <label for="kelas_id" class="block text-gray-700 mb-2">Pilih Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="w-full border rounded p-2">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                    @endforeach
                </select>

                @error('kelas_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" id="submitBtn"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Simpan
                </button>
            </div>

            </form>

        </div>
    </div>

    <script>
        $('#submitBtn').on('click', function(e) {
            e.preventDefault(); // cegah submit default

            let id = $('#kelas_id').val();

            // Jika kelas belum dipilih
            if (!id) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Peringatan',
                    text: 'Pilih kelas terlebih dahulu',
                });
                return; // hentikan script
            }

            // Disable button agar tidak double submit
            $('#submitBtn').prop('disabled', true).text('Menyimpan...');

            $.ajax({
                url: "{{ route('detail.SiswaAwal.simpan') }}",
                type: "POST",
                dataType: "json",
                data: {
                    kelas_id: id,
                    _token: "{{ csrf_token() }}"
                },

                success: function(data) {
                    if (data.message == '1') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Data berhasil tersimpan',
                        }).then(() => {
                            window.location.href = "{{ route('dashboard') }}";
                        });

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Detail gagal tersimpan',
                        });

                        $('#submitBtn').prop('disabled', false).text('Simpan');
                    }
                },

                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan pada server',
                    });

                    $('#submitBtn').prop('disabled', false).text('Simpan');
                }
            });
        });
    </script>

</body>

</html>
