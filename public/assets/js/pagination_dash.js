// $(document).ready(function() {
//     $('#example').DataTable();
//     // $('table').dataTable({searching: false, paging: false, info: false});
//     // $('table').dataTable({searching: false, paging: false, info: false});
// });
$(document).ready(function () {
    $('#example').DataTable({
        // pagingType: "simple_numbers",
        // lengthMenu:[5,10,15,20,25],
        pageLength: 6,
        searching: false,
        info: false,
        "order": [[4, "asc"]],
    });
    // $('table').dataTable({searching: false, paging: true, info: false});
    let example_length = document.getElementById("example_length");
    example_length.style.display = "none";
});


