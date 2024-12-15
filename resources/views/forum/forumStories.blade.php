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
            <div class="row mb-2">
                <div class="container py-2 rounded-1">
                    <div class="row bg-body-secondary pt-1">
                        <a href="{{ URL::to('/forum/stories/' . $item->id) }}">{{ $item->name }}</a>
                        <span class="mb-1">von: {{ $item->getCreatorName() }}</span>
                    </div>
                    <div class="row bg-body-tertiary py-1">
                        <p>{{ $item->content }}</p>
                    </div>
                    <div class="row d-flex bg-body-secondary justify-content-start pt-2">
                        <p class="col-md-auto">
                            <span class="badge rounded-pill text-bg-secondary">
                                <i class="fa-solid fa-comment"></i> {{ $item->getCommentCount() }}
                            </span>
                        </p>
                        @if ($item->getTags())
                            @foreach ($item->getTags() as $tag)
                                <p class="col-md-auto">
                                    <span class="badge rounded-pill text-bg-secondary"><i class="fa-solid fa-tag"></i> {{ $tag->name }}</span>
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