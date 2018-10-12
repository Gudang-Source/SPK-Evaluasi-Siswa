$(document).ready(function(){


        
        oTable=$('#datatables').dataTable({
            "ajax":{
                "url":baseurl+"getdatatables",
                "dataType": "json"
            },
            "sServerMethod": "POST",
            "bServerSide": true,
            "bAutoWidth": false,
            "bDeferRender": true,
            "bSortClasses": false,
            "bScrollCollapse": true,    
            "bStateSave": true,
            "responsive": true,
            "aoColumns": [
                { "sClass": "id","sName": "id","sWidth": "30px", "aTargets": [0] } ,
                { "sClass": "ip_address", "sName": "ip_address", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "username", "sName": "username", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "password", "sName": "password", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "salt", "sName": "salt", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "email", "sName": "email", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "activation_code", "sName": "activation_code", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "forgotten_password_code", "sName": "forgotten_password_code", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "forgotten_password_time", "sName": "forgotten_password_time", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "remember_code", "sName": "remember_code", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "created_on", "sName": "created_on", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "last_login", "sName": "last_login", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "active", "sName": "active", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "first_name", "sName": "first_name", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "last_name", "sName": "last_name", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "company", "sName": "company", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "phone", "sName": "phone", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "center", "bSortable": false, "bSearchable": false, "sWidth": "100px","mData": 0,
                    "mDataProp": function(data, type, full) {
                    return "<div class='btn-group'><a href='#outside' data-toggle='tooltip' data-placement='top' title='Edit' class='edit btn btn-xs btn-success' id='"+data[0]+"'><i class='glyphicon glyphicon-edit'></i></a><button data-toggle='tooltip' data-placement='top' title='Hapus' class='delete btn btn-xs btn-danger'id='"+data[0]+"'><i class='glyphicon glyphicon-remove'></i></button>";
                }}
               
            ],
        });
      
});   


  