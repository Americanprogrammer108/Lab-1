<x-layout>
	 @foreach ($posts as $post)
		<article>
			<h1>
				<a href="/posts/{{ $post->slug}}"> 
					{!! $post->title !!}
				</a>
			</h1>
			
			<p> 
				By <a href="/categories/{{$post->author->id}}">{{$post->category->name }}</a> in <a href="/categories/{{$post->category->slug}}"> </a>
			</p>
			
			
			<div>
				{{ $post->excerpt }}
			</div>
		</article>
	 @endforeach
 </x-layout>
 
 <!-- pick up on episode 29 -->
 
 <!-- {{$post->category->slug ?? 'none'}} -->
 <!-- 0:23 class not found-->