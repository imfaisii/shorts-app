@props(['alert'])
<div class="container mt-4">
    <div class="alert alert-{{ $alert['status'] ?? 'success' }}" role="alert">
        @if ($alert['status'] === 'success')
            <div class="alert-icon"><i class="fas fa-check " style="margin-right:10px;"></i>{{ $alert['message'] }}</div>
        @elseif ($alert['status'] === 'danger')
            <div class="alert-icon"><i class="fas fa-times " style="margin-right:10px;"></i>{{ $alert['message'] }}</div>
        @elseif ($alert['status'] === 'warning')
            <div class="alert-icon"><i class="fas fa-exclamation-triangle "
                    style="margin-right:10px;"></i>{{ $alert['message'] }}</div>
        @elseif ($alert['status'] === 'info')
            <div class="alert-icon"><i class="fas fa-info-circle "
                    style="margin-right:10px;"></i>{{ $alert['message'] }}</div>
        @else
            <div class="alert-icon"><i class="fas fa-question " style="margin-right:10px;"></i>{{ $alert['message'] }}
            </div>
        @endif
    </div>
</div>
