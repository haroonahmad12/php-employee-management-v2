document.addEventListener("DOMContentLoaded", () => {
  let id = window.location.href;
  id = id.split("editing/");

  id = id[1];

  fetch(
    `http://localhost/php-employee-management-v2/employee/getEmployee/${id}`,
    {
      method: "POST",
    }
  )
    .then((res) => res.json())
    .then((res) => {
      console.log(res);
    })
    .catch(function () {
      alert("Can't connect to backend try latter");
    });
});
