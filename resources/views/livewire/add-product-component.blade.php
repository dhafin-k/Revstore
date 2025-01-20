<div>
    <div class="mx-2 com_card">
        <h3 class="mb-3 com_card_title">Add New Product</h3>

        <form wire:submit.prevent="saveProduct">
          <label for="title" class="form_label">Product Title</label>
          <input type="text" wire:model="title" class="form-input" />

          <label for="category_id" class="mt-2 form_label">Category</label>
          <select wire:model="category_id" class="form-input">

            <option value="">Select Category</option>

                @foreach ($categories as $category)

                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach

         </select>

          <label for="description" class="mt-2 form_label">Description</label>
          <textarea name="" wire:model="description" class="form-input" id=""></textarea>

          <label for="price" class="mt-2 form_label">Price</label>
          <input type="number" wire:model="price" class="form-input" />

          <label for="image" class="mt-2 form_label">Product Image</label>
          <input type="file" wire:model="image" class="form-input" />

          <button type="submit" class="mt-3 btn-one">Add Product</button>
        </form>
        
    @if (session()->has('message'))
        <div class="mt-2 alert alert-succes">{{ session('message') }}</div>
    @endif

      </div>
</div>
