let appAdminForm = document.getElementById('admin_app_form');
let onlyNewCheckbox = document.getElementById('onlyNewCheckbox');
let searchInput = document.getElementById('application_search_number');

onlyNewCheckbox.addEventListener('click', () => {
    sendRequest();
});

searchInput.addEventListener('blur', () => {
    sendRequest();
});

function sendRequest(){
    let formData = new FormData(appAdminForm);
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/admin/getApplications');
    xhr.responseType = 'json';
    xhr.send(formData);
    xhr.onreadystatechange = handlefunc;
    function handlefunc(){
        if(xhr.readyState === 4 && xhr.status === 200){
            console.log(xhr.response);
        }
    }
}