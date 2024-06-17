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
    form.addEventListener('animationend', () => {
      form.style.display = 'none';
      document.querySelector(".fixed-button").style.display = "block";
    }, { once: true });
  }