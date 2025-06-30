@props(['company'])
<x-panel class="flex gap-x-6 items-center ">
    <div>
        <!-- Display company logo or other relevant info -->
        <x-employer-logo :employer="$company" />
    </div>
    <div class="flex-1 flex flex-col">
        <h3 class="font-bold text-2xl">{{ $company->name }}</h3>
        <!-- Display other company details -->
    </div>
</x-panel>
