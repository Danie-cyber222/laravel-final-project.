@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm mb-10">{{$job->employer->name}}</div>
    <div>
        <a href='{{ $job->url }}' target="_blank">
            <h3 class="group-hover:text-blue-600 font-bold text-2xl transition-all duration-300">{{$job->title}} </h3>
        </a>
        <p class="mt-2 text-sm">{{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-10">
        <div>

            @foreach ($job->tags as $tag)
                <x-tags :tag="$tag" size="small" />
            @endforeach



        </div>
        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</x-panel>