asdklsalkdaskl
<ul>
    @foreach ($categories as $category)
        <li>{{$category->id}} .@if(isset($category->parent)){{ $category->parent->title}} @endif >  {{ $category->title}} <a href="{{route('admin.category.show',['id' => $category->id])}}">Detay</a></li>
    @endforeach
  
</ul>

<a href="{{route('admin.category.create')}}">Git</a>