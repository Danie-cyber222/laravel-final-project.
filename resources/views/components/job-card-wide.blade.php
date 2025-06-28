@props(['job'])
<x-panel class="flex gap-x-6 items-center ">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-[#c2c2c2]">{{$job->employer->name}}</a>
        <a href='{{ $job->url }}' target="_blank">
            <h3 class="group-hover:text-blue-600 font-bold text-2xl transition-all duration-300">{{$job->title}} </h3>
        </a>
        <p class="text-[#c2c2c2] text-sm mt-auto">{{ $job->salary }}</p>

    </div>

    <div>
        <div>
            @foreach ($job->tags as $tag)
                <x-tags :tag="$tag" />
            @endforeach
        </div>

    </div>

</x-panel>