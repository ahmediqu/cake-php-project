$(document).ready(function() {


    $.ui.autocomplete.prototype._renderMenu = function (ul, items, ex) {
//console.log(ul);
//console.log(ul[0].attributes);
//debugger;


//
//console.log(ul[0].style);
//console.log(ul[0].style.getPropertyValue('width'));



//var heightStyleValue = ul[0].style.height;
//console.log(heightStyleValue);
//console.log(items);

        var keys = Object.keys(items[0]);
        var headerStr = "";
        for(var i=1; i<keys.length -1;i++)
        {
            if(i == 1)
            headerStr += "<div class='listHeader' style=' width:100px; display:inline-block;'>"+keys[i]+"</div>";
        else  if(i == 2)
            headerStr += "<div class='listHeader' style=' width:400px; display:inline-block;'>"+keys[i]+"</div>";
else
            headerStr += "<div class='listHeader' style=' width:120px; display:inline-block;'>"+keys[i]+"</div>";
        }

        var self = this;
        ul.append("<li class='ui-autocomplete-category' aria-label='header'  style='height:50px;background-color: #4680ff; color:white\n' >"+ headerStr +"</li>");
        $.each(items, function (index, item) {
            self._renderItemData(ul, item);
        });
    };

    $.ui.autocomplete.prototype._renderItem = function (table, item) {

//console.log(table);
//console.log(item);

        var keys = Object.keys(item);

        var headerStr = "";
        for(var i=1; i<keys.length -1;i++)
        {
            
          if(i == 1)
            headerStr += "<div style=' width:100px; display:inline-block;'>"+ item[keys[i]] +"</div>";
          else  if(i == 2)
            headerStr += "<div style=' width:400px; display:inline-block;'>"+ item[keys[i]] +"</div>";
        else
             headerStr += "<div style=' width:120px; display:inline-block;'>"+ item[keys[i]] +"</div>";
        }

        return $("<li style='height:50px'>")
            .data("item.autocomplete", item)
            .append(headerStr)
            .appendTo(table);
    };



});

// OA

function load_app_status(contrlid)
{

    $.ajax({
        url: bUrl + 'Common/getAppStatusajax',
        type: "POST",
       // data: {'insId' : $("#ins_id").val()},
        success: function (response) {
            
            $("#"+contrlid).empty();
//            $("#"+contrlid).append($('<option>', {
//                value: '0',
//                text: '--select--'
//            }));
            for (var i = 0; i < response.length; i++) {
//                if(response[i]['SELECTED'] === "1")
//                {
//                //alert("ok");
//                var opt = new Option(response[i].NAME, response[i].ID,true,true);
//                $("#"+contrlid).append(opt);
//                }
//                else
//                {
                    
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);
//                }

            }
            
              loadUser();
        },
        error: function (err) {

        }
    });
    
}

function load_app_forward_status(contrlid)
{

    $.ajax({
        url: bUrl + 'Common/getAppStatusajax',
        type: "POST",
       // data: {'insId' : $("#ins_id").val()},
        success: function (response) {
            
            $("#"+contrlid).empty();
//            $("#"+contrlid).append($('<option>', {
//                value: '0',
//                text: '--select--'
//            }));
            for (var i = 0; i < response.length; i++) {
//                if(response[i]['SELECTED'] === "1")
//                {
//                //alert("ok");
//                var opt = new Option(response[i].NAME, response[i].ID,true,true);
//                $("#"+contrlid).append(opt);
//                }
//                else
//                {
                    
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);
//                }

            }
            
              loadUser();
        },
        error: function (err) {

        }
    });
    
}



// END OA


function load_geoby_type(loc_type,divid,zilaid,thanaid,pourasavaid,contrlid)
{

    $.ajax({
        url: bUrl+'Common/igetlocationajax',
        type: "POST",
        data: {'location_type':loc_type, 'div_id': divid , 'zilla_id': zilaid, 'thana_id':thanaid, 'pourosova_id': pourasavaid },
        success: function (response) {
            $("#"+contrlid).empty();
            $("#"+contrlid).append($('<option>', {
                value: '0',
                text: 'select'
            }));
            for (var i = 0; i < response.length; i++) {
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);

            }

            afterLocBind(divid,zilaid,thanaid,pourasavaid);

        },
        error: function (err) {

        }
    });
};

function load_bank(bank_type,bank_id,contrlid)
{
  //console.log(bank_type,bank_id,contrlid);
    $.ajax({
        url: bUrl + 'Common/getbracnhjax',
        type: "POST",
        data: {'bank_type':bank_type, 'bank_id': bank_id },
        success: function (response) {
          
            $("#"+contrlid).empty();
            $("#"+contrlid).append($('<option>', {
                value: '0',
                text: 'select'
            }));
            for (var i = 0; i < response.length; i++) {
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);

            }

            afterbankBind(bank_type,bank_id);

        },
        error: function (err) {

        }
    });
};

function load_rec_status(contrlid)
{

    $.ajax({
        url: bUrl + 'Common/getRecogStatusajax',
        type: "POST",
        data: {'insId' : $("#ins_id").val()},
        success: function (response) {
            
            $("#"+contrlid).empty();
            $("#"+contrlid).append($('<option>', {
                value: '0',
                text: '--select--'
            }));
            for (var i = 0; i < response.length; i++) {
                if(response[i]['SELECTED'] === "1")
                {
                //alert("ok");
                var opt = new Option(response[i].NAME, response[i].ID,true,true);
                $("#"+contrlid).append(opt);
                }
                else
                {
                    
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);
                }

            }
        },
        error: function (err) {

        }
    });
    
}

function load_max_rec_status(contrlid)
{

    $.ajax({
        url: bUrl + 'Common/getMaxRecogStatusajax',
        type: "POST",
        data: {'insId' : $("#ins_id").val()},
        success: function (response) {
            
            $("#"+contrlid).empty();
            $("#"+contrlid).append($('<option>', {
                value: '0',
                text: '--select--'
            }));
            for (var i = 0; i < response.length; i++) {
                if(response[i]['SELECTED'] === "1")
                {
                //alert("ok");
                var opt = new Option(response[i].NAME, response[i].ID,true,true);
                $("#"+contrlid).append(opt);
                }
                else
                {
                    
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);
                }

            }
        },
        error: function (err) {

        }
    });
    
}



function load_management(contrlid)
{
//console.log("control : ", contrlid);
    $.ajax({
        url: bUrl + 'Common/getManagementajax',
        type: "POST",
        data: {'insId' : $("#ins_id").val()},
        success: function (response) {
            
            $("#"+contrlid).empty();
            $("#"+contrlid).append($('<option>', {
                value: '0',
                text: '--select--'
            }));
            for (var i = 0; i < response.length; i++) {
                if(response[i]['SELECTED'] === "1")
                {
                //alert("ok");
                var opt = new Option(response[i].NAME, response[i].ID,true,true);
                $("#"+contrlid).append(opt);
                }
                else
                {
                    
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);
                }

            }
        },
        error: function (err) {

        }
    });
    
}


function load_coed(contrlid)
{
//console.log("control : ", contrlid);
    $.ajax({
        url: bUrl + 'Common/getCoedajax',
        type: "POST",
        data: {'insId' : $("#ins_id").val()},
        success: function (response) {
            
            $("#"+contrlid).empty();
            $("#"+contrlid).append($('<option>', {
                value: '0',
                text: '--select--'
            }));
            for (var i = 0; i < response.length; i++) {
                if(response[i]['SELECTED'] === "1")
                {
                //alert("ok");
                var opt = new Option(response[i].NAME, response[i].ID,true,true);
                $("#"+contrlid).append(opt);
                }
                else
                {
                    
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);
                }

            }
        },
        error: function (err) {

        }
    });
    
}

function setInstituteSession(ins_id){
    
              $.ajax({
            type: "POST",
            url:  bUrl + 'Institute/setinstitute',
            data: {  'INSTITUTE_ID'  : ins_id},     // serializes the form's elements.
            beforeSend: function() {
                $('#wait').show();
            },
            success: function(data)
            {                
                swal("Success", "Session Updated Successfully!", "success");                
            }
           ,error: function (err) {
                $('#wait').hide();
            },
            complete: function() {
                $('#wait').hide();
            }
        });
    
}


function setInstituteSessionForIndRe(data){
    
              $.ajax({
            type: "POST",
            url:  bUrl + 'common/setreportsession',
            data: data,     // serializes the form's elements.
            beforeSend: function() {
                $('#wait').show();
            },
            success: function(data)
            {                
              //  console.log(data);
               // swal("Success", "Session Updated Successfully!", "success");                
            }
           ,error: function (err) {
               //console.log(err);
                $('#wait').hide();
            },
            complete: function() {
                $('#wait').hide();
            }
        });
    
}

function load_min_class(contrlid)
{
//console.log("control : ", contrlid);
    $.ajax({
        url: bUrl + 'Common/getMinClassdajax',
        type: "POST",
        data: {'insId' : $("#ins_id").val()},
        success: function (response) {
            
            $("#"+contrlid).empty();
            $("#"+contrlid).append($('<option>', {
                value: '0',
                text: '--select--'
            }));
            for (var i = 0; i < response.length; i++) {
                if(response[i]['SELECTED'] === "1")
                {
                //alert("ok");
                var opt = new Option(response[i].NAME, response[i].ID,true,true);
                $("#"+contrlid).append(opt);
                }
                else
                {
                    
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);
                }

            }
        },
        error: function (err) {

        }
    });
    
}



 function isChrome(){
                    var isChrome = !!window.chrome && !!window.chrome.webstore;
                    return isChrome;
                }



function printDuelPage(data) {

    var mywindow = window.open('', 'memis', 'width=970');

    //remove header and footer in firefox
    mywindow.document.write('<html moznomarginboxes mozdisallowselectionprint>');
    mywindow.document.write(data);

    if (isChrome()) {
                        setTimeout(function printDoc() {
                            mywindow.print();
                            mywindow.close();
                        }, 500);
                    }
                    else {

                   //   setTimeout(function printDoc() {
                            mywindow.print();
                            mywindow.close();
                      //  }, 10);
                    }

//    setTimeout(function printDoc() {
//        mywindow.print();
//      //  mywindow.close();
//    }, 500);

}

function afterLocBind(){
   // console.log("custom");
}



function getDataTableData(tableId){
    var newRows = [];
    var headersText = [];
    var $headers = $("th");
    var $rows = $("#"+tableId+" tbody tr").each(function(index) {
        $cells = $(this).find("td");
        newRows[index] = {};
        $cells.each(function(cellIndex) {
            // Set the header text
            if(headersText[cellIndex] === undefined) {
                headersText[cellIndex] = $($headers[cellIndex]).text();
            }
            // Update the row object with the header/cell combo
            $(this).find("input").each(function() {
                newRows[index][columns[cellIndex]] = this.value ;
            });
        });
    });
    return newRows;
}

function getDataTableDirtyData(tableId){
    var newRows = [];
    var headersText = [];
    var $headers = $("th");
    var $rows = $("#"+tableId+" tbody tr").each(function(index) {
        $cells = $(this).find("td");
        newRows[index] = {};
        $cells.each(function(cellIndex) {
            if(headersText[cellIndex] === undefined) {
                headersText[cellIndex] = $($headers[cellIndex]).text();
            }
            $(this).find("input").each(function() {
                newRows[index][headersText[cellIndex]] = this.value ;
            });
        });
    });

    var dirtyRows = [];
    for ( var index=0; index<newRows.length; index++ ) {
        if ( parseInt(newRows[index].ISDIRTY) > 0 ) {
            dirtyRows.push( newRows[index] );
        }
    }


    var oTable = $("#"+tableId+" ").dataTable();
    var oldData = oTable.fnGetData();
    oldData.forEach(function(oItem) {
        dirtyRows.forEach(function(dItem) {
            if(oItem.CLASS_GROUP_ID == dItem.CLASS_GROUP_ID) {
                var keys = Object.keys(dItem);
                var real_dirty = false;
                keys.forEach(function(key) {
                    if(key != 'ISDIRTY') {
                        if(dItem[key] != oItem[key]) {
                            real_dirty = true;
                        }
                    }
                });
                if(!real_dirty)
                {
                    dItem['ISDIRTY'] = 0;
                }
            }
        });
    });


    var realdirtyRows = [];
    for ( var index=0; index<dirtyRows.length; index++ ) {
        if ( parseInt(dirtyRows[index].ISDIRTY) > 0 ) {
            realdirtyRows.push( dirtyRows[index] );
        }
    }


    return realdirtyRows;
}

// Sabbir
function loadWin(d) {
    $.ajax({
        url: bUrl + 'Admins/loadformorrpt',
        type: "POST",
        beforeSend: function () {
            $('#wait').show();
        },
        data: {'isrpt': d},
        success: function (response) {
            location.reload();
        },
        complete:function () {
            //$('#wait').hide();
        }
    });
}

function checkInstitute() {
    if($('#INSTITUTE_ID').val() == '' || $('#INSTITUTE_ID').val() == null)
    {
        return false;
    }
    else
    {
        return true;
    }
};

function checkApplicationType() {
    if($('#APPLYCATIN_TYPE').val() == '' || $('#APPLYCATIN_TYPE').val() == null)
    {
        return false;
    }
    else
    {
        return true;
    }
};

function getTableDirtyData(tableId){
	
	
	
    var newRows = [];
    var headersText = [];
    var $rows = $("#"+tableId+" tbody tr").each(function(index) {
        $cells = $(this).find("td");
        newRows[index] = {};
        $cells.each(function(cellIndex) {
            $(this).find("input").each(function() {
                newRows[index][columns[cellIndex]] = this.value ;
            });
        });
    });

    var dirtyRows = [];
    for ( var index=0; index<newRows.length; index++ ) {
        if ( parseInt(newRows[index].ISDIRTY) > 0 ) {
            dirtyRows.push( newRows[index] );
        }
    }


    var oTable = $("#"+tableId+" ").dataTable();
    var oldData = oTable.fnGetData();
	 
	
        
	
    oldData.forEach(function(oItem) {
        dirtyRows.forEach(function(dItem) {
            if(oItem.ID == dItem.ID) {               
                var keys = Object.keys(dItem);
                var real_dirty = false;
                keys.forEach(function(key) {
                    if(key != 'ISDIRTY') {
                        if(dItem[key] != oItem[key]) {
                            real_dirty = true;
                        } 
                    }
                });                                
                if(!real_dirty)
                {
                    dItem['ISDIRTY'] = 0;
                }
            }
        });
    });



    var realdirtyRows = [];
    for ( var index=0; index<dirtyRows.length; index++ ) {
        if ( parseInt(dirtyRows[index].ISDIRTY) > 0 ) {
            realdirtyRows.push( dirtyRows[index] );
        }
    }


    return realdirtyRows;
}


// to check is dirty in grid

function changeDirty(class_groupid,old_value,current_value){

    
    var is_dirty_val = $("#ISDIRTY_" + class_groupid).val();


    if(old_value != current_value)
      $("#ISDIRTY_" + class_groupid).val(parseInt(is_dirty_val) + 1);
    else if(old_value == current_value && $("#ISDIRTY_" + class_groupid).val() > 0)
        $("#ISDIRTY_" + class_groupid).val(parseInt(is_dirty_val) - 1);
    else if(old_value == current_value && $("#ISDIRTY_" + class_groupid).val() == 0)
        $("#ISDIRTY_" + class_groupid).val("0");
}






function load_app_statusbyPhase(contrlid,phase)
{

    $.ajax({
        url: bUrl + 'Common/getAppStatusByAppPhaseajax',
        type: "POST",
        data: {'phase' : phase},
        success: function (response) {
            
            $("#"+contrlid).empty();

            for (var i = 0; i < response.length; i++) {
                var opt = new Option(response[i].NAME, response[i].ID);
                $("#"+contrlid).append(opt);

            }
            
              loadUser();
        },
        error: function (err) {

        }
    });
    
}



/*var sum = 0,tamp = 0,tot =0,total = 0;
var i=1;
var outputdata = [];
function calArrear()
{
    var year = $("#YEAR").val();
    var paycode = $("#PAY_CODE").val();
    var startdate = $("#START_DATE").val();
    var enddate = $("#END_DATE").val();

    var startmonth = startdate.split("-");
    var endmonth = enddate.split("-");
    //  console.log(d.getMonth());
    var s_month =getDaysInMonth(startmonth[1], year);
    var s_day = startmonth[0];
    var end_day = endmonth[0];

    var s_day = s_month - s_day+1;
    //console.log(formonth);
    var end_month =getDaysInMonth(endmonth[1], year);


    var month_diff = endmonth[1] - startmonth[1]-1 ;

    var form_data =$("#calarrear").serializeArray();
    //console.log(form_data);
    var fd = new FormData();
    var other_data = form_data;
    $.each(other_data, function (key, input) {
        fd.append(input.name, input.value);
    });

    fd.append("start_month", s_month);
    fd.append("start_day", s_day);
    fd.append("end_month", end_month);
    fd.append("end_day", end_day);
    fd.append("month_diff", month_diff);
    // console.log(fd);

    $.ajax({
        url: bUrl + 'Newapplication/calculatArrear',
        data: fd,
        contentType: false,
        processData: false,
        //dataType: 'json',
        type: 'POST',
        beforeSend: function() {
            $('#wait').show();
        },
        success: function (data) { 

            $("#table").append('<tr class="text-center" id="row_'+i+'"><td>'+data[0].PCODE+'</td><td>'+data[0].YEAR+'</td><td>'+startdate+'</td><td>'+enddate+'</td><td>'+Math.round(data[0].TOTAL)+'</td><td><button type="button" class="btn btn-outline-info btn-grid hovcolor remcal" id="'+i+'"><i class="icofont icofont-bin"></i></button></td><td class="hidden"><input id="hid_'+i+'" type="hidden" value="'+Math.round(data[0].TOTAL)+'"></td></tr>');

            sum += Math.round(data[0].TOTAL);  
            document.getElementById("sum").innerHTML =sum; 
            var val=document.getElementById('hid_'+i).value; 

            tot = parseInt(val);
            //console.log(tot);
            outputdata.push({id:i, value:Math.round(data[0].TOTAL)});
          //  console.log(outputdata);

            i++;
        },
        error: function (err) { 
            // console.log("AJAX ERROR:", err);
            $('#wait').hide();
        },
        complete: function() {
            $('#wait').hide();
        }
    });

};

var getDaysInMonth = function(month,year) {
    // Here January is 1 based
    //Day 0 is the last day in the previous month
    return new Date(year, month, 0).getDate();
    // Here January is 0 based
    // return new Date(year, month+1, 0).getDate();
};*/


/*$("#table").on('click','.remcal',function(){ 

    var button_id = $(this).attr("id");

    var item = outputdata.find(item => item.id === parseInt(button_id));
    var temp = item.value;

  //  console.log("array value:",temp);

    var total = sum - temp;
  //  console.log("total:",total);

    document.getElementById("sum").innerHTML=total;

    $.each(outputdata, function(i, el){
        if (this.id == parseInt(button_id)){
            outputdata.splice(i, 1);
        }
    });

    sum = sum - temp;
   // console.log(outputdata);
    tamp = 0;
    total = 0;
    $('#row_'+button_id+'').remove();                                       
    // $(this).parent().parent().remove(); 
    tot = 0 ;

});*/