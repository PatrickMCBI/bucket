const app = new Vue({
  el: "#app",
  data: {},

  methods: {
    clickSubmit() {
      document.querySelector("#submit-button").click();
    },

    register(e) {
      e.preventDefault();
      if (confirm("Are you sure you want to register?")) {
        const data = new FormData(e.currentTarget);
        data.append("method", "register");
        axios.post("backend/user-server.php", data).then((res) => {
          if (res.data == 1) {
            alert("Register Successfully!");
            window.location.href = "login.php";
          } else if (res.data == 2) {
            alert("Password and Confrim password does not match!");
          } else {
            alert("Something went wrong please try again!");
          }
        });
      }
    },

    login(e) {
      e.preventDefault();
      const data = new FormData(e.currentTarget);
      data.append("method", "login");
      axios.post("backend/user-server.php", data).then((res) => {
        if (res.data == 1) {
          window.location.href = "index.php";
        } else {
          alert("Invalid Credentials!");
        }
      });
    },
  },
});
