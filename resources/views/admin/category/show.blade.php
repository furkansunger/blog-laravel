{{$category}}
Child Counts: {{count($category->child_categories)}}
<form action="{{route('admin.category.destroy', ['id' =>  $category->id])}}" method="post">
    @csrf
    <button type="submit">Delete</button>
</form>

<a href="{{route('admin.category.edit', ['id' => $category->id])}}">Edit</a>