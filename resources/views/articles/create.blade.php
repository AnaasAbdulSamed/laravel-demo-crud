@extends("layouts.theme")



@section("content")
 
  
  <form method="post" action="/articles/store">
    @csrf
    <!-- @method('put') -->
    <div class="form-group">
        <label for=""> Article Title</label>
        <input type="text" value="{{old('title')}}" name="title" class="form-control">
       

        <!-- @if ($errors->has("title"))       (one method) --> 
        <!-- (second method) -->
        @error("title")      
          
        <p style="color:red">{{$errors->first("title")}}</p>
          @enderror
        <!-- @endif -->


    </div>
    <div class="form-group">
    <label for=""> Article Body</label>
        <textarea class="form-control" name="body" rows="" cols=""> {{old('body')}}
      

        </textarea>
        @if ($errors->has("title"))
        <p style="color:red">{{$errors->first("body")}}</p>

        @endif
        

    </div>
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
        

    </div>
  </form>


 

@endsection
