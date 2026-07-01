<div class="md-4">
    <label for="categoria_id" class="form-label">Categoria *</label>
    <select id="categoria_id" name="categoria_id" class="form-control">
        <option></option>
        <option value="1">Tecnologia</option>
    </select>
</div>

<div class="md-4">
    <label for="titulo" class="form-label">Título *</label>
    <input type="text" name="titulo" id="titulo" class="form-control">
</div>

<div class="md-4">
    <label for="resumo" class="form-label">Resumo</label>
    <textarea name="resumo" id="resumo" cols="30" rows="3" class="form-control"></textarea>
</div>

<div class="md-4">
    <label for="conteudo" class="form-label">Conteudo</label>
    <textarea name="conteudo" id="conteudo" cols="30" rows="10" class="form-control"></textarea>
</div>

<div class="md-4">
    <label for="imagem" class="form-label">Imagem *</label>
    <input type="file" name="imagem" id="imagem" class="form-control">
</div>

<div class="md-4">
    <label >Situação</label>
    <div>
        <label >
            <input type="radio" name="ativo" value="1">
            Publicado
        </label>
        <label >
            <input type="radio" name="ativo" value="0" checked>
            Rascunho
        </label>
    </div>
</div>

<div class="md-4">
    <button type="submit" class="bg-slate-500 text-white px-4 py-2 rounded-lg">Enviar</button>
    <a href="#" class="bg-slate-200 text-stone-800 px-4 py-2 rounded-lg inline-block">Cancelar</a>
</div>