<div>
    <!-- Breadcrumb Component -->
    <livewire:bread-crumb :url="$currentUrl" />

    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card Container -->
        <div class="bg-slate-100 rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-900">
            <!-- Form bắt sự kiện submit qua Livewire -->
            <form wire:submit.prevent="save">
                
                <!-- Product Information Section -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 border-t border-gray-200 dark:border-neutral-700">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Thêm sản phẩm       
                        </h2>
                    </div>

                    <!-- Product Name -->
                    <div class="sm:col-span-3">
                        <label for="product_name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Tên sản phẩm
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input 
                            type="text" 
                            id="product_name" 
                            wire:model.defer="product_name" 
                            placeholder="Enter product name" 
                            class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400"
                        >
                        @error('product_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Product Price -->
                    <div class="sm:col-span-3">
                        <label for="product_price" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Giá
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <input 
                            type="text" 
                            id="product_price" 
                            wire:model.defer="product_price" 
                            placeholder="Enter price" 
                            inputmode="decimal" 
                            pattern="[0-9]*[.,]?[0-9]*" 
                            class="py-2 px-3 block w-full shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400"
                        >
                        @error('product_price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <!-- Product Category -->
                    <div class="sm:col-span-3">
                        <label for="category_id" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Danh mục
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <select 
                            id="category_id" 
                            wire:model.defer="category_id" 
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400"
                        >
                            <option value="">Chọn danh mục</option>
                            @foreach ($all_categories as $category)
                                <option value="{{ $category->id }}" wire:key="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- More Details Section -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 border-t border-gray-200 dark:border-neutral-700">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Thêm thông tin
                        </h2>
                    </div>

                    <!-- Product Image Preview -->
                    <div class="sm:col-span-9 sm:col-start-4">
                        @if ($photo)
                            <img 
                                src="{{ $photo->temporaryUrl() }}" 
                                alt="Product image preview" 
                                class="rounded-lg h-64 w-64 object-cover"
                            >
                        @else
                            <img 
                                src="{{ asset('images/placeholder-image.jpg') }}" 
                                alt="Default image" 
                                class="rounded-lg h-64 w-64 object-cover"
                            >
                        @endif
                    </div>

                    <!-- File Input for Product Image -->
                    <div class="sm:col-span-3">
                        <label for="photo" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Ảnh sản phẩm
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <!-- Sử dụng AlpineJS để theo dõi tiến trình upload -->
                        <div 
                            x-data="{ uploading: false, progress: 0 }"
                            x-on:livewire-upload-start="uploading = true"
                            x-on:livewire-upload-finish="uploading = false"
                            x-on:livewire-upload-error="uploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <input 
                                type="file" 
                                id="photo" 
                                wire:model="photo" 
                                class="block w-full border shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400"
                            >
                            @error('photo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

                            <!-- File Uploading Progress Bar -->
                            <div x-show="uploading" class="mt-2">
                                <div class="flex items-center gap-x-3">
                                    <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                        <div class="bg-blue-600 h-full rounded-full transition" :style="`width: ${progress}%`"></div>
                                    </div>
                                    <div class="w-8 text-right">
                                        <span class="text-sm text-gray-800 dark:text-white" x-text="`${progress}%`"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Description -->
                    <div class="sm:col-span-3">
                        <label for="product_description" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Miêu tả sản phẩm
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <textarea 
                            id="product_description" 
                            wire:model.defer="product_description" 
                            rows="6" 
                            placeholder="Add a product description here!" 
                            class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500"
                        ></textarea>
                        @error('product_description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                >
                    <div wire:loading wire:target="save" class="animate-spin inline-block w-5 h-5 border-2 border-current border-t-transparent rounded-full" role="status" aria-label="loading">
                        <span class="sr-only">Loading...</span>
                    </div>
                    Lưu
                </button>

            </form>
        </div>
    </div>
</div>
