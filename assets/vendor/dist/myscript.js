const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'SUKSES',
        text: 'Selamat' + flashData,
        type: 'success'
    });
}

// Tombol Hapus 
$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin ?',
        text: "Data yang dihapus tidak bisa kembali!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});