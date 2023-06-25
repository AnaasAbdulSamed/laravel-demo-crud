@extends("layouts.theme");
@section("content")

<ul>

@foreach($articles as $article)
            <h1 class="services_taital">Services </h1>
               <li class="">
                  <h3> {{$article->title}}</h3>
                  <p>{{$article->body}}</p>

               </li>
               @endforeach
             
            </ul>

            @endsection
