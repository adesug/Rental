const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
    Swal.fire({
        title : 'Data Mobil',
        text  : 'Berhasil ' + flashdata,
        type : 'success'
    })
}

