var selectedRow = false;
function onFormSubmit() {
    var formData = readFormData();
    if (selectedRow === false) {
        insertNewRecord(formData);
    } else {
        updateRecord(formData);
    }
    resetForm();
}

function readFormData() {
    var formData = {};
    formData['page'] = document.getElementById('page').value;

    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById('employeerList').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);

    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.page;

    cell2 = newRow.insertCell(1);
    cell2.innerHTML = `<a onClick="onEdit(this)">Редагувати</a>
                        <a onClick="onDelete(this)">Удалити</a>`;

}

function resetForm() {
    document.getElementById('page').value = '';
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;

    document.getElementById('page').value = selectedRow.cells[0].innerHTML;
}

function onDelete(td) {
    if (confirm('Are you sure?')) {
        row = td.parentElement.parentElement;
        document.getElementById('employeerList').deleteRow(row.rowIndex);
    }
}

function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.page;
}