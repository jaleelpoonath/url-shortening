<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form>
                {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Enter full URL</label>
                        <input type="text" name="url_long" id="url_long" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="button" name="" id="create_shorter" class="form-control" value="Create shorter URL" />
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="{{ URL::asset('js/jquery-1.11.0.min.js') }}"></script>
    <script>
        $("#create_shorter").on('click',function(){
            alert('working');
            var url_long = $("#url_long").val(); 
            $.ajax({
                type: "POST",
                url: "/save_url",
                data: {url_long:url_long, "_token":"{{ csrf_token() }}"},
                success: function(data){
                	console.log(data);
                    alert(data);
                }

            });
        });
    </script>
</html>
