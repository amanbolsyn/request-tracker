<x-layout>
    <x-slot:title>
        Ticket
    </x-slot:title>
    <h1 class="flex justify-center text-3xl m-10 mt-15">Ticket</h1>
    <div class="flex justify-center m-5">
        <div class="inline-block border-1 rounded-xl w-[40%] p-5 hover:scale-[1.02] hover:cursor-pointer ">
            <div class="flex mb-2">
                <div class = "flex flex-1">
                    <p class="p-[0.3rem] pb-[0.1rem] pt-[0.1rem] rounded-md {{PrioratyColor($ticket['prioraty'])}}">{{$ticket['prioraty']}}</p>
                </div>
                <p class="flex flex-1 justify-end">{{$ticket['status']}}</p>
            </div>
            <h2><b>{{$ticket['category']}}: {{$ticket['title']}}</b></h2><br>
            <p>{{$ticket['body']}}</p>
        </div>
    </div>
</x-layout>