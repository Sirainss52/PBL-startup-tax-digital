function openForm() {
    const form = document.getElementById("myForm");
    form.classList.remove("hide");
    form.classList.add("show");
    form.style.display = "block";
    document.querySelector(".fixed-button").style.display = "none";
}

function closeForm() {
    const form = document.getElementById("myForm");
    form.classList.remove("show");
    form.classList.add("hide");
    form.addEventListener(
        "animationend",
        () => {
            form.style.display = "none";
            document.querySelector(".fixed-button").style.display = "block";
        },
        { once: true }
    );
}

document.getElementById("profileUpload").addEventListener("change", function (event) {
  const reader = new FileReader();
  reader.onload = function () {
      const image = document.getElementById("profileImage");
      image.src = reader.result;

      const profilePreview = document.getElementById("profilePreview");
      if (profilePreview) {
          profilePreview.src = reader.result;
      }
  };
  reader.readAsDataURL(event.target.files[0]);
});

document.getElementById('profileImage').addEventListener('click', function() {
    document.getElementById('profileUpload').click();
});

document.getElementById('profileUpload').addEventListener('change', function(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const image = document.getElementById('profileImage');
        image.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
});
