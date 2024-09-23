<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Integration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
        <div id="chatbot-container">
            <input type="text" id="chatbot-input" placeholder="Type your message...">
            <div id="chatbot-response"></div>
        </div>
    </header>

    <script>
        $(document).ready(function() {
            $('#chatbot-input').keypress(function(e) {
                if (e.which == 13) {
                    var message = $(this).val();
                    $(this).val('');

                    $.ajax({
                        url: 'process_message.php',
                        type: 'POST',
                        data: { message: message },
                        success: function(response) {
                            $('#chatbot-response').append('<p>' + response + '</p>');
                            // Scroll to the bottom of the response area
                            $('#chatbot-response').scrollTop($('#chatbot-response')[0].scrollHeight);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>