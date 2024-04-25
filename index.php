<!DOCTYPE html>
<html>
<head>
    <title> ChatBot</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <h1>ChatBot</h1>

    <div id="chat-output">
        <?php
        // Execute the Python script and capture its output
        $output = shell_exec('python chatbot.py');
        echo "<pre>$output</pre>";
        ?>
    </div>
</body>
</html>
