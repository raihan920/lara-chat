<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/js/app.js', 'resources/css/app.scss'])
        <title>Chat</title>
        <style>
            .scroll {
                background-color: #fed9ff;
                height: 180px;
                overflow-x: hidden;
                overflow-y: auto;
            }
            .nopadding{
                padding: 0;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2> Public Chat!!!! </h2>
                    <form action="#" method="POST" id="message_form">
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3 scroll" id="messages">

                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <input type="text" class="form-control" id="message" name="message">
                        </div>
                        <button type="submit" id="send_message" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body>
</html>
