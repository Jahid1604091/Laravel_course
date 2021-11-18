<h2>This is contact page created by <strong>{{$creator}}</strong> on {{$date}} </h2>
<h3>Contact him at -
    <ol>
        @foreach($contact_no as $contact)
            <li>{{$contact}}</li>
        @endforeach
    </ol>

</h3>



