<x-mail::message>

    <x-slot:subcopy class="pb-3">
        Mail From - <mark class="text-success text-color-success">{{ $data['email'] }}</mark> - <em>{{ config('app.name') }}</em>
        <x-mail::subcopy class="pb-3">
        <strong>Name:</strong> {{ $data['name'] }} <br>
        <strong>Email Address:</strong> {{ $data['email'] }} <br>
        <strong>Subject:</strong> {{ $data['subject'] }} <br>
        <strong>Message:</strong> {{ $data['message'] }} <br>
        </x-mail::subcopy>

    Thanks,
    {{ config('app.name') }}
    </x-slot:subcopy>

</x-mail::message>
