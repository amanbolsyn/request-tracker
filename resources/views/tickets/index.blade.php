<x-layout>
    <x-slot:title>
        Tickets
    </x-slot:title>
    <h1 class="flex justify-center text-3xl m-10 mt-15">Your Tickets</h1>

    @foreach($tickets as $ticket)
    <div class="flex justify-center m-5">
        <div class="inline-block border-1 rounded-xl w-[40%] p-5 hover:scale-[1.02] hover:cursor-pointer ">
            <div class="flex mb-2">
                <div class="flex flex-1">
                   <p class="p-[0.4rem] pb-[0.1rem] pt-[0.1rem] text-md rounded-md {{PrioratyColor($ticket['prioraty'])}}"><b>{{$ticket['prioraty']}}</b></p>
                </div>
                <div class = "flex flex-1 justify-end">
                    <p class="p-[0.4rem] pb-[0.1rem] pt-[0.1rem]  rounded-md {{StatusColor($ticket['status'])}}">{{$ticket['status']}}</p>
                </div>
            </div>
            <h2><b>{{$ticket['category']}}: {{$ticket['title']}}</b></h2><br>
            <p>{{$ticket['body']}}</p>
        </div>
    </div>
    @endforeach

</x-layout>