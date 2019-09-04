$(document).ready(function () {
    var options = {
        chartPadding:30,
        axisY: {
            onlyInteger: true,
            stretch: true
        }
    };
    new Chartist.Line('.ct-chart', data, options);

    $('#invoice-table').DataTable({
        processing: true,
        serverSide: true,
        rowId: 'id',
        ajax: {
            url: '/invoice/data-table',
        },
        columnDefs: [
            {
                targets: 1,
                render: function (data, type, row) {
                    return '<a class="btn-link" href="/invoice/' + row.id + '">' + data + '</a>'
                }
            },
            {
                targets: 6,
                render: function (data, type, row) {
                    return '' +
                        '<button onclick="remove(' + row.id + ')" class="delete btn btn-sm btn-danger">delete!</button>' +
                        '<button onclick="edit(' + row.id + ')" class="edit btn btn-sm btn-primary">edit!</button>';
                }
            }],
        columns: [
            {"data": "id"},
            {"data": "code"},
            {"data": "total"},
            {"data": "company"},
            {"data": "address"},
            {"data": "email"},
        ]
    });
});

function remove(id) {
    if (confirm('Czy chcesz usunąć tą fakturę?')) {
        location.href = '/invoice/delete/' + id;
    }
}

function edit(id) {
    location.href = '/invoice/edit/' + id;
}
