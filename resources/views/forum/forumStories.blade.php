<x-navigation></x-navigation>

<div class="container mt-3">
    <h2>Creatives Schreiben</h2>
</div>

<div class="container mt-5 border">
    <div class="row bs-light border-bottom text-bg-dark">
        <h3>Geschichten</h3>
    </div>
    <div class="row px-3 pt-2">
        <div class="container">
        @foreach ($data as $item)
            <div class="row">
                <div class="container bg-primary">
                    <div class="row">
                        <h3>{{ $item->name }}</h3>
                        <p>von: {{ $item->getCreatorName() }}</p>
                    </div>
                    <div class="row">
                        <p>{{ $item->content }}</p>
                    </div>
                    <div class="row d-flex justify-content-start">
                        <p class="col-md-auto">
                            <span class="badge rounded-pill text-bg-secondary">
                                <i class="fa-solid fa-comment"></i> {{ $item->getCommentCount() }}
                            </span>
                        </p>
                        @if ($item->getTags())
                            @foreach ($item->getTags() as $tag)
                                <p class="col-md-auto">
                                    <span class="badge rounded-pill text-bg-secondary"> #{{ $tag->name }}</span>
                                </p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

<x-footer></x-footer>