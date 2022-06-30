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
    formData['name_post'] = document.getElementById('name_post').value;
    formData['textarea_post'] = document.getElementById('textarea_post').value;
    formData['data'] = document.getElementById('data').value;
    

    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById('employeerList').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.name_post;

    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.textarea_post;

    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.data;

    cell4 = newRow.insertCell(3);
    cell4.innerHTML = `<a onClick="onEdit(this)">Редагувати</a>
                        <a onClick="onDelete(this)">Удалити</a>`;

}

function resetForm() {
    document.getElementById('name_post').value = '';
    document.getElementById('textarea_post').value = '';
    document.getElementById('data').value = '';
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;

    document.getElementById('name_post').value = selectedRow.cells[0].innerHTML;
    document.getElementById('textarea_post').value = selectedRow.cells[1].innerHTML;
    document.getElementById('data').value = selectedRow.cells[2].innerHTML;
}

function onDelete(td) {
    if (confirm('Ви впевнені?')) {
        row = td.parentElement.parentElement;
        document.getElementById('employeerList').deleteRow(row.rowIndex);
    }
}

function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.name_post;
    selectedRow.cells[1].innerHTML = formData.textarea_post;
    selectedRow.cells[2].innerHTML = formData.data;
}