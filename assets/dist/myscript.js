const flashData = $('.flash-data').data('flashdata');
if(flashData){
    Swall({
        title: 'Data Berhasil' + flashData,
        text: '',
        type: 'succes',
    });
}