<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap --><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>











<div id="app">
    <div class="messenger">
        <div class="panel panel-default">
            <div class="panel-heading">
                총 메세지 수 : <span class="total-message-count"></span>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled">
                </ul>
            </div>
            <div class="panel-footer">
                <input type="text" class="form-control user_message">
            </div>
        </div>
    </div>

    <div class="message-alert" style="display: none;">
        <button type="button" class="btn btn-primary">
            신규 메세지
            <span class="badge">
            </span>
        </button>
    </div>
</div>





<script src="js/jquery.messenger.js"></script>
<script>
    $(function() {
        $('.messenger').messenger();

        $('.messenger').on('message-updated', function(evt, messages) {
            var $messageAlert = $('.message-alert');
            var $badge = $messageAlert.find('.badge');

            messages = messages.filter(function(message) {
                return message.read == false;
            });

            $badge.text(messages.length);
            if (messages.length > 0) {
                $messageAlert.css('display', 'block');
            } else {
                $messageAlert.css('display', 'none');
            }
        });
    });
</script>
</body>
</html>