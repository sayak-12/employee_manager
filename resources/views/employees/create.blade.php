<x-layout>
    <h2>Create Employee</h2>
    <form action="{{ route('employee.store') }}" method="POST" class="mx-auto">
        @csrf
        <!-- ninja Name -->
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
        <label for="name" class="w-full text-left flex">Employee Name:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" required>

        <!-- ninja Strength -->
        <label for="skill" class="w-full text-left flex">Employee Skill (0-100):</label>
        <input type="number" id="skill" name="skill" value="{{old('skill')}}" required>
        <label for="email" class="w-full text-left flex">Email Address:</label>
        <input type="email" id="email" name="email" value="{{old('email')}}" required>

        <!-- ninja Bio -->
        <label for="bio" class="w-full text-left flex">Biography:</label>
        <textarea rows="5" id="bio" name="bio" required>{{old('bio')}}</textarea>

        <!-- select a dojo -->
        <label for="project_id" class="w-full text-left flex">Project id:</label>
        <select id="project_id" name="project_id" required>
            <option value="" disabled selected>Select a Project ID</option>
            @foreach ($projects as $proj)
                <option value="{{ $proj->id }}" {{ $proj->id==old('project_id') ? "selected":""}}>{{ $proj->id }} - {{ $proj->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4 w-full">Create Employee</button>

        <!-- validation errors -->

    </form>
</x-layout>
