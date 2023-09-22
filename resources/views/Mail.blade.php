<!DOCTYPE html>
<html>
    <head>
        <title>Email Notification</title>
    </head>
    <body>
        <p><strong>Name :</strong>{{ $data['name'] }}</p>
        <p><strong>From :</strong>{{ $data['email'] }}</p>
        <br>
        <p>{{ $data['message'] }}</p>
        @isset($attachment)
            <p>Attachment:</p>
            <a href="{{ $attachment->getRealPath() }}">{{ $attachment->getClientOriginalName() }}</a>
        @endisset
    </body>
</html>