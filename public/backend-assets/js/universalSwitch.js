let universalSwitch = (Index,findId,field,on_off) =>
{

    Swal.fire({
        title: 'Are you sure',
        showCancelButton: true,
        cancelButtonText: 'Cancel',
        confirmButtonText: 'Confirm',
        denyButtonText: `Don't save`,
        reverseButtons: true
    }).then((result) => {
        let checkTag = document.querySelector(`.toggle-id${findId}`)
        let parentTag = checkTag.parentNode
        console.log(checkTag.checked)
        if (result.isConfirmed) {
            let orgVal = $('.toggle-id'+findId).attr("data-status-val");
            on_off = on_off==1?0:1;
            // console.log(on_off); // flip to data
            let data_obj = {Index:Index,findId:findId,field:field,on_off:on_off}
            $.post(universalSwitchRoute,
                {
                    "_token":csrf_token,
                    "data_obj": data_obj,
                },
                function(data){
                    if(data.status == 200)
                    {
                        $('.toggle-id'+findId).attr("onchange",`universalSwitch(${Index},${findId},"${field}",${on_off})`);
                        $('.toggle-id'+findId).attr("data-status-val",on_off);
                    }
                    console.log(data);
                });
        }else {
            if (checkTag.checked) {
                    checkTag.checked = false
                    parentTag.classList.remove('btn-success')
                    parentTag.classList.add('btn-danger')
                    parentTag.classList.add('off')
            }else {
                    checkTag.checked = true
                    parentTag.classList.remove('off')
                    parentTag.classList.remove('btn-danger')
                    parentTag.classList.add('btn-success')
            }
        }
    })

}
