@extends("layouts.theme")



@section("content")

<a href="articles/create">Add New Articles</a>





 @foreach($articles as $article)
<ul class="style1">
            <!-- <h1 class="services_taital">Services </h1> -->
               <li class="first">
                  <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                  <p><a a href="#">{{$article->body}}</a></p>
                  <a class="btn btn-dark" href="/articles/{{$article->id}}/edit">Edit</a>
                  

               </li>
               @endforeach
             
            </ul>

@endsection