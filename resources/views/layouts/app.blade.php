<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

        <link href=" {{asset('css/styles.css')}}" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src=" {{asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js "></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src=" {{asset('js/datatables-simple-demo.js')}}"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
    </head>
    <body class="sb-nav-fixed">
    @yield('content')
    <script>
        $(document).on('click', '.database', function () {

            let element = $(this),
                url = element.data('url');


            $.ajax({

                url: url,
                method: "GET",


            }).done(function (data) {

                element.next().html(data);
                $('.card').html(data);

            });


        });


        $(document).on('click', '.get_columns', function () {

            let element = $(this),
                url = element.data('url');


            $.ajax({

                url: url,
                method: "GET",


            }).done(function (data) {

                $('.card').html(data);

            })


        });

        $(document).on('click', '.show_create_table', function () {

            let element = $(this),
                url = element.data('url');


            $.ajax({

                url: url,
                method: "GET",


            }).done(function (data) {

                $('.card').html(data);

            })


        });

        $(document).on('click', '#show_create_database', function () {

            let element = $(this),
                url = element.data('url');


            $.ajax({

                url: url,
                method: "GET",


            }).done(function (data) {

                $('.card').html(data);

            })


        });

        $(document).on('click', '#create_table_btn', function () {

            let element = $(this),
                form = element.closest('form'),
                url = form.data('action'),
                data = form.serializeArray();
            $.ajax({

                url: url,
                method: "POST",
                data: data


            }).done(function (data) {

                if(confirm(data.success)) {
                    window.location.href = "/"
                }
            });


        });

        $(document).on('click', '#create_database_btn', function () {

            let element = $(this),
                form = element.closest('form'),
                url = form.data('action'),
                data = form.serializeArray();
            $.ajax({

                url: url,
                method: "POST",
                data: data


            }).done(function (data) {

                $('.card').html(data);

            });


        });

        $(document).on('click', '#show_create_database', function () {

            let element = $(this),
                url = element.data('url');


            $.ajax({

                url: url,
                method: "GET",


            }).done(function (data) {

                $('.card').html(data);

            })


        });
        $(document).on('click', '#create_count_btn', function () {

            let rows_count=$('#count').val();
              //  count=1;

            for(let i=1;i<=rows_count;i++){

                // in cloned row fid input select and fix key
                let   row=  $('#columns-table tr:last'),
                 cloned_row=row.clone();
                cloned_row.find('input').val('');
                cloned_row.find('select').prop("selectedIndex", 0);
                cloned_row.find('input,select').each(function (index,element) {

                 let count=$(element).attr('name').replace(/[^0-9]/g,'');

                  // let name=$(element).attr('name').replace('['+count+']','['+(parseInt(count)+1)+']');
                //   let arr= Array($(element).attr('name'));
                // console.log($(element[0]).attr('name'));
                    let name=$(element).attr('name').slice(10);
                    //console.log(name);
                    $(element).attr({ name: "columns["+(parseInt(count)+1)+"]"+name});
                     // let input_name= $(or).attr('name');
                     // console.log(input_name);

                    //console.log(key.replace('[4]','[4+1]'));
                });
                $('#columns-table tbody').append(cloned_row.prop('outerHTML'));


            }



        });
        $(document).on('click', '#add_one_col_btn', function () {




                let   row=  $('#columns-table tr:last'),
                    cloned_row=row.clone();
                cloned_row.find('input').val('');
                cloned_row.find('select').prop("selectedIndex", 0);
                cloned_row.find('input,select').each(function (index,element) {
                    let count=$(element).attr('name').replace(/[^0-9]/g,'');

                    let name=$(element).attr('name').slice(10);
                    $(element).attr({ name: "columns["+(parseInt(count)+1)+"]"+name});

                });
                $('#columns-table tbody').append(cloned_row.prop('outerHTML'));






        });
        $(document).on('click', '#delete_col', function () {
            let element =$(this);
            let tbody = $("#columns-table tbody");

            if (tbody.find('tr').length > 1) {
                $(element).closest('tr').remove();


            }
        });
        $(document).on('click', '.delete_table', function () {
            if (confirm('Do You Wont to Delete Table?')){

                let element = $(this),
                    url = element.data('url');


                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    method: "POST",


                }).done(function (data) {

                    alert('Table is deleted');
                    window.location.href = "/"

                })
            }else{

                alert("You canceled")
            }



        });


    </script>
    </body>
    
</html>
