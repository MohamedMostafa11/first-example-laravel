<x-layout>
    <x-slot:heading>
        job details
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p>
        this job pays {{ $job['salary'] }} per year.
    </p>

</x-layout>
