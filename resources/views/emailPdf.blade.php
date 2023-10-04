<!DOCTYPE html>
<html>

<head>
    <title>Email pdf</title>
</head>


<body>
    <h2 style="margin-left: 45px;margin-top: 20px;">
        @php
            echo $emailTemplate->mail_subject;
        @endphp
    </h2>
    <p>
        @php
            echo $emailTemplate->mail_body;
        @endphp
    </p>
    @php
        //var_dump($ticket);
        //var_dump($emailTemplate);
    @endphp
</body>

</html>
