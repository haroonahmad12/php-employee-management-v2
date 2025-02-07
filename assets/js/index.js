function editEntry({ item }) {
  window.location.href = `editing/${item.id}`;
}

$("#jsGrid").jsGrid({
  width: "100%",
  filtering: false,
  editing: true,
  inserting: true,
  sorting: true,
  paging: true,
  autoload: true,
  pageSize: 15,
  rowClick: editEntry,
  onItemEditing: editEntry,

  pageButtonCount: 5,
  controller: {
    loadData: function (item) {
      const d = $.Deferred();
      $.ajax({
        type: "GET",
        url: "request",
        dataType: "json",
        data: item,
        success: function (response) {
          d.resolve(response);
        },
        error: function (xhr, exception) {
          console.log(exception);
        },
      });
      return d.promise();
    },
    insertItem: function (item) {
      return $.ajax({
        type: "POST",
        url: "addNewEmployee",
        data: item,
        success: function (response) {
          console.log("POST: ", response);
        },
      });
    },
    updateItem: function (item) {
      return $.ajax({
        type: "PUT",
        url: "../src/library/employee.php",
        data: { item },
        success: function (response) {
          console.log("PUT: ", response);
        },
      });
    },
    deleteItem: function (item) {
      return $.ajax({
        type: "POST",
        url: "../employee/delete",
        data: item,
        success: function (response) {
          console.log(response);
        },
      });
    },
  },

  fields: [
    { name: "id", type: "text", width: 30 },
    { name: "name", type: "text", width: 80, title: "Name" },
    { name: "email", type: "text", width: 100, title: "Email" },
    { name: "age", type: "number", width: 50, title: "Age" },
    { name: "street_no", type: "text", width: 50, title: "Street No." },
    { name: "city", type: "text", width: 100, title: "City" },
    { name: "state", type: "text", width: 50, title: "State" },
    {
      name: "postal_code",
      type: "text",
      width: 150,
      title: "Postal Code",
    },
    { name: "phone_number", type: "text", width: 150, title: "Phone Number" },

    { type: "control" },
  ],
});
