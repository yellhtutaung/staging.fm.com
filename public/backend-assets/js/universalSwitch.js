let universalSwitch = (Index,findId,field,on_off) =>
{
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
}
