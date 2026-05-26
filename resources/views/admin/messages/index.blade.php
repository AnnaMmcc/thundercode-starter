@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-10">
    Contact Messages
</h1>

<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>

                <th class="text-left p-5">
                    Name
                </th>

                <th class="text-left p-5">
                    Email
                </th>

                <th class="text-left p-5">
                    Message
                </th>

                <th class="text-left p-5">
                    Date
                </th>
                <th class="text-left p-5">
                    Actions
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($messages as $message)

                <tr class="border-t">

                    <td class="p-5 font-semibold">
                        {{ $message->name }}
                    </td>

                    <td class="p-5">
                        {{ $message->email }}
                    </td>

                    <td class="p-5 max-w-sm">
                        {{ Str::limit($message->message, 80) }}
                    </td>

                    <td class="p-5 text-gray-500">
                        {{ $message->created_at->diffForHumans() }}
                    </td>

                    <td class="p-5">

                     <a
                     href="{{ route('admin.messages.show', $message) }}"
                      class="text-black font-semibold"
                     >
                      View
                      </a>

</td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

<div class="mt-8">

    {{ $messages->links() }}

</div>

@endsection
