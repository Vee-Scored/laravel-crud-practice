<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <article class="prose lg:prose-xl max-w-none">
                        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
                        
                        <div class="flex items-center text-gray-500 text-sm mb-4">
                            <span>By {{ $post->author->name }}</span>
                            <span class="mx-2">|</span>
                            <span>{{ $post->created_at->format('F j, Y') }}</span>
                            <span class="mx-2">|</span>
                            <a  class="text-blue-500 hover:underline">
                                {{ $post->category->name }}
                            </a>
                        </div>

                        <div class="mb-8">
                            {!! $post->content !!}
                        </div>

                        <div class="flex justify-between items-center mt-8 pt-4 border-t border-gray-200">
                            <div>
                                <a href="{{ route('post.index') }}" class="text-blue-500 hover:underline">
                                    &larr; Back to all posts
                                </a>
                            </div>
                            @can('update', $post)
                                <div class="flex space-x-2">
                                    <a href="{{ route('post.edit', $post) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                                        Edit
                                    </a>
                                    <form action="{{ route('post.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endcan
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

