<x-layout>
    <h2>{{ $emp->name }}'s Profile</h2>
    @if (session('success'))
    <div class="bg-green-500 text-white p-3 w-full mb-4">
        {{ session('success') }}
    </div>
@endif

  <div class="bg-gray-200 p-4 rounded">
    <p><strong>Skill level:</strong> {{ $emp->skill }}</p>
    <p><strong>Email:</strong> {{ $emp->email }}</p>
    <p><strong>About me:</strong></p>
    <p>{{ $emp->bio }}</p>
  </div>
  <div class="bg-gray-300 p-4 my-2 rounded">
    
    <h3 class='text-center text-white'>Project</h3>
    <p>{{ $emp->project->name }}</p>
    <p>{{ $emp->project->description }}</p>
    <p>Skills passed: {{ $emp->project->skill_reqd <= $emp->skill ? "yes":"no" }}</p>
  </div>
  <a href="{{ route('employee.edit', $emp->id) }}">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-3" type="button">
        Edit Employee
    </button>
</a>
  <form action="{{route('employee.destroy', $emp->id)}}" class="mx-auto" method="POST">
    @csrf
    @method('DELETE')
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4" type="submit">Delete Employee</button>
  </form>
</x-layout>
