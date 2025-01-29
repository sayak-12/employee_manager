<x-layout>
    <h2>{{ $emp->name }}'s Profile</h2>

  <div class="bg-gray-200 p-4 rounded">
    <p><strong>Skill level:</strong> {{ $emp->skill }}</p>
    <p><strong>Email:</strong> {{ $emp->email }}</p>
    <p><strong>About me:</strong></p>
    <p>{{ $emp->bio }}</p>
  </div>
</x-layout>
