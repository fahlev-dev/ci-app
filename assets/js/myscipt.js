const flashData = $('.flash-data').data('flashdata');

if(flashData) {
    Swal({
        title: 'Data Mahasishwa',
        text: 'Berhasil' + flashData,
        type: 'success'
    });
}

$('.tombol-hapus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "data mahasiswa akan di hapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
                document.location.href = href;
            }
        })
});