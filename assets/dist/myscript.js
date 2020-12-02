const flashData = $('.flash-data').data('flashdata');
if(flashData){
    Swall({
        title: 'Data Berhasil' + flashdata,
        text: '',
        type: 'succes',
    });
}