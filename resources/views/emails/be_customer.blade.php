Dear Sir,

<p>You have received a Customer request with the following details:</p>
<p> Name: {{ $name }} </p>
<p> Email: {{ $email }} </p>
<p> Mobile: {{ $mobile }} </p>
<p> Country: {{ $country }} </p>
@if (!empty($commercial_registration))
    <p> Commercial Registration: {{ $commercial_registration }} </p>
@endif
<p> No. of Employees(Sales Team): {{ $employees_num }} </p>
<p> Subject: {{ $subject }} </p>
<p> Message: {!! nl2br($comment) !!} </p>
<br>
Regards,<br>
GX Group