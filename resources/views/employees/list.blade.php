<x-layout>
    @if (session('success'))
            <div class="bg-red-500 text-white p-3 w-full mb-4 flash">
                {{ session('success') }}
            </div>
        @endif
    @foreach ($employees as $emp)
        <x-card href="{{ route('employee.show', $emp['id']) }}" :highlight="$emp['skill'] > 70">
            <div class="flex flex-col items-start">
                <h3>{{ $emp->name }}</h3>
                <p>{{ $emp->project->name }}</p>
            </div>
        </x-card>
    @endforeach

    {{ $employees->links() }}
</x-layout>
