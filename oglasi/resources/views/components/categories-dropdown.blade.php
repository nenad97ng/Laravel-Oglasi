@props(['categories'])

@foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                                    @foreach($category->subcategory as $sub)
                                        <option value="{{$sub->id}}">-{{$sub->name}}</option>
                                                @foreach($sub->subcategory as $subsub)
                                                <option value="{{$subsub->id}}">--{{$subsub->name}}</option>
                                                @endforeach
                                    @endforeach
                        @endforeach
