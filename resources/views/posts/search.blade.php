<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-4">Search Posts</h2>
                    <form action="{{ route('post.search') }}" method="GET" class="mb-4">
                        <div class="flex">
                            <input type="text" name="query" placeholder="Search posts..." class="shadow appearance-none border rounded-l w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r">
                                Search
                            </button>
                        </div>
                    </form>
                    
                    @if(isset($posts))
                        <div class="mt-4">
                            <h3 class="text-xl font-bold mb-2">Search Results:</h3>
                            @forelse ($posts as $post)
                                <div class="mb-4 p-4 border rounded">
                                    <h4 class="text-lg font-bold">{{ $post->title }}</h4>
                                    <p class="text-gray-600">{{ Str::limit($post->content, 100) }}</p>
                                    <a href="{{ route('posts.show', $post) }}" class="text-blue-500 hover:underline">Read more</a>
                                </div>
                            @empty
                                <p>No posts found.</p>
                            @endforelse
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>