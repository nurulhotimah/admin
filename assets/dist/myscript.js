const flashData = $('.flash-data').data('flashdata');
if(flashData){
    Swal.fire({
        title: 'Data Berhasil' + flashData,
        text: '',
        type: 'succes',
    });
}