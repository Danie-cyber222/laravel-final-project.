<x-layout>
    <x-page-heading>Companies</x-page-heading>

    <div class="mt-6 space-y-6">
        @foreach ($companies as $company)
            <x-company-card-wide :company="$company" />
        @endforeach
    </div>
</x-layout>
