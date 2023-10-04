<x-layout>

	<article>
		<h1>{!! $post->title !!}</h1>
		
		<p>
			By <a href="/authors/{{$post->author->username}}">{{ $post->category->name }}</a> in <a href="/categories/{{$post->category->slug}}"> </a>
			</p>
		
		<div>
			{!! $post->body !!}
		</div>
	</article>
	
	<a href="/">Go Back </a>
</x-layout>
	
	<!-- Error on episode 27 -->