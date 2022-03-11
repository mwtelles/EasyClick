<div class="form-group">
    <form id="form-orderBy">
        <label>Ordernar por</label>
        <select onchange="$('#form-orderBy').submit()" class="form-control" name="order">
            <option value="DESC" @if(request()->order === 'DESC') selected @endif>Mais Recente</option>
            <option value="ASC" @if(request()->order === 'ASC') selected @endif>Mais Antigo</option>
        </select>
    </form>
</div>
