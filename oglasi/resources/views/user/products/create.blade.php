<x-layout>
    <section class="px-6 py-8">

          <main class="max-w-lg mx-auto mt-10 ">

            <x-panel>
            <h1 class="text-center font-bold text-xl">Add New Porduct</h1>


            <form method="POST" action="products" class="mt-10" enctype="multipart/form-data">
                @csrf

                <x-form.input name="name" />
                <x-form.input name="slug" />
                <x-form.input name="description" type="text"/>
                <x-form.input name="price" type="number"/>

                <x-form.field>
                    <x-form.label name="category" />

                    <select name="category_id" id="category_id">

                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                                @foreach($category->subcategory as $sub)
                                    <option value="{{$sub->id}}">-{{$sub->name}}</option>
                                            @foreach($sub->subcategory as $subsub)
                                            <option value="{{$subsub->id}}">--{{$subsub->name}}</option>
                                            @endforeach
                                @endforeach
                        @endforeach

                    </select>

                    <x-form.error name="category" />

                </x-form.field>

                <x-form.field>
                    <x-form.label name="product condition" />

                    <select name="product_condition" id="product_condition">
                        <option value="novo">Novo</option>
                        <option value="polovno">Polovno</option>
                    </select>

                    <x-form.error name="product_condition" />

                </x-form.field>

                <x-form.input name="product_picture" type="file" />

                <x-form.input name="phonenumber"/>
                <x-form.input name="address" />



                <x-form.button>Submit</x-form.button>
            </form>
            </x-panel>
          </main>
    </section>
</x-layout>
