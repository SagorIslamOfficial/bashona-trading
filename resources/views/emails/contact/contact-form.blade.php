<x-mail::message>

    <x-slot:subcopy>
        Mail From <mark class="text-success">{{ $data['email'] }}</mark> - <em>Bashona Trading Ltd.</em>
        <x-mail::subcopy>
        <strong>Name:</strong> {{ $data['name'] }} <br>
        <strong>Email Address:</strong> {{ $data['email'] }} <br>
        <strong>Subject:</strong> {{ $data['subject'] }} <br>
        <strong>Message:</strong> {{ $data['message'] }} <br>
        </x-mail::subcopy>

    Thanks
    {{ config('app.name') }}
    </x-slot:subcopy>

</x-mail::message>
