<x-layout>

	<article>
		<h1>{!! $post->title !!}</h1>
		
		<p>
			By <a href="/authors/{{$post->author->name}}">{{$post->author->name}} </a> in <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
		</p>
		
		<div>
			{!! $post->body !!}
		</div>
	</article>
	
	<a href="/">Go Back </a>
</x-layout>
	
	<!-- Error on episode 27 -->