const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal.fire({
        title: 'Berita ' ,
        text: 'Berhasil ' + flashData,
        icon: 'success',
    });
}

// tombol hapus
$('.tombol-hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Berita akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Berita'
      }).then((result) => {
        if (result.value) {
          
            document.location.href = href;
          
        }
      })

})