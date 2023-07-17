$(document).ready(function () {
    $('#example').DataTable({
        pagingType: "simple_numbers",
        // lengthMenu: [4, 10, 15, 20, 25],
        paging: true,
        pageLength: 4,
        searching: false,
        info: false,
        "order": [[1, "asc"]],
    });
    // $('table').dataTable({searching: false, paging: true, info: false});
    let example_length = document.getElementById("example_length");
    example_length.style.display = "none";
});


