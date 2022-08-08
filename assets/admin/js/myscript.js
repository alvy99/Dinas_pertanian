const flashData = $('.flash-data').data('flashdata');

if (flashData) {
Swal.fire({
    title: 'Berhasil',
    text: 'Data' +flashData,
    icon: 'success'
  });
  
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apa anda yakin?',
        text: "Data akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya,Hapus Data!'
      }).then((result) => {
        if (result.value) {
         document.location.href = href;
        }
      })
})

//tombol-keluar
$('.tombol-keluar').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apa anda yakin?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!'
      }).then((result) => {
        if (result.value) {
         document.location.href = href;
        }
      })
})

const authData = $('.auth-data').data('authdata');

if (authData) {
Swal.fire({
    title: 'Maaf...',
    text: `Username dan password salah`,
    icon: 'warning'
  });
  
}

const userData = $('.userdata-data').data('userdata');

if (userData) {
    Swal.fire({
        icon: 'error',
        title: 'Maaf...',
        text: 'Data Yang Anda Cari Tidak Ada!'
      })
    }
