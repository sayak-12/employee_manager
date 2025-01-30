<x-layout>
    <h2>Admin Login</h2>
    <form action="{{route('admin.signin')}}" method="POST" class="mx-auto">
        @csrf
        @if ($errors->any())
            <ul class="bg-red-500 text-white p-3 w-full mb-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <label for="email" class="w-full text-left flex">Admin Email:</label>
        <input type="email" id="email" name="email" value="{{old('email')}}" required>

        <label for="password" class="w-full text-left flex">Admin Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" class="btn mt-4 w-full hover:bg-blue-400 ">Sign in</button>
    </form>
</x-layout>
