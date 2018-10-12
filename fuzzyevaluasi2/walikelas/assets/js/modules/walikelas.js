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
                { "sClass": "id_walikelas","sName": "id_walikelas","sWidth": "30px", "aTargets": [0] } ,
                { "sClass": "nik_walikelas", "sName": "nik_walikelas", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "nama_walikelas", "sName": "nama_walikelas", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "jab_fungsional", "sName": "jab_fungsional", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "guru_matpel", "sName": "guru_matpel", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "datetime", "sName": "datetime", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "center", "bSortable": false, "bSearchable": false, "sWidth": "100px","mData": 0,
                    "mDataProp": function(data, type, full) {
                    return "<div class='btn-group'><a href='#outside' data-toggle='tooltip' data-placement='top' title='Edit' class='edit btn btn-xs btn-success' id='"+data[0]+"'><i class='glyphicon glyphicon-edit'></i></a><button data-toggle='tooltip' data-placement='top' title='Hapus' class='delete btn btn-xs btn-danger'id='"+data[0]+"'><i class='glyphicon glyphicon-remove'></i></button>";
                }}
               
            ],
        });
      
});   


  