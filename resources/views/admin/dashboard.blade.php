<x-layout>
    <h2>Admin dashboard</h2>
    <p>Welcome, {{ Auth::guard('admin')->user()->username }}!</p>
    <p>Email: {{ Auth::guard('admin')->user()->email }}</p>
    <a href="{{route('admin.add_project')}}" class="btn-red mx-auto">Add Project</a>
    <form action="{{route('admin.logout')}}" method="post" class="mx-auto my-2">
        @csrf
        <button class="btn-red mx-auto" type='submit'>Log Out</button>
    </form>
</x-layout>
