document.addEventListener("DOMContentLoaded", function() {
    let togglePassword = document.querySelector('#togglePassword');
    let passwordInput = document.querySelector('#password');
  
    if (!togglePassword || !passwordInput) {
      console.error("Toggle password button or password input not found");
      return;
    }
  
    togglePassword.addEventListener('click', function() {
      var type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      togglePassword.innerHTML = type === 'password' ? '<i class="fa-solid fa-eye-slash"></i>' : '<i class="fa-solid fa-eye"></i>';
    });
  });
  
  // const passwordForm = document.getElementById("passwordForm");
  //   const passwordInput = document.getElementById("password");
  //   const repeatPasswordInput = document.getElementById("repeat_password");
  //   const submitButton = document.getElementById("submit");

  //   passwordForm.addEventListener("submit", function(event) {
  //       event.preventDefault();
  //       let password = passwordInput.value;
  //       let repeatPassword = repeatPasswordInput.value;

  //       if (password !== repeatPassword) {
  //           alert("Passwords do not match!");    
  //       }else{
  //         event.submit();
  //       }
  //       // console.log('I see it');
  //   });


  /*  const dataDoughnut = {
      labels: ["JavaScript", "Python", "Ruby"],
      datasets: [
        {
          label: "My First Dataset",
          data: [300, 50, 100],
          backgroundColor: [
            "rgb(133, 105, 241)",
            "rgb(164, 101, 241)",
            "rgb(101, 143, 241)",
          ],
          hoverOffset: 4,
        },
      ],
    };
  
    const configDoughnut = {
      type: "doughnut",
      data: dataDoughnut,
      options: {},
    };
  
    var chartBar = new Chart(
      document.getElementById("chartDoughnut"),
      configDoughnut
    );
*/