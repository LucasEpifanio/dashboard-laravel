<div>
    @if ($notifications->isEmpty())
        <div>Não há notificações</div>
    @else
        <ul>
            @foreach ($notificationData as $notification)
                <li>
                    {{ $notification['id'] }} - {{ $notification['notificacao'] }} - {{ $notification['status'] }}
                </li>
            @endforeach
        </ul>
    @endif
    <div class="info-notification">

        <div class="notification-item">
            <label>João</label>
            <button>
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
        <div class="notification-item">
            <label>Lucas</label>
            <button>
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
        <div class="notification-item">
            <label>Vinicius</label>
            <button>
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
    </div>
    <button class="button-bottom">
        {{ __('Mark everything as read') }}
    </button>
</div>
