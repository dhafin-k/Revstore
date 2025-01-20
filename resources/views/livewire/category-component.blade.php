<div>
    <div class="mx-2 com_card">
        <h3 class="mb-3 com_card_title">Add New Category</h3>

        <form wire:submit.prevent="saveCategory">
          <label for="name" class="form_label">Category Name</label>
          <input type="text"  wire:model="name" class="form-input" />

          <button type="submit" class="mt-3 btn-one">Add Category</button>
        </form>
        
    @if (session()->has('message'))

        <div class="mt-2 alert alert-success">{{ session('message') }}</div>
    @endif

      </div>

      <!-- categories table -->

      <div class="mx-2 com_card">
        <h3 class="mb-3 com_card_title">All Categories</h3>

        <div class="table-responsive">
          <table class="data-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Category Name</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
              <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
              </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
</div>