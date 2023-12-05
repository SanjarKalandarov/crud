<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class=" mb-4 text-right">
                        <a href="{{route('brand.create')}}" class="btn btn-primary">Brend add</a>
                    </div>
                    <table class="table "  >
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">image</th>
                            <th scope="col">created_at</th>
                        </tr>
                        </thead>
                        <tbody>
                   @foreach($brands as $brand)
                       <tr>
                           <th scope="row">{{$loop->index+1}}</th>
                           <td>{{$brand->name}}</td>
                           <td>{{$brand->price}}</td>
                           <td><img src="{{ asset('images/'.$brand->image) }}" style="height: 50px;width:100px;" alt=""></td>
                           <td>{{$brand->created_at}}</td>

                       </tr>

                   @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
