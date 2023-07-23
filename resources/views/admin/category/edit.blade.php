<h1>Edit</h1>

<form method="POST" action="{{route('admin.category.update')}}">
    @csrf
   
    <label for="title">Başlık:</label><br>
    <input value="{{$category->title}}" type="text" id="title" name="title"><br>
    <label for="description">Açıklama:</label><br>
    <textarea id="description" name="description">{{$category->description}}</textarea><br>
    <label for="type">Tür:</label><br>
    <input value="{{$category->type}}" type="text" id="type" name="type"><br>
    <label for="parent_id">Parent ID:</label><br>
    <input value="{{$category->parent_id}}" type="text" id="parent_id" name="parent_id"><br>
    {{-- <label for="parent_id">Category ID:</label><br> --}}
    <input value="{{$category->id}}" id="category_id" name="category_id" type="hidden"><br>
    <input type="submit" value="Güncelle">
  </form> 