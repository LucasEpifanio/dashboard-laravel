
<div class="containe-img-master">
    <div class="containe-img">
        @if($imagemPerfil !== null)
            <img src="{{$imagemPerfil->temporaryUrl()}}" alt="logo do usuario">
        @else
            @if(Auth::user()->imagem == null || Auth::user()->imagem  == "")
                <div class="img-temporary">{{ ucfirst(substr(Auth::user()->name, 0, 1)) }}</div>
            @else
                <img src="./storage/profile/{{ Auth::user()->imagem }}" alt="logo do usuario">
            @endif

        @endif
        <div class="container-buttons-img">
            <input id="input-open-file" onclick="alternarVisibilidade()" class="input-personalizado" type="file" wire:model="imagemPerfil">
            <i class="fa-solid fa-camera"></i>
        </div>

        </div>
        <button class="button-confirm-new-img" style="display:{{$styleButton}};" type="button" wire:click="salvarImagem">{{ __('to add') }}</button>
</div>
