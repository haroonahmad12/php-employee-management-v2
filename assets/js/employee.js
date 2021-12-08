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
      createForm(res);
    })
    .catch(function () {
      alert("Can't connect to backend try latter");
    });
});

function createForm(data) {
  let formTemplate = `<div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder='${data.name}' name="name" value="${data.name}">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder='${data.email}' name="email" value='${data.email}'>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputAge">Age</label>
                    <input type="number" class="form-control" id="inputAge" name="age" value='${data.age}'>
                </div>
                <div class=" form-group col-md-6">
                    <label for="inputPhone">Phone Number</label>
                    <input type="text" class="form-control" id="inputPhone" name="phoneNumber" value='${data.phone_number}'>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" value='${data.city}'>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Street No.</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder='${data.street_no}' name="streetAddress" value="${data.street_no}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" id="inputState" name="state" value="${data.state}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Zip Code</label>
                    <input type="text" class="form-control" id="inputZip" name="postalCode" value="${data.postal_code}">
                </div>
            </div>



            <input type="submit" class="btn btn-primary" value="Submit" id="submitButton"></input>
            <input type="hidden" name="id" value=""></input>
            <button type=" button" class="btn btn-secondary"><a href="../show" class="text-decoration-none btn-secondary">Return </a></button>`;

  document
    .getElementById("employeeDetailForm")
    .insertAdjacentHTML("afterbegin", formTemplate);
}
