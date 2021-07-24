<div>
        <table class="table" id="ingredients_table">
            <thead>
                <tr>
                    <th>Ingredient</th>

                    <th>Qty</th>

                    <th>Units</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postIngredients as $index => $postIngredients)
                <tr>
                    <td>
                        <input type="text" name="postIngredients[{{$index}}][quantity][units]" class="form-control" wire:model="postIngredients.{{$index}}.quantity.units" />
                    </td>
                    <td>
                        <input type="number" name="postIngredients[{{$index}}][quantity][units]" class="form-control" wire:model="postIngredients.{{$index}}.quantity.units" />
                    </td>
                    <td>
                        <input type="text" name="postIngredients[{{$index}}][quantity][units]" class="form-control" wire:model="postIngredients.{{$index}}.quantity.units" />
                    </td>
                    <td>
                        <a href="#" wire:click.prevent="removeIngredient({{$index}})">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-secondary"
                            wire:click.prevent="addIngredient">+ Add Another Ingredient</button>
                    </div>
        </div>
</div>
