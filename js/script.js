// membuat fungsi kembali ke admin.php

let btn = document.getElementById("kembali");

btn.addEventListener("click", function () {
  let nama = document.getElementById("nama").value;
  let jumlah = document.getElementById("jumlah").value;
  let harga = document.getElementById("harga").value;

  if (!nama && !jumlah && !harga) {
    location.href = "admin.php";
  } else {
    let persetujuan = confirm(
      "Yakin tidak menyimpan data ini dan kembali ke halaman admin?"
    );

    if (persetujuan === true) {
      location.href = "admin.php";
      stop;
    }
  }
});
