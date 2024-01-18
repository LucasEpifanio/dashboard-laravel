<section>
    <header class="imagem-user">
        @livewire('update-profile-image')
        <br>
        <div>{{ __('Welcome') }} , {{ Auth::user()->name }}</div>
        <p>Gerencie suas informações, privacidade e segurança para que o atenda suas necessidades.</p>
    </header>

</section>
