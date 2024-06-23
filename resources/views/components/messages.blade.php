@session('error')
<div class="mt-2 bg-red-100 border border-red-200 text-sm text-red-800 rounded-card p-4" role="alert">
    {{ session('error') }}
</div>
@endsession

@session('message')
<div class="mt-2 bg-amber-100 border border-amber-200 text-sm text-amber-800 rounded-card p-4" role="alert">
    {{ session('message') }}
</div>
@endsession
