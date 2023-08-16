document.addEventListener("DOMContentLoaded", function() {
    var initButton = document.querySelector("#init-button");
    var app = document.querySelector("#handle");
    var form = document.querySelector("#form");
    var searchInput = document.querySelector("#search-input");
    var rcBtns = document.querySelectorAll("#r-btn, #c-btn");
    var submitButton = document.querySelector("#submit-button");
  
    function initApp() {
      app.classList.toggle("active");
  
      if (form.classList.contains("active")) {
        form.classList.remove("active");
      } else {
        setTimeout(function() {
          form.classList.add("active");
        }, 40);
        setTimeout(function() {
          searchInput.focus();
        }, 600);
      }
    }
  
    function checkInput() {
      if (this.value.trim().length > 0) {
        rcBtns.forEach(function(rcBtn) {
          rcBtn.classList.add("change");
        });
        submitButton.classList.add("active");
      } else {
        rcBtns.forEach(function(rcBtn) {
          rcBtn.classList.remove("change");
        });
        submitButton.classList.remove("active");
      }
    }
  
    initButton.addEventListener("click", initApp);
    searchInput.addEventListener("keyup", checkInput);
  });


 