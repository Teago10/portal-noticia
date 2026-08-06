<div class="mb-6 text-red-500">
    <p class="font-semibold">Verifique os erros abaixo</p>
    <ul>
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>
</div>


<div class="mb-4">
    <label for="nome" class="form-label">Nome *</label>
    <input type="text" value="{{ old('nome', $categoria->nome)}}" name="nome" id="nome" class="form-control">
</div>

<div class="mb-4">
    <label for="descricao" class="form-label">Descrição *</label>
    <textarea name="descricao" id="descricao" rows="3" class="form-control">{{ old('descricao', $categoria->descricao)}}</textarea>
</div>

<div class="mb-4">
    <label for="cor" class="form-label">cor *</label>
    <input type="color" value="{{ old('cor', $categoria->cor)}}" name="cor" id="cor" class="rounded-lg text-sm focus:ring-2 focus:ring-red-600">
</div>



<div class="md-4">
    <button type="submit" class="bg-slate-900 text-white px-4 py-2 rounded-lg">Salvar</button>
    <a href="#" class="bg-slate-200 text-slate-800 px-4 py-2 rounded-lg inline-block">Cancelar</a>
</div>