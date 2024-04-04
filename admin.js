$(document).ready(function() {
    // Function to add a new column to the table
    function addColumn() {
        var table = $('#myTable');
        var columnCount = table.find('tr:first th').length;

        var newHeader = $('<th>').text('Header ' + (columnCount + 1));
        var newCells = $('<td>').text('Cell ' + (columnCount + 1));

        table.find('tr:first').append(newHeader);
        table.find('tr:not(:first)').append(newCells);
    }

    // Call the addColumn function
    addColumn();

    // Adjust column width when the window is resized
    $(window).resize(function() {
        var articleWidth = $('article').width();
        var columnCount = $('#myTable tr:first th').length;

        var cellWidth = articleWidth / columnCount;
        $('#myTable th, #myTable td').css('width', cellWidth + 'px');
    });
});