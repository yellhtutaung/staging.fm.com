//------------- Permission ----------------------




// $(document).ready(function () {
//
// })
//
// var permissionCheckbox = document.querySelectorAll("input[type=checkbox]");
//
// for (let i = 0; i < permissionCheckbox.length; i++) {
//     permissionCheckbox[i].addEventListener('change', function() {
//         if (this.checked) {
//             $(`#${this.id}-permission`).toggle('nested')
//         } else {
//             $(`#${this.id}-permission`).toggle('nested')
//             const permissions = document.querySelectorAll(`#${this.id}-permission input`)
//             for (let j = 0; j < permissions.length; j++) {
//                 permissions[j].checked = false
//             }
//         }
//     });
// }

function isStrTrueOrFalse(string) { return !string.toLowerCase().match(/false/);}

let resArr = [];

const checkBoxFun = async () =>
{
    let selectedArr = new Array();
    let checked = $("input[name=permissions]:checked");
    // let subCheck
    for (let i = 0; i < checked.length; i++) {
        if (checked[i].checked) {
            selectedArr.push(checked[i].value);
        }
    }
    resArr = [];

    for(let o=0; o<selectedArr.length; o++)
    {
        // $('#{{$permissionUrlPrefix[$index]}}-edit');
        let field = selectedArr[o];
        let checkListVal = $(`#${field}-list`).is(':checked');
        let checkAddVal = $(`#${field}-add`).is(':checked');
        let checkCreateVal = $(`#${field}-create`).is(':checked');
        let checkEditVal = $(`#${field}-edit`).is(':checked');
        let checkUpdateVal = $(`#${field}-update`).is(':checked');
        let checkDetailsVal = $(`#${field}-details`).is(':checked');
        let checkDeleteVal = $(`#${field}-delete`).is(':checked');

        let sampleObj = {[field]:{"list":checkListVal,"add":checkAddVal,"create":checkCreateVal,"edit":checkEditVal,
                "update":checkUpdateVal,"hide_show":false,"details":checkDetailsVal,"history":true,"delete":checkDeleteVal}};

        resArr.push(sampleObj);

    }
    console.table(resArr);
    checkAllSubCheckBox();
    console.log('****************************************');
}

const checkBoxToggle = (urlVal) =>
{
    checkBoxFun();
    let eachCheckBox = $('#lb-check'+urlVal);
    if(eachCheckBox.is(':checked'))
    {
        $('.p-d'+urlVal).removeClass('d-none');
    }else {
        $('.p-d'+urlVal).addClass('d-none');
    }
}

$('#form-upload').submit(function(e)
{
    e.preventDefault();
    checkBoxFun();
    saveToServer();
});

const subToggle = (subUrl,field) =>
{
    for(let i=0; i<resArr.length; i++)
    {
        let index = resArr[i];
        let getEachIndex = index[subUrl];
        if(getEachIndex != undefined)
        {
            let presentChecked = $(`#${subUrl}-${field}`);
            getEachIndex[field] = presentChecked.is(':checked');
        }
    }
    console.log(resArr);
}

const checkAllSubCheckBox = () =>
{
    resArr.map((eachPermission , index) => {
        let eachKey = Object.keys(eachPermission);
        if($(`#${eachKey[0]}-list`).is(':checked'))
        {
            $(`#${eachKey[0]}-list`).val();
        }
    });
}

const placeToCheckBoxInitial = ()  =>
{
    resArr.map((eachPermission , index) => {
        let eachKey = Object.keys(eachPermission);
        $('#lb-check'+eachKey[0]).prop("checked" ,false);
        $('.p-d'+eachKey[0]).addClass('d-none');

        $(`#${eachKey[0]}-list`).prop("checked",false);
        $(`#${eachKey[0]}-add`).prop("checked",false);
        $(`#${eachKey[0]}-create`).prop("checked",false);
        $(`#${eachKey[0]}-edit`).prop("checked",false);
        $(`#${eachKey[0]}-update`).prop("checked",false);
        $(`#${eachKey[0]}-details`).prop("checked",false);
        $(`#${eachKey[0]}-delete`).prop("checked",false);
    });
    resArr=[];
}


