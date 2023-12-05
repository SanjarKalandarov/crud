<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="{{route('brand.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Brands</label>
                                    <input type="text" class="form-control" id="name" required name="name" placeholder="Brand name">
                                    </div>
                                <div class="form-group">
                                    <label for="price">price</label>
                                    <input type="number" class="form-control" id="price" required  name="price" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label for="operativ">Operativ</label>
                                    <input type="number" class="form-control" id="operativ" required  name="operativ" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label for="opshiy">opshi</label>
                                    <input type="number" class="form-control" id="opshiy" required  name="opshiy" placeholder="Price">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" required name="image" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">image</label>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <input type="submit" class=" btn btn-primary" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
