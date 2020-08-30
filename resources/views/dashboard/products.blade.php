<h5>Todos los productos</h5>
<ul class="list-group">
  @forelse ($products as $product)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $product->name }}
        <div class="actions">
        <a href="#" class="text-decoration-none btn-link text-secondary mr-2">ver</a>
        <a href="#" class="text-decoration-none btn-link text-primary mr-2">editar</a>
        <a href="#" class="text-decoration-none btn-link text-danger mr-2">eliminar</a>
        </div>
    </li>
  @empty
      <span class="h2">No hay productos para mostrar</span>
  @endforelse
</ul>