<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 50vh;
                margin: 0;
            }

            .full-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .m-b-md {
                margin-bottom: 50px;
            }
            button{
              text-align: left;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Lista de Contactos
                </div>
                <div class="container">
                  <a class="btn btn-primary" href="contacts/"><strong>Ver contactos</strong></a> 
                </div>
                
            </div>
        </div>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
        $.noConflict();
        var token = ''
        /*var modal = $('.modal')
        var form = $('.form')
        var btnAdd = $('.add'),
            btnSave = $('.btn-save'),
            btnUpdate = $('.btn-update');*/
        
        var table = $('#contacts').DataTable({
                ajax: '',
                serverSide: true,
                processing: true,
                aaSorting:[[0,"desc"]],
                columns: [
                    {data: 'first_name', first_name: 'first_name'},
                    {data: 'last_name', last_name: 'last_name'},
                    {data: 'telephone', telephone: 'telephone'},
                    {data: 'email', name: 'email'},
                    {data: 'comments', name: 'comments'},
                ]
            });

        /*btnAdd.click(function(){
            modal.modal()
            form.trigger('reset')
            modal.find('.modal-title').text('Add New')
            btnSave.show();
            btnUpdate.hide()
        })

        btnSave.click(function(e){
            e.preventDefault();
            var data = form.serialize()
            console.log(data)
            $.ajax({
                type: "POST",
                url: "",
                data: data+'&_token='+token,
                success: function (data) {
                    if (data.success) {
                        table.draw();
                        form.trigger("reset");
                        modal.modal('hide');
                    }
                    else {
                        alert('Delete Fail');
                    }
                }
             }); //end ajax
        })

       
        $(document).on('click','.btn-edit',function(){
            btnSave.hide();
            btnUpdate.show();

            
            modal.find('.modal-title').text('Update Record')
            modal.find('.modal-footer button[type="submit"]').text('Update')

            var rowData =  table.row($(this).parents('tr')).data()
            
            form.find('input[name="id"]').val(rowData.id)
            form.find('input[name="name"]').val(rowData.name)
            form.find('input[name="phone"]').val(rowData.phone)
            form.find('input[name="email"]').val(rowData.email)

            modal.modal()
        })

        btnUpdate.click(function(){
            if(!confirm("Are you sure?")) return;
            var formData = form.serialize()+'&_method=PUT&_token='+token
            var updateId = form.find('input[name="id"]').val()
            $.ajax({
                type: "POST",
                url: "/" + updateId,
                data: formData,
                success: function (data) {
                    if (data.success) {
                        table.draw();
                        modal.modal('hide');
                    }
                }
             }); //end ajax
        })
            

        $(document).on('click','.btn-delete',function(){
            if(!confirm("Are you sure?")) return;

            var rowid = $(this).data('rowid')
            var el = $(this)
            if(!rowid) return;

            
            $.ajax({
                type: "POST",
                dataType: 'JSON',
                url: "/" + rowid,
                data: {_method: 'delete',_token:token},
                success: function (data) {
                    if (data.success) {
                        table.row(el.parents('tr'))
                            .remove()
                            .draw();
                    }
                }
             }); //end ajax
        })*/
    })
</script>