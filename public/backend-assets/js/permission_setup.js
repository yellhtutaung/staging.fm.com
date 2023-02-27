//------------- Permission ----------------------
$(document).ready(function () {

})

var permissionCheckbox = document.querySelectorAll("input[type=checkbox]");

for (let i = 0; i < permissionCheckbox.length; i++) {
    permissionCheckbox[i].addEventListener('change', function() {
        if (this.checked) {
            $(`#${this.id}-permission`).toggle('nested')
        } else {
            $(`#${this.id}-permission`).toggle('nested')
            const permissions = document.querySelectorAll(`#${this.id}-permission input`)
            for (let j = 0; j < permissions.length; j++) {
                permissions[j].checked = false
            }
        }
    });
}


