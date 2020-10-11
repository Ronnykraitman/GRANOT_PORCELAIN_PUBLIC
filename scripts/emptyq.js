function validateForm() {
    var x = document.forms["a2c_form"]["quantity"].value;
    if (x == "") {
      alert("Adding nothing to your cart is impossible. Please select at least 1 pottery ");
      return false;
    }
  }
  