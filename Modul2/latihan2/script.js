function formsValidation() {
  var namaLengkap = document.getElementById("nameInput").value;
  var getEmail = document.getElementById("emailInput").value;
  var getAlamat = document.getElementById("alamatInput").value;

  if (namaLengkap == "" || getEmail == "" || getAlamat == "") {
    alert("Anda harus mengisi data dengan lengkap");
  } else {
    alert(namaLengkap + getAlamat + getAlamat);
  }
}
