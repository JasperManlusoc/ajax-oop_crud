$(document).ready(function(){
    function displayAll(){
        $.ajax({
            type: 'GET',
            url: 'config/viewRecords.php',
            dataType: 'text',
            success:function(data, status, xhr){
                $("#viewRecords .tbody").html(data);
                console.log(data);
            },
            error:function(xhr, status, error){
                $message = "<h1>"+xhr['status']+" "+error+"</h1>";
                $("body").html($message);
            }
        });
    }
    displayAll();
    
    $(document).on('click','.edit',function(e){
        var id = e.target.value;
        $.ajax({
            type:'GET',
            url: 'config/viewRecord.php?id='+id,
            dataType:'json',
            success:function(data, status, xhr){
                $("#editForm [name='id']").val(data["ID"]);
                $("#editForm [name='name']").val(data["Name"]);
                $("#editForm [name='age']").val(data["Age"]);
                $("#editForm [name='course']").val(data["Course"]);
            },
            error: function(xhr, status, error){
                $message="<h1>"+xhr['status']+" "+"</h1>";
                $("body").html($message);
            }
        })
    });
    
    $(document).on('click','.delete',function(e){
        var id = e.target.value;
        $.ajax({
            type:'GET',
            url: 'config/deleteRecord.php?id='+id,
            success:function(data, status, xhr){
                displayAll();
            },
            
        })
    });
    
    $("#editForm").submit(function(e){
        e.preventDefault();
        var data= $(this).serialize();
        $.ajax({
            type:'POST',
            url:'config/updateRecord.php',
            data:data,
            success: function(data, status, xhr){
                displayAll();
            },
            error: function(xhr, status, error){
                $message="<h1>"+xhr['status']+" "+"</h1>";
                $("body").html($message);
            }
        })
    })
    $("#addForm").submit(function(e){
        e.preventDefault();
        var data= $(this).serialize();
        $.ajax({
            type:'POST',
            url:'config/createRecord.php',
            data:data,
            success: function(data, status, xhr){
                displayAll();
            },
            error: function(xhr, status, error){
                $message="<h1>"+xhr['status']+" "+"</h1>";
                $("body").html($message);
            }
        })
    })
});