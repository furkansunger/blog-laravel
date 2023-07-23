ouahfuphaofae{{$title}}

<form method="POST" action="{{route('admin.category.store')}}">
    @csrf
   
    <label for="title">Başlık:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="description">Açıklama:</label><br>
    <textarea id="description" name="description"></textarea><br>
    <label for="type">Tür:</label><br>
    <input type="text" id="type" name="type"><br>
    <label for="parent_id">Parent ID:</label><br>
    <input type="text" id="parent_id" name="parent_id"><br>
    <input type="submit" value="Gönder">
  </form> 