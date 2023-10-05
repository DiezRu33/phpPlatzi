@csrf

<label for="" class="uppercase text-white text-xs">Título</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>

<input type="text" name="title" class="bg-gray-500 text-gray-800 rounded border-gray-800 w-full mb-4" value="{{ old('title', $post->title) }}">

<label for="" class="uppercase text-white text-xs">Slug</label>
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>

<input type="text" name="slug" class="bg-gray-500 text-gray-800 rounded border-gray-800 w-full mb-4" value="{{ old('slug', $post->slug) }}">

<label for="" class="uppercase text-white text-xs">Contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>

<textarea name="body" rows="5" class="bg-gray-500 text-gray-800 rounded border-gray-800 w-full mb-4">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="bg-gray-500 rounded px-4 py-2">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-500 text-white rounded px-4 py-2">
</div>