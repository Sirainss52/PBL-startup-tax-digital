 // Fungsi untuk mengubah warna tombol "Save" berdasarkan perubahan pada inputan
 function changeButtonColor() {
    const titleInput = document.getElementById('title');
    const descriptionInput = document.getElementById('deskripsi');
    const contactInput = document.getElementById('contact');
    const addressInput = document.getElementById('address');
    const saveButton = document.getElementById('saveButton');

    // Fungsi untuk memperbarui warna tombol
    function updateButtonColor() {
      // Cek apakah ada nilai di setiap inputan
      const title = titleInput.value.trim();
      const description = descriptionInput.value.trim();
      const contact = contactInput.value.trim();
      const address = addressInput.value.trim();

      // Jika semua inputan terisi, ubah warna tombol menjadi biru (primary)
      if (title !== '' && description !== '' && contact !== '' && address !== '') {
        saveButton.classList.remove('btn-secondary'); // Hapus kelas btn-secondary
        saveButton.classList.add('btn-primary'); // Tambahkan kelas btn-primary
        saveButton.disabled = false;
      } else {
        // Jika ada setidaknya satu inputan yang kosong, ubah warna tombol menjadi abu-abu (secondary)
        saveButton.classList.remove('btn-primary'); // Hapus kelas btn-primary
        saveButton.classList.add('btn-secondary'); // Tambahkan kelas btn-secondary
        saveButton.disabled = true;
      }
    }

    // Tambahkan event listener pada setiap inputan
    titleInput.addEventListener('input', updateButtonColor);
    descriptionInput.addEventListener('input', updateButtonColor);
    contactInput.addEventListener('input', updateButtonColor);
    addressInput.addEventListener('input', updateButtonColor);

    // Panggil fungsi untuk memastikan warna tombol sudah sesuai saat halaman dimuat
    updateButtonColor();
  }

  // Fungsi untuk mengaktifkan input fields saat tombol Edit ditekan
  function enableFormFields() {
    const editButton = document.getElementById('editButton');
    const saveButton = document.getElementById('saveButton');
    const formFields = document.querySelectorAll('form input');
    
    editButton.addEventListener('click', () => {
      formFields.forEach(field => field.disabled = false);
      editButton.style.display = 'none';
      saveButton.style.display = 'inline-block'; // Show the save button when editing
      changeButtonColor(); // Panggil fungsi ini untuk memulai pemantauan input fields
    });
  }

  // Panggil fungsi saat dokumen selesai dimuat
  document.addEventListener('DOMContentLoaded', () => {
    enableFormFields();
    changeButtonColor();
  });