@php $dash .= '-- '; @endphp


@foreach($categories as $category)
    <option value="{{$category->id}}">{{$dash . $category->title_fa}}</option>
    @if(count($category->children))
        @include('admin.category.__children',['categories' => $category->children])
    @endif
@endforeach
