<x-layout>
    <h2>Add Project</h2>
    <form action="{{route('admin.project')}}" method="POST" class="mx-auto">
        @csrf
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 w-full mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <ul class="bg-red-500 text-white p-3 w-full mb-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <label for="name" class="w-full text-left flex">Project Name:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" required>
        <label for="skill_reqd" class="w-full text-left flex">Project Skill Requirement:</label>
        <input type="number" id="skill_reqd" name="skill_reqd" value="{{old('skill_reqd')}}" required>
        <label for="desc" class="w-full text-left flex">Project Description:</label>
        <textarea rows="5" id="desc" name="description" required>{{old('description')}}</textarea>
        <button type="submit" class="btn mt-4 w-full hover:bg-blue-400 ">Add Project</button>
    </form>
</x-layout>
