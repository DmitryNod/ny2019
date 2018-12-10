<div class="row justify-content-center mb-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                {{ $wish->fullName() }} поздравляет
                    {{ ($wish->wish_for == 'all') ? "Всех" : $wish->wish_for }}
            </div>
            <div class="card-body">
                {!! Markdown::convertToHtml($wish->wish) !!}
            </div>
        </div>
    </div>
</div>