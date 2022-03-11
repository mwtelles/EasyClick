@if ($videos->lastPage() > 1)
    <ul class="pagination m-auto">
        <li class="{{ ($videos->currentPage() == 1) ? ' d-none' : 'active' }}">
            <a href="{{ $videos->url(1) }}" class="btn btn-outline-light btn-sm">Anterior</a>
        </li>
        @for ($i = 1; $i <= $videos->lastPage(); $i++)
            <li  >
                <a href="{{ $videos->url($i) }}" class=" btn  btn-sm {{ ($videos->currentPage() == $i) ? ' btn-light' : 'btn-outline-light'     }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($videos->currentPage() == $videos->lastPage()) ? ' d-none' : 'active' }}">
            <a href="{{ $videos->url($videos->currentPage()+1) }}" class="btn btn-outline-light btn-sm" >Próximo</a>
        </li>
    </ul>
@endif
