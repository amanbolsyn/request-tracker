<x-layout>
    <x-slot:title>
        Tickets
    </x-slot:title>
    <h1 class="flex justify-center text-3xl m-10">Your Tickets</h1>

    @foreach($tickets as $ticket)
    <a href="/ticket/{{$ticket['id']}}">
        <div class="flex justify-center mb-5">
            <div class="inline-block border-1 rounded-xl w-[40%] p-5 hover:scale-[1.02] hover:cursor-pointer ">
                <div class="flex justify-between mb-2">

                    <div class="flex">
                        <p class="p-[0.4rem] pb-[0.1rem] pt-[0.1rem] mr-3 rounded-md {{StatusColor($ticket['status'])}}">{{$ticket['status']}}</p>
                        <p class="p-[0.4rem] pb-[0.1rem] pt-[0.1rem] rounded-md {{PrioratyColor($ticket['prioraty'])}}"><b>{{$ticket['prioraty']}}</b></p>
                    </div>

                    <div class="flex">
                        <p class="mr-3">{{$ticket->user->first_name}} {{$ticket->user->last_name}}</p>
                        <p ><i>{{date('d/m/y', strToTime($ticket['created_at']))}}</i></p>
                    </div>
                </div>
                <h2 class="mb-2"><b>{{$ticket['category']}}: {{$ticket['title']}}</b></h2>
                <p>{{$ticket['body']}}</p>
            </div>
        </div>
    </a>
    @endforeach
    <div class="mr-5 ml-5 mb-10" >
        {{$tickets->links()}}
    </div>
</x-layout>